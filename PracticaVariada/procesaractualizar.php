<?php 
	$nombre = $_POST["nombre"];
	$nuevon = $_POST["nuevon"];
	$nuevoa = $_POST["nuevoa"];
	$nuevoe = $_POST["nuevoe"];

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="CarlosDB";

	//solo poner dbname si esta creada la base de datos
	$conn= new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die("Conexion fallida: ".$conn->connect_error);
	}

	$sql = "update guests set nombre = '".$nuevon."', apellido='".$nuevoa."', email='".$nuevoe."' where nombre='".$nombre."'";

	if($conn->query($sql) === TRUE){
		echo "Datos actualizados correctamente<br>";
		echo "Nombre: ".$nuevon."<br>Apellido: ".$nuevoa."<br>Email: ".$nuevoe;
	}else{
		echo "Error al actualizados datos: ".$conn->error;
	}

	echo '<br><br><a href="index.html">Volver</a>';
	$conn->close();
 ?>