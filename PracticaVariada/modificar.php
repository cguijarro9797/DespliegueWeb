<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar</title>
</head>
<body>
	<form action="procesaractualizar.php" method="POST">
		<table>
			<tr>
				<td>Nombre que quieres actualizar: </td>
				<td><input type="text" placeholder="Nombre" name="nombre"></td>
			</tr>
			<tr>
				<td>Nuevo Nombre: </td>
				<td><input type="text" placeholder="Nuevo Nombre" name="nuevon"></td>
			</tr>
			<tr>
				<td>Nuevo Apellido: </td>
				<td><input type="text" placeholder="Nuevo Apellido" name="nuevoa"></td>
			</tr>
			<tr>
				<td>Nuevo Email: </td>
				<td><input type="text" placeholder="Nuevo Email" name="nuevoe"></td>
			</tr>
				<td><input type="submit" value="Enviar"></td>
				<td><input type="reset" value="Borrar"></td>
			</tr>
		</table>
	</form>
</body>
</html>