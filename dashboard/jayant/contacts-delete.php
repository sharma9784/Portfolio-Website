<?php 
	include 'include/dbcon.php';
	$id = $_GET['id'];

	$sql = "DELETE FROM contact WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	header('location:contacts.php');
 ?>