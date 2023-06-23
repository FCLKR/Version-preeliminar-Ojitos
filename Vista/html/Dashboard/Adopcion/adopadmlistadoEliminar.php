<?php 

require_once ('Conexion.php');

if(isset($_REQUEST['id'])){
        $EAA = $_REQUEST['id'];
        $query="CALL EliminarAnimalAdopcion ($EAA)";
	//$query = "DELETE FROM animales_en_adopcion WHERE idAnimaldisponible=".$_REQUEST['id'];

	$resultado=mysqli_query($conexion,$query);
	
	if($resultado){
		echo "Registro eliminado";
        header ('location: adopcionAdmListado.php');
		
	}else{
		echo "error al borrar el registro";
	}
}

?>