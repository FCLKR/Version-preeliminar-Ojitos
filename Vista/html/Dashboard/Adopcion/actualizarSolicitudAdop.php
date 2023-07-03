<?php 

require_once ('Conexion.php');

$idinte = $_POST['nidinteresado'];
$idAnAdop=$_POST['nidanadop'];
$statusAdop=$_POST['statusoptions'];

        date_default_timezone_set("America/Bogota");
        $fecha_ACtual = date("Y-m-d");//Fecha actual

        
        if ($statusAdop == "Adoptado"){
        //.................Actualiza la tabla adopcion con fecha especificando Idcliente y ID animal solicitado.....................
        $sql14= "UPDATE adopcion SET fechaAdopcion = '$fecha_ACtual' WHERE cliente_idCliente= $idinte AND Animal_Adopcioncol= $idAnAdop";
        $query14 = $conexion->query($sql14);
        //..............................Actualiza el estado para la visualizacion del cliente....................................
        $sql15= "UPDATE animales_en_adopcion SET estadoSolicitud = '$statusAdop' WHERE idAnimaldisponible= $idAnAdop";
        $query15 = $conexion->query($sql15);
        
        echo "Fechas =  $fecha_ACtual";
        echo "Interesado =  $idinte";
        echo "Id Animal =  $idAnAdop";
        echo "Status =  $statusAdop";
        
        }elseif($statusAdop == "Rechazado") {
            
        //..............................Elimina la solicitud de la tabla Adopcion....................................
        $sql16= "DELETE FROM adopcion WHERE cliente_idCliente= $idinte AND Animal_Adopcioncol= $idAnAdop";
        $query16 = $conexion->query($sql16);
        //..............................Actualiza el estado para la visualizacion del cliente....................................
        $sql15= "UPDATE animales_en_adopcion SET estadoSolicitud = '$statusAdop' WHERE idAnimaldisponible= $idAnAdop";
        $query15 = $conexion->query($sql15);
            echo "Registro Eliminado";
        }
/*if(isset($_REQUEST['id'])){
        $idC = $_REQUEST['id'];
        $query="CALL EliminarAnimalAdopcion ($EAA)";
	//$query = "DELETE FROM animales_en_adopcion WHERE idAnimaldisponible=".$_REQUEST['id'];

	$resultado=mysqli_query($conexion,$query);
	
	if($resultado){
		echo "Registro eliminado";
                echo $idC;
        //header ('location: adopcionAdmListado.php');
		
	}else{
		echo "error al borrar el registro";
	}
}*/
?>