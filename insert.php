<?php
	include 'connect.php';
	$modelo = $_POST["modelo"];
	$ano = $_POST["ano"];
	$cor = $_POST["cor"];
	$fabricante = $_POST["fabricante"];
	$placa = $_POST["placa"];
	$query = "INSERT INTO carro(id,modelo,ano,cor,fabricante,placa) VALUES (null,'$modelo',$ano, '$cor', '$fabricante', '$placa')";
	mysqli_query($con,$query);
	header("location:hello.php");
?>