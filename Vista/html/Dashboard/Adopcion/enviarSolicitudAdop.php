<?php

require_once ('Conexion.php');

/* if(isset($_REQUEST['id'])){
  $idAn =$_REQUEST['id']; */
$idAni = $_POST ['nidanimal'];
$query = "CALL EnviarSolicitadoAdop($idAni)";

$resultado = mysqli_query($conexion, $query);

if ($resultado) {

    session_start();
    $documentoiniciar = $_SESSION["username"]; //variable traida del inicio de sesion
    //..........................Consulta para extraer variable del Cliente que se loguea.......................................
    $sql2 = "SELECT idCliente, nombresUsuarios, apellidosUsuarios FROM cliente WHERE documentoCliente= $documentoiniciar ";
    $query2 = $conexion->query($sql2);
    while ($row = $query2->fetch_array()) {
        $idClienteSesion = $row["idCliente"]; //-> Se genera variable id cliente para actualizar tabla factura fase 1.
    }
    //.........................Inserta registro de Id animal y id quien lo solicita en la tabla Adopcion......................
    $sql13 = "INSERT INTO Adopcion (Animal_Adopcioncol,cliente_idCliente) VALUES ($idAni,$idClienteSesion)";
    //$query13 = $conexion->query($sql13);
    if (mysqli_query($conexion, $sql13)) {
       header('location: adopcionClienteListado.php');
    } else {
        echo "Error creating database: " . mysqli_error($conexion);
    }
} 
/* } */
?>
