<html>
<head>
	<title>añadir usuarios</title>
</head>

<body>
	<a href="index.php">volver</a>
	<br/><br/>


    <p id="nombre"></p>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>nombre</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr> 
				<td>apellido</td>
				<td><input type="text" name="apellido"></td>
			</tr>
			<tr> 
				<td>email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	<button href="verificacion.js">verificacion</button>
	<?php
	$servername = "localhost";
	$username = "alumno";
	$password = "alumno";
	$dbname = "TRABAJODB";
	//conexion
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO usuarios(nombre,apellido,email) VALUES('$name','$apellido','$email')");
		
		// Show message when user added
		echo "usuario añadido exitosamente. <a href='index.php'>View Users</a>";
	}
	mysqli_close($conn);
	?>
</body>
</html>
