<?php
// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $nombreApellidos = $_POST['nombre_apellidos'];
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $ocupacion = $_POST['ocupacion'];
    $contacto = $_POST['contacto'];
    $nacionalidad = $_POST['nacionalidad'];
    $aptitudes = isset($_POST['aptitudes']) ? $_POST['aptitudes'] : '';
    $perfil = isset($_POST['perfil']) ? $_POST['perfil'] : '';


    // Construir el mensaje de éxito
    $mensaje = "<h2>¡Formulario enviado con éxito!</h2>";
    $mensaje .= "<p>Nombre y Apellidos: $nombreApellidos</p>";
    $mensaje .= "<p>Fecha de Nacimiento: $fechaNacimiento</p>";
    $mensaje .= "<p>Ocupación: $ocupacion</p>";
    $mensaje .= "<p>Contacto: $contacto</p>";
    $mensaje .= "<p>Nacionalidad: $nacionalidad</p>";
    $mensaje .= "<p>Aptitudes: $aptitudes</p>";
    $mensaje .= "<p>Perfil: $perfil</p>";
    $mensaje .="<p>Github: https://github.com/GaelASG </p>";
    // Agregar más datos según sea necesario...

    // Devolver el mensaje
    echo $mensaje;
} else {
    // Si no se ha enviado el formulario, redirigir al formulario
    header("Location: formulario.html");
    exit();
}
?>