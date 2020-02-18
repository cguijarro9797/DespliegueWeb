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

	$sql = "select * from guests";

	$result = $conn->query($sql);
	echo "<table border=1>";
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			/*echo "id: ".$row["id"]." - Nombre: ".$row["nombre"]." - Apellido: ".$row["apellido"]." - Email: ".$row["email"]."<br>";*/

			echo "
				
					<tr>
						<td>".$row["id"]."</td>
						<td>".$row["nombre"]."</td>
						<td>".$row["apellido"]."</td>
						<td>".$row["email"]."</td>
					</tr>
				
			";
		}
	}else{
		echo "0 resultados.";
	}


	echo "</table>";

	echo '<br><br><a href="index.html">Volver</a>';
 ?>