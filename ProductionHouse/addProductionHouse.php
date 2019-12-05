<?php
    include_once("../config.php");
?>
<html>
<head>
    <title>Add Production House</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>

<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add Production House</h2>
                    </div>
                    <form action="addProductionHouse.php" method="post" name="formAddProductionHouse">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="productionHouse" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                   </form>
                   <?php
                    include_once("../config.php");

                    if(isset($_POST['Submit'])) {
                        $productionHouse = $_POST['productionHouse'];
                        $sql="INSERT INTO productionhouse (name) VALUES ('$productionHouse')";
                        $result = mysqli_query($mysqli, $sql);
                        header('location: index.php');
                    }
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>