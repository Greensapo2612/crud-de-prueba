<html>
<head>    
    <title>pagina de inicio</title>
</head>

<body bgcolor="#99ff99">
<a href="add.php">adherir nuevo usuario</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>nombre</th> <th>apellido</th> <th>Email</th> <th>Update</th>
     
    </tr>
    <?php  
    $servername = "localhost";
    $dbname = "TRABAJODB";
    $username = "alumno";
    $password = "alumno";

    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nombre']."</td>";
        echo "<td>".$user_data['apellido']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>