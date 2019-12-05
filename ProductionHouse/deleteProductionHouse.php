<?php
include_once("../config.php");

$id = $_GET['id'];
$sql="DELETE FROM productionhouse WHERE id=$id";
$result = mysqli_query($mysqli, $sql);

header("Location:index.php");
?>