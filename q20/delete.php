<?php
$id = $_GET['id'];

include 'conn.php';

$sql = "DELETE FROM crud WHERE id =  '$id'";

mysqli_query($conn,$sql);
header('location:view.php');
?>