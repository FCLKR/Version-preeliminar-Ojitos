<?php 

require_once ('Conexion.php');

if (isset($_REQUEST['Guardar'])) {

    $query = "UPDATE mascota SET nombreMascota='" . $_POST['nombreMascota'] . "', sexoMascota='" . $_POST['sexoMascota'] . "',edadMascota='" . $_POST['edadMascota'] . "' WHERE idMascota=" . $_REQUEST['id'];
    $give = mysqli_query($conexion, $query);
    header ('location: mascotasClienteListado.php');
    }
    mysqli_close($conexion);
?>