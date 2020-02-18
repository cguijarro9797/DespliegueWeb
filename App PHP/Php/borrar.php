<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="CarlosDB";

	//solo poner dbname si esta creada la base de datos
	$conn= new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die("Conexion fallida: ".$conn->connect_error);
	}

	$sql = "truncate table guests";

		if($conn->query($sql) === TRUE){
			echo "Datos eliminados correctamente<br>";
		}else{
			echo "Error al eliminar datos: ".$conn->error;
		}
	echo '<br><br><a href="index.html">Volver</a>';
	$conn->close();
 ?>