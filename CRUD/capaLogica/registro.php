<?php
include '../capaDatos/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $apellido = $_POST['last-name'];
    $correo = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $contra = $_POST['password'];

    // Verificar si el correo ya está registrado
    $query_check = "SELECT id_usuario FROM Usuarios WHERE correo = ?";
    $stmt_check = mysqli_prepare($conn, $query_check);
    mysqli_stmt_bind_param($stmt_check, "s", $correo);
    mysqli_stmt_execute($stmt_check);
    mysqli_stmt_store_result($stmt_check);

    if (mysqli_stmt_num_rows($stmt_check) > 0) {
        echo "Error: El correo ya está registrado.";
    } else {
        // Hashear la contraseña
        $hashed_password = password_hash($contra, PASSWORD_BCRYPT);

        // Insertar el usuario en la base de datos
        $query_insert = "INSERT INTO Usuarios (nombre, apellido, correo, contra) VALUES (?, ?, ?, ?)";
        $stmt_insert = mysqli_prepare($conn, $query_insert);
        mysqli_stmt_bind_param($stmt_insert, "ssss", $nombre, $apellido, $correo, $hashed_password);

        if (mysqli_stmt_execute($stmt_insert)) {
            // El trigger creará automáticamente un perfil asociado
            header("Location: ../capaPresentacion/login.html");
            exit();
        } else {
            echo "Error al registrar usuario.";
        }
    }

    // Cerrar las consultas
    mysqli_stmt_close($stmt_check);
    mysqli_stmt_close($stmt_insert);
}

// Cerrar conexión
mysqli_close($conn);
?>