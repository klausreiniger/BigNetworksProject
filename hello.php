<!DOCTYPE html>
<html lang="pt-br">
	<header>
		<title>Vrum Vrum</title>
		<meta charset="utf8">
	</header>
	<body>
		<h1>Vrum Vrum</h1>
		<a href="create.php"><h3>Inserir</h3></a>
		<table>
			<tr>
				<th>Modelo</th>
				<th>Ano</th>
				<th>Cor</th>
				<th>Fabricante</th>
				<th>Placa</th>
			</tr>
				<?php
					include 'select.php';
					while($row = mysqli_fetch_array($list_items)){
						echo '<tr>';
						echo '<th>'.$row['modelo'].'</th>';
						echo '<th>'.$row['ano'].'</th>';
						echo '<th>'.$row['cor'].'</th>';
						echo '<th>'.$row['fabricante'].'</th>';
						echo '<th>'.$row['placa'].'</th>';
						echo "<th><a href='delete.php?id=".$row['id']."'>Delete here</a></th>";
						echo '</tr>';
					}
				?>
		</table>
	</body>
</html>