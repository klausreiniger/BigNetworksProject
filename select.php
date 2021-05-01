<?php
	include 'connect.php';
	$query = "SELECT * FROM carro";
	$list_items = mysqli_query($con, $query);
?>