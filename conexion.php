<?php
$servername = "localhost";
$username = "alumno";
$password = "alumno";
$dbname = "TRABAJODB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE usuarios (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
apellido VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Tabla usuarios creada exitosamente";
} else {
  echo "Error creando tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 