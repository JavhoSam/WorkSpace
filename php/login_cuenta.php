<?php

session_start();

require 'conexion.php';

$Contrasena = $_POST['contrasena'];
$Contrasena = hash('sha512', $Contrasena);

$Usuario = $_POST['usuario'];

$Rol = $_POST['rol'];

$ValidarLogin = mysqli_query($conn, "SELECT * FROM tsesion WHERE contrasena='$Contrasena'and nombreusuario='$Usuario'");

    if(mysqli_num_rows($ValidarLogin) > 0) {
    $_SESSION['usuario'] = $Usuario;

    echo "<script> alert('Datos correctos');</script>";
    echo "<script>window.location.href = '../Login.php?exito=1';</script>";
        exit;
    }
    else {
    echo "<script> alert('Datos incorrectos, verifique su usuario y contraseña');</script>";
    echo "<script>window.location.href = '../index.php?exito=1';</script>";
    exit;
    }


$conn->close();
?>



