<?php 

require_once ('Conexion.php');

if (isset($_REQUEST['Guardar'])) {

    $query = "UPDATE animales_en_adopcion SET fechaEncuentro='" . $_POST['fechaEncuentro'] . "', nombreAnimaladopocion='" . $_POST['nombreAnimaladopocion'] . "',especie_Animal='" . $_POST['especie_Animal'] . "',raza='" . $_POST['raza'] . "',observacionesAnimal='" . $_POST['observacionesAnimal'] . "' WHERE idAnimaldisponible=" . $_REQUEST['id'];
    $give = mysqli_query($conexion, $query);
    header ('location: adopcionAdmListado.php');
    }
    mysqli_close($conexion);
?>