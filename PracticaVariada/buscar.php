<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscar</title>
</head>
<body>
	<h1>Rellena un campo</h1>
	<form action="procesarbuscar.php" method="POST">
		<table>
			<tr>
				<td>Nombre: </td>
				<td><input type="text" placeholder="Nombre" id="nombre" name="nombre"></td>
			</tr>
			<tr>
				<td>Apellido: </td>
				<td><input type="text" placeholder="Apellido" id="apellido" name="apellido"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" placeholder="Email" id="email" name="email"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Enviar"></td>
				<td><input type="reset" value="Borrar"></td>
			</tr>
		</table>
	</form>
</body>
</html>