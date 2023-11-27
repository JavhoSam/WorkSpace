<html>
    <title>Articulos</title>
<head></head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../assets/css/Login.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>

    <!--Cosos de izquierda-->

    <div class="DivContainerLeft">
        <div class="UserDivContainer">
            <img src="../assets/images/UserLogo.png" class="UserLogo">
        </div>
        <a class="Button" href="TArticulosUsuario.php">Articulos</a>
        <a class="Button" href="TVentasUsuario.php">Ventas</a>
        <a href="../index.php" class="Button3">Cerrar Sesion</a>

    </div>


    <div class="DivContainerRight1">

    <!--Cosos de arriba-->

    <div class="DivContainerTop">
    <header class="header">
        <form method = "POST" action = "TArticulos.php">
    <div class="busqueda-container">
        <input class="busqueda-input" type="search" id="busqueda" name="busqueda" placeholder="Buscar...">
        <button class = "BotonBusqueda"><img  src="../assets/images/lupa.png" class="busqueda-boton" type="submit"></button>

    </div>
        </form>
    </header>      
    </div>

    <!--Cosos de en medio-->


<label2>Tabla de Articulos</label2>

<?php 
require "conexion.php";
$sql = "SELECT * FROM tarticulos";

if (isset($_POST['busqueda']) && !empty($_POST['busqueda'])) {
    $busqueda = $_POST['busqueda'];

    $sql = "SELECT * FROM tarticulos WHERE Nombre LIKE '%$busqueda%' OR id = '$busqueda' OR Precio = '$busqueda' OR cantidadstock = '$busqueda'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Precio/Kg</th><th>CantidadStock</th>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Precio"] . "</td>";
        echo "<td>" . $row["CantidadStock"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Precio/Kg</th><th>CantidadStock</th>";
    echo "<td colspan=6>No se encontraron registros</td>";
    echo "</table>";
}
$conn->close();
?>

</body>

</html>


</div>





</body>
</html>