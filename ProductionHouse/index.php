<html>
<head>    
    <title>Production House</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>

<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Production House</h2>
                        <a href="../" class="btn btn-info pull-right" >Movie List</a>
                        <a href="addProductionHouse.php" class="btn btn-success pull-right" style="margin-right:24px;">Add New Production House</a>
                    </div>

             <table class='table table-bordered table-striped'>      
                <thead>
                <tr>
                    <th>Name</th><th>Action</th>
                </tr>
                </thead>
                    <?php  
                    include_once("../config.php");
                    $sql ="SELECT * FROM productionhouse";
                    if($result = mysqli_query($mysqli,$sql)){
                        while($productionHouseList = mysqli_fetch_array($result)) {   
                            echo "<tr>";
                            echo "<td>".$productionHouseList['name']."</td>"; 
                            echo "<td><a href='editProductionHouse.php?id=$productionHouseList[id]'>Edit</a> | <a href='deleteProductionHouse.php?id=$productionHouseList[id]'>Delete</a></td></tr>";        
                        }
                    }else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    mysqli_close($mysqli);
                    ?>
            </table>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>