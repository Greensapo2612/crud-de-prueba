 <?php
$servername = "localhost";
$username = "alumno";
$password = "alumno";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}
echo "Conexion exitosa";

$sql = "CREATE DATABASE TRABAJODB";
if (mysqli_query($conn, $sql)) {
  echo " base de datos creada exitosamente";
} else {
  echo " Error en la creacion: " . mysqli_error($conn);
}

mysqli_close($conn);
?>