<?php
include('dbcon.php');

	$id = $_GET['id'];
	
	$q = "DELETE FROM teacher WHERE id=$id";

	$query = mysqli_query($con,$q);

	header('location: view_teacher.php');
?>