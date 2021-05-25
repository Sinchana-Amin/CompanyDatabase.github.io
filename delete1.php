<?php
include 'connection1.php';
$id = $_GET['id'];

$deletequery = " delete from app_development where id=$id";
$query = mysqli_query($con,$deletequery);
header('location:display1.php');
?>