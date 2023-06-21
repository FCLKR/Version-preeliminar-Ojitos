<?php 

require_once ('Conexion.php');

if (isset($_REQUEST['Guardar'])) {

    $query = "UPDATE producto SET nombreProducto='" . $_POST['nombreProducto'] . "',valorProducto='" . $_POST['valorProducto'] . "',stockProducto='" . $_POST['stockProducto'] . "',descripcionProducto='" . $_POST['descripcionProducto'] . "'WHERE idProducto=" . $_REQUEST['id'];
    $give = mysqli_query($conexion, $query);
    header ('location: productosAdmListado.php');
    }
    mysqli_close($conexion);
?>