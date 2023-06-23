<?php 

require_once ('Conexion.php');

if(isset($_REQUEST['id'])){
        $esp =$_REQUEST['id'];
	$query = "CALL EliminarStockProducto($esp)";

	$resultado=mysqli_query($conexion,$query);
	
	if($resultado){
		echo "Registro eliminado";
        header ('location: productosAdmListado.php');
		
	}else{
		echo "error al borrar el registro";
	}
}

?>