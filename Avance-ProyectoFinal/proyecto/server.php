<?php
$server = "localhost"; 
$user = "root";
$pass = "";

$connection = mysqli_connect($server, $user, $pass);

if (!$connection) {
    echo "No se ha podido conectar con el servidor";
} else {
    echo "<b><h3>Hemos conectado al servidor</h3></b>";
}

$datab = "test";  // Asegúrate de que esta base de datos existe en tu servidor
$db = mysqli_select_db($connection, $datab);

if (!$db) {
    echo "No se ha podido encontrar la Tabla";
} else {
    echo "<h3>Tabla seleccionada:</h3>";
}

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["psw"];
$rPass = $_POST["psw-repeat"];

if ($password != $rPass) {
    die('Las contraseñas no coinciden <br><br><a href="prieba.html">Volver</a>');
}

$instruccion_SQL = "INSERT INTO usuario (nombre, correo, contrasena) VALUES ('$nombre','$email','$password')";
$resultado = mysqli_query($connection, $instruccion_SQL);

$consulta = "SELECT * FROM usuario";
$result = mysqli_query($connection, $consulta);

if (!$result) {
    echo "No se ha podido realizar la consulta";
}

mysqli_close($connection);
?>
