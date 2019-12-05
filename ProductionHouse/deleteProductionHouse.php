<?php
include_once("../config.php");

$id = $_GET['id'];
$sql="DELETE FROM productionhouse WHERE id=$id";
$result = mysqli_query($mysqli, $sql);
if($result){
    header("Location:index.php");
}else{
    // header("Location:index.php");
    echo "<script>alert('You cannot delete because this production house already house in movie');
    window.location = 'index.php'
    </script>";
}

?>