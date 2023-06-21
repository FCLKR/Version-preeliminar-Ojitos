<?php 

require_once ('Conexion.php');

if(isset($_REQUEST['id'])){
	$query = "DELETE FROM mascota WHERE idMascota=".$_REQUEST['id'];

	$resultado=mysqli_query($conexion,$query);
	
	if($resultado){
		echo "Registro eliminado";
        header ('location: mascotasClienteListado.php');
		
	}else{
		echo "error al borrar el registro";
	}
}

?>