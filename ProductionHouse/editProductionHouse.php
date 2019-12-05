<?php
include_once("../config.php");
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $name=$_POST['name'];
    $sql= "UPDATE productionhouse SET name='$name' WHERE id='$id'";
    $result = mysqli_query($mysqli,$sql);

    header("Location: index.php");
}
?>
<?php
$id =  isset($_GET['id']) ? $_GET['id'] : '';
$result = mysqli_query($mysqli,"SELECT * FROM productionhouse WHERE id=$id");

while($row = mysqli_fetch_array($result))
{
    $name = $row['name'];
}
?>
<html>
<head>  
    <title>Edit Production House</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>

<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Edit Production House</h2>
                    </div>

                    <form method="post" action="editProductionHouse.php" name="form1">
                         <div class="form-group">
                            <label>Name</label>
                            <?php echo "<input type='text' class='form-control' name='name' value='$name'>"?>;
                        </div>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="submit"  class="btn btn-primary"  name="update" value="Update">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>