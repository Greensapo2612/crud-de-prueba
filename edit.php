<?php
$servername = "localhost";
$dbname = "TRABAJODB";
$username = "alumno";
$password = "alumno";

// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',email='$email' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
}
?>
<html>
<head>	
	<title>Editar usuarios</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
    <a href="verificacion.html">verificacion</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>nombre</td>
				<td><input type="text" name="nombre" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>apellido</td>
				<td><input type="text" name="apellido" value=<?php echo $apellido;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>


