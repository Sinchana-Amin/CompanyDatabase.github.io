<?php
include 'connection2.php';
$id = $_GET['id'];

$deletequery = " delete from data_scientist where id=$id";
$query = mysqli_query($con,$deletequery);
header('location:display2.php');
?>