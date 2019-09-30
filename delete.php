<?php
include('dbcon.php');

	$id = $_GET['id'];
	
	$q = "DELETE FROM student2 WHERE id=$id";

	$query = mysqli_query($con,$q);

	header('location: view_table.php');
?>