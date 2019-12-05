<?php
include_once("config.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';
$movie = $genre = $productionHouseId="";

$result = mysqli_query($mysqli, "SELECT * FROM movie WHERE id = '$id'");

while($row = mysqli_fetch_array($result))
{
    $movie = $row['movie'];
    $genre = $row['genre'];
    $productionHouseId = $row['productionHouseId'];
}

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $movie=$_POST['movie'];
    $genre = $_POST['genre'];
    $productionHouseId = $_POST['productionHouseId'];

    
    $result = mysqli_query($mysqli, "UPDATE movie SET movie = '$movie',genre = '$genre',productionHouseId = '$productionHouseId' WHERE id = '$id'");
    header("Location: index.php");
}
?>
<html>
<head>  
    <title>Edit Movie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>

<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Edit Movie</h2>
                    </div>

                    <form method="post" action="editMovie.php">
                        <div class="form-group">
                            <label>Movie</label>
                            <?php echo "<input type='text' class='form-control' name='movie' value='$movie'>";?>
                            <label>Genre</label>
                            <?php echo "<input type='text' class='form-control' name='genre' value='$genre'>";?>
                            <label>Production House</label>
                            <select name="productionHouseId" value="asd" class="form-control">
                                <?php
                                $productionHouses = mysqli_query($mysqli, "SELECT * FROM productionhouse");
                                while($d=mysqli_fetch_array($productionHouses))
                                {
                                if($d[id]==$productionHouseId){
                                    echo "<option selected='selected' value='$d[id]'> $d[name] </option>";
                                }else{
                                    echo "<option value='$d[id]'> $d[name] </option>";
                                }
                                
                                }
                                ?>
                                </select>
                        </div>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="submit"  class="btn btn-primary"  name="update">
                        <a href="index.php" class="btn btn-default">Cancel</a>
    
                    </form>
                    </div>
            </div>        
        </div>
    </div>
</body>
</html>