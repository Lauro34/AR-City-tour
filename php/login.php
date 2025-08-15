<?php
session_start(); // Inicia la sesión

include 'config.php'; // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Verifica que se haya enviado el formulario
    $email = $_POST['email'];        // Email ingresado
    $password = $_POST['password'];  // Contraseña ingresada

    // Buscar el usuario por email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); // Obtener los datos del usuario

        // Verificar contraseña
        if (password_verify($password, $user['password'])) {
            // Guardar datos en sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nombre'] = $user['nombre'];

            // Redirigir al usuario a la app
            header("Location: ../app.html");
            exit();
        } else {
            echo "Contraseña incorrecta. <a href='../login.html'>Volver</a>";
        }
    } else {
        echo "Usuario no encontrado. <a href='../register.html'>Registrarse</a>";
    }
}
?>
