<?php
	include 'connect.php';
	$id = $_GET["id"];
	$query = "DELETE FROM carro WHERE id = $id";
	mysqli_query($con,$query);
	header("location:hello.php");
?>