<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<h1>Datos</h1>
<table border="1">
	<thead>
			<tr><!-- filas -->
				<th>nombre</th>
				<th>apellido</th>
				<th>fecha nacimiento</th>
				<th>dni</th>

			</tr>
	</thead>
	<tbody>
		<tr>
			<td>carlos</td>
			<td>mori</td>
			<td>1989</td>
			<td>47244430</td>
		</tr>
	</tbody>

</table>
<?php 
$fecha = 1989;
$hoy =2016;
$calculo = $hoy - $fecha; 
echo "miedad: ".$calculo;
?>
	
</body>
</html>