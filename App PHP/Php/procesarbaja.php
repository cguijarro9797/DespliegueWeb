<?php 
	$nombre = $_POST["nombre"];
	//Ip del ordenador en el que tengamos la base de datos
	$servername="192.168.1.244";
	$username="root";
	$password="";
	$dbname="CarlosDB";

	//solo poner dbname si esta creada la base de datos
	$conn= new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die("Conexion fallida: ".$conn->connect_error);
	}

	$sql = "delete from guests where nombre='".$nombre."'";

	if($conn->query($sql) === TRUE){
		echo "Datos eliminados correctamente<br>Nombre: ".$nombre;
	}else{
		echo "Error al eliminar datos: ".$conn->error;
	}

	echo '<br><br><a href="index.html">Volver</a>';
	$conn->close();
 ?>
