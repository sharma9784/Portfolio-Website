<?php

	include 'include/dbcon.php'; 
	$id = $_GET['id'];
	$sql = "SELECT * FROM details WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
	// unlink('img/client/'.$result['image']);


	$sql2 = "DELETE FROM details WHERE id = '$id'";
	$run2 = mysqli_query($con,$sql2);
	header('location:detail.php');
 ?> 