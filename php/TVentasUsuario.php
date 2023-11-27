<html>
    <title>Ventas</title>
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

        <form method = "POST" action = "TVentas.php">
    <div class="busqueda-container">
        <input class="busqueda-input" type="search" id="busqueda" name="busqueda" placeholder="Buscar...">
        <button class = "BotonBusqueda"><img  src="../assets/images/lupa.png" class="busqueda-boton" type="submit"></button>
    </div>
        </form>
    </header>      
    </div>

    <!--Cosos de en medio-->

<label2>Concentrado de Ventas</label2>

<?php 
require "conexion.php";
$sql = "SELECT * FROM tventasconcentrado";

if (isset($_POST['busqueda']) && !empty($_POST['busqueda'])) {
    $busqueda = $_POST['busqueda'];

    $sql = "SELECT * FROM tventasconcentrado WHERE FechaVenta LIKE '%$busqueda%' OR id = '$busqueda' OR Folio = '$busqueda' OR Total = '$busqueda' OR TVentasDetallado_id = '$busqueda'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>FechaVenta</th><th>Folio/Kg</th><th>Total</th><th>TVentasDetallado_id</th>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["FechaVenta"] . "</td>";
        echo "<td>" . $row["Folio"] . "</td>";
        echo "<td>" . $row["Total"] . "</td>";
        echo "<td>" . $row["TVentasDetallado_id"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<table>";
    echo "<tr><th>ID</th><th>FechaVenta</th><th>Folio/Kg</th><th>Total</th><th>TVentasDetallado_id</th>";
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