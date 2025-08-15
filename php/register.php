<?php
session_start(); // Inicia la sesión para usar variables de sesión si es necesario

include 'config.php'; // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Verifica que el formulario se haya enviado
    $nombre = $_POST['nombre'];   // Nombre completo
    $email = $_POST['email'];     // Email ingresado
    $password = $_POST['password']; // Contraseña ingresada

    // Encriptar la contraseña para seguridad
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertar usuario en la base de datos
    $sql = "INSERT INTO users (nombre, email, password) VALUES ('$nombre', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Registro exitoso
        echo "Registro exitoso. <a href='../login.html'>Iniciar sesión</a>";
    } else {
        // Si hay error (por ejemplo email duplicado)
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
