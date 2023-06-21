<?php 

require_once ('Conexion.php');

if(isset($_REQUEST['id'])){
	$query = "DELETE FROM producto WHERE idProducto=".$_REQUEST['id'];

	$resultado=mysqli_query($conexion,$query);
	
	if($resultado){
		echo "Registro eliminado";
        header ('location: productosAdmListado.php');
		
	}else{
		echo "error al borrar el registro";
	}
}

?>