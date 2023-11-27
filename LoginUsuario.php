<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    echo "<script> alert('Por favor, debes iniciar sesión');</script>";
    echo "<script>window.location.href = 'index.php?exito=1';</script>";
    session_destroy();
    die();
}
?>

<html>
    <title>Indice</title>
<head></head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/Login.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
    <div class="DivContainerRight">
        <!--<img src="assets/images/Logo.png" class="Logo">-->
    <div class="DivContainerTop">       
    </div>
    </div>
    <div class="DivContainerLeft">
        <div class="UserDivContainer">
            <img src="assets/images/UserLogo.png" class="UserLogo">
        </div>
        <a class="Button" href="php/TArticulosUsuario.php">Articulos</a>
        <a class="Button" href="php/TVentasUsuario.php">Ventas</a>
        <a href="index.php" class="Button3">Cerrar Sesion</a>

    </div>
</body>
</html>