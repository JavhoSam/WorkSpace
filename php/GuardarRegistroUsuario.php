<?php
require 'conexion.php';

$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contrasena'];
$Rol = $_POST['rol'];
$Departamento = $_POST['departamento'];
$CodigoDepto = $_POST['codigo-depto'];
$Correo = $_POST['correo'];
$Telefono = $_POST['telefono'];
$Salario = $_POST['salario'];
$Pais = $_POST['pais'];
$Estado = $_POST['estado'];
$Ciudad = $_POST['ciudad'];
$Colonia = $_POST['colonia'];
$Calle = $_POST['calle'];
$CodigoPostal = $_POST['codigo-postal'];
$FechaContratacion = $_POST['fecha-contratacion'];
$Puesto = $_POST['puesto'];

$Contrasena = hash('sha512', $Contrasena);



// Eliminar guiones de la fecha
$FechaContratacion = preg_replace('/-/', '', $FechaContratacion);
//$FechaVenta = preg_replace('/-/', '', $FechaVenta);



// Verificar que el usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conn, "SELECT * FROM tsesion WHERE nombreusuario='$Usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0) {
    echo "<script> alert('Este nombre de usuario ya esta resgistrado, intenta con otro');</script>";
    echo "<script>window.location.href = '../index.php?exito=1';</script>";
    die();
    }
// Verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conn, "SELECT * FROM tcorreos WHERE correo='$Correo'");
    if(mysqli_num_rows($verificar_correo) > 0) {
    echo "<script> alert('Este correo ya esta resgistrado, intenta con otro');</script>";
    echo "<script>window.location.href = '../index.php?exito=1';</script>";
    die();
    }
// Verificar que el telefono no se repita en la base de datos
    $verificar_telefono = mysqli_query($conn, "SELECT * FROM ttelefonos WHERE telefono='$Telefono'");
    if(mysqli_num_rows($verificar_telefono) > 0) {
    echo "<script> alert('Este número de telefono ya esta resgistrado, intenta con otro');</script>";
    echo "<script>window.location.href = '../index.php?exito=1';</script>";
    die();
    }

// TSesion
$TSesion = "INSERT INTO tsesion VALUES ('', '$Contrasena', '$Usuario')";
if ($conn->query($TSesion) === TRUE) {
    $TSesion_id = $conn->insert_id;
} else {
    echo "Error al insertar la sesion: " . $conn->error;
    $conn->close();
    exit();
}

// TRoles
$TRoles = "INSERT INTO troles VALUES ('', '$Rol')";
if ($conn->query($TRoles) === TRUE) {
    $TRoles_id = $conn->insert_id;
} else {
    echo "Error al insertar el rol: " . $conn->error;
    $conn->close();
    exit();
}

// TDeptos
$TDeptos = "INSERT INTO tdeptos VALUES ('', '$CodigoDepto', '$Departamento')";
if ($conn->query($TDeptos) === TRUE) {
    $TDeptos_id = $conn->insert_id;
} else {
    echo "Error al insertar el depto: " . $conn->error;
    $conn->close();
    exit();
}

// TCorreos
$TCorreos = "INSERT INTO tcorreos VALUES ('', '$Correo')";
if ($conn->query($TCorreos) === TRUE) {
    $Correo_id = $conn->insert_id;
} else {
    echo "Error al insertar el correo: " . $conn->error;
    $conn->close();
    exit();
}

// TTelefonos
$TTelefonos = "INSERT INTO ttelefonos VALUES ('', '$Telefono')";
if ($conn->query($TTelefonos) === TRUE) {
    $Telefono_id = $conn->insert_id;
} else {
    echo "Error al insertar el teléfono: " . $conn->error;
    $conn->close();
    exit();
}

// TPaises
$TPaises = "INSERT INTO tpaises VALUES ('', '$Pais')";
if ($conn->query($TPaises) === TRUE) {
    $Pais_id = $conn->insert_id;
} else {
    echo "Error al insertar el país: " . $conn->error;
    $conn->close();
    exit();
}

// TEstados
$TEstados = "INSERT INTO testados VALUES ('', '$Estado', '$Pais_id')";
if ($conn->query($TEstados) === TRUE) {
    $Estado_id = $conn->insert_id;
} else {
    echo "Error al insertar el estado: " . $conn->error;
    $conn->close();
    exit();
}

// TCiudades
$TCiudades = "INSERT INTO tciudades VALUES ('', '$Ciudad', '$Estado_id')";
if ($conn->query($TCiudades) === TRUE) {
    $Ciudad_id = $conn->insert_id;
} else {
    echo "Error al insertar la ciudad: " . $conn->error;
    $conn->close();
    exit();
}

// TColonias
$TColonias = "INSERT INTO tcolonias VALUES ('', '$Colonia', '$Ciudad_id')";
if ($conn->query($TColonias) === TRUE) {
    $Colonia_id = $conn->insert_id;
} else {
    echo "Error al insertar la colonia: " . $conn->error;
    $conn->close();
    exit();
}

// TDetallesEmpleados
$TDetallesEmpleados = "INSERT INTO tdetallesempleados VALUES ('', '$Puesto', '$FechaContratacion', '$Salario', '$Calle', '$Colonia_id', '$Telefono_id', '$Correo_id')";
if ($conn->query($TDetallesEmpleados) === TRUE) {
    $DetalleEmpleado_id = $conn->insert_id;
    echo "<script> alert('Registro Exitoso');</script>";
    // Redirigir después de la salida del script
    echo "<script>window.location.href = '../index.php?exito=1';</script>";
}
    else {
        // Mostrar alerta de error
    echo "<script> alert('Error al registrar los datos');</script>";
    // Redirigir después de la salida del script
    echo "<script>window.location.href = '../index.php?exito=1';</script>";
    }




// TArticulos
/*$TArticulos = "INSERT INTO tarticulos VALUES ('', '$NombreArticulo', '$CantidadStock', '$Precio')";
if ($conn->query($TArticulos) === TRUE) {
    $TArticulos_id = $conn->insert_id;
} else {
    echo "Error al insertar el artículo: " . $conn->error;
    $conn->close();
    exit();
}*/

// TVentasDetallado
/*$TVentasDetallado = "INSERT INTO tventasdetallado VALUES ('', '$CantidadProducto','$Subtotal', '$TArticulos_id')";
if ($conn->query($TVentasDetallado) === TRUE) {
    $TVentasDetallado_id = $conn->insert_id;
} else {
    echo "Error al insertar la venta detallada: " . $conn->error;
    $conn->close();
    exit();
}*/

// TVentasConcentrado
/*$TVentasConcentrado = "INSERT INTO tventasconcentrado VALUES ('', '$FechaVenta', '$Folio', '$Total', '$TVentasDetallado_id')";
if ($conn->query($TVentasConcentrado) === TRUE) {
    $TVentasConcentrado_id = $conn->insert_id;
} else {
    echo "Error al insertar la venta concentrada: " . $conn->error;
    $conn->close();
    exit();
}*/

// TUsuarios
/*$TUsuarios = "INSERT INTO tusuarios VALUES ('', '$TDeptos_id', '$DetalleEmpleado_id', '$TSesion_id', '$TRoles_id', '$TVentasConcentrado_id')";
if ($conn->query($TUsuarios) === TRUE) {
    echo "Usuario insertado correctamente";
} else {
    echo "Error al insertar el usuario: " . $conn->error;
} */

$conn->close();
?>



