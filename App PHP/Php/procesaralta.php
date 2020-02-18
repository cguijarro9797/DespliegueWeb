<?php 
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$email = $_POST["email"];

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="CarlosDB";

	//solo poner dbname si esta creada la base de datos
	$conn= new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die("Conexion fallida: ".$conn->connect_error);
	}

	$sql = "insert into guests (nombre, apellido, email) values('".$nombre."','".$apellido."','".$email."')";

	if($conn->query($sql) === TRUE){
		$last_id = $conn->insert_id;
		echo "Datos insertados correctamente<br>Identificador: ".$last_id."<br>";
		echo "Nombre: ".$nombre."<br>Apellido: ".$apellido."<br>Email: ".$email;
	}else{
		echo "Error al insertar datos: ".$conn->error;
	}

	echo '<br><br><a href="index.html">Volver</a>';
	$conn->close();
 ?>