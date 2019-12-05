<?php
include_once("config.php");
$sql="SELECT m.id,m.movie,m.genre,ph.name FROM movie m INNER JOIN productionhouse ph ON ph.id = m.productionHouseId";
$result = mysqli_query($mysqli,$sql )or die(mysql_error());
?>

<html>
<head>    
    <title>Movie List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>

<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="page-header clearfix">
                        <h2 class="pull-left">Movie List</h2>
                        <a href="ProductionHouse" class="btn btn-info pull-right">Production House</a>
                        <a href="addMovie.php" class="btn btn-success pull-right" style="margin-right:24px;">Add New Movie</a>
                    </div>
                    <table class='table table-bordered table-striped'>      
                        <thead> 
                            <tr>
                                <th>Movie</th><th>Genre</th><th>Production House</th><th>Update</th>
                            </tr>
                        </thead>
                            <?php  
                            while($movie = mysqli_fetch_array($result)) {         
                                echo "<tr>";
                                echo "<td>".$movie['movie']."</td>"; 
                                echo "<td>".$movie['genre']."</td>"; 
                                echo "<td>".$movie['name']."</td>"; 
                                echo "<td><a href='editMovie.php?id=$movie[id]'>Edit</a> | <a href='deleteMovie.php?id=$movie[id]'>Delete</a></td></tr>";        
                            }
                            ?>
                    </table>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>