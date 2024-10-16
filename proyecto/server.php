<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "test"; 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'Usuario';
    $email = isset($_POST['email']) ? $_POST['email'] : 'No especificado';
    $password = isset($_POST['psw']) ? $_POST['psw'] : '';

    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuario (nombre, correo, contrasena) VALUES ('$nombre', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='confirmation-page'>"; // Asegúrate de que la clase esté bien escrita
        echo "<h1>Hemos conectado al servidor</h1>";
        echo "<h2>¡Bienvenido a la Biblioteca Virtual!</h2>";
        echo "<p>Gracias por registrarte, <strong>" . htmlspecialchars($nombre) . "</strong>.</p>";
        echo "<p>Tu correo electrónico es: <strong>" . htmlspecialchars($email) . "</strong>.</p>";
        echo "<p>Contraseña: " . htmlspecialchars($password) . "</p>";
        
        // Mostrar libros recomendados
        echo "<h3>Estos son algunos de los libros recomendados para ti:</h3>";
        echo "<ul>";
        echo "<li>El Retrato de Dorian Gray</li>";
        echo "<li>Fairy Oak: El Secreto de las Gemelas</li>";
        echo "<li>El Hobbit</li>";
        echo "</ul>";
        
        echo "<button onclick='window.location.href=\"/prueba.html\"'>Volver al inicio</button>";
        echo "</div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
