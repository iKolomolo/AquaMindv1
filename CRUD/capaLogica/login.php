<?php
session_start();
include '../capaDatos/conexion.php'; // Asegúrate de incluir la conexión a la BD

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['email'];
    $contra = $_POST['password'];

    $stmt = $conn->prepare("SELECT id_usuario, contra, rol FROM Usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_usuario, $hash_contra, $rol);
        $stmt->fetch();

        // Verificamos la contraseña
        if (password_verify($contra, $hash_contra)) {
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['rol'] = $rol;

            // Redirección según el rol
            if ($rol == 'admin') {
                header("Location: ../capaPresentacion/admin.php");
            } else { // usuario
                header("Location: ../capaPresentacion/main.html");
            }
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Correo no encontrado.";
    }

    $stmt->close();
    $conn->close();
}
?>