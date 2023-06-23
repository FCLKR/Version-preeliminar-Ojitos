<?php 

require_once ('Conexion.php');

if (isset($_REQUEST['Guardar'])) {
    
    $idp=$_REQUEST['id'];
    $np=$_POST['nombreProducto'] ;
    $vp=$_POST['valorProducto'] ;
    $sp=$_POST['stockProducto'] ;
    $dp=$_POST['descripcionProducto'] ;
    
    $query= "CALL EditarporIDproductosII ('$np',$vp,$sp,'$dp',$idp)";
    //$query = "UPDATE producto SET nombreProducto='" . $_POST['nombreProducto'] . "',valorProducto='" . $_POST['valorProducto'] . "',stockProducto='" . $_POST['stockProducto'] . "',descripcionProducto='" . $_POST['descripcionProducto'] . "'WHERE idProducto=" . $_REQUEST['id'];
    $give = mysqli_query($conexion, $query);
    header ('location: productosAdmListado.php');
    }
    mysqli_close($conexion);
?>