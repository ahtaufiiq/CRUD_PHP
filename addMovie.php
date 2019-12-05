<?php
    include_once("config.php");
    
    if(isset($_POST['Submit'])) {
        $movie = $_POST['movie'];
        $genre = $_POST['genre'];
        $productionHouseId = $_POST['productionHouseId'];
        $sql="INSERT INTO movie(movie,genre,productionHouseId) VALUES('$movie','$genre','$productionHouseId')";
        $result = mysqli_query($mysqli, $sql);

        header('location: index.php');
    }
?>
<html>
<head>
    <title>Add Movie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>

<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add Movie</h2>
                    </div>

                    <form action="addMovie.php" method="post">

                        <div class="form-group">
                            <label>Movie</label>
                            <input type="text" name="movie" class="form-control">
                            <label>Genre</label>
                            <input type="text" name="genre" class="form-control">
                            <label>Production House</label>
                            <select name="productionHouseId" class="form-control">
                            <?php

                            $productionHouses = mysqli_query($mysqli, "SELECT * FROM productionhouse");
                            while($d=mysqli_fetch_array($productionHouses))
                            {
                            echo "<option value='$d[id]'> $d[name] </option>";
                            }
                            ?>
                            </select>
                            
                        </div>
                        <input type="submit" class="btn btn-primary" name="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                   </form>
                 </div>
            </div>        
        </div>
    </div>
</body>
</html>