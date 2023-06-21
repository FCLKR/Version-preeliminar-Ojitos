<?php 

require_once ('Conexion.php');

if (isset($_REQUEST['id'])) {
        $idClientes= $_REQUEST['id'];
        $clienteEstado = null;
        $sql2 = "SELECT cliente.idCliente, cliente.estado FROM cliente WHERE estado ='Inactivo' and idCliente= $idClientes";
        $query2 = $conexion->query($sql2);
        
        while ($r = $query2->fetch_array()) {
            $clienteEstado = ["id"];
            break;
            }
            if ($clienteEstado == null) {
                $query = "UPDATE cliente SET estado='Inactivo' WHERE idCliente=" . $_REQUEST['id'];
                $give = mysqli_query($conexion, $query);
                header ('location: ClientesAdmListado.php');
        }else {
            $query = "UPDATE cliente SET estado='Activo' WHERE idCliente=" . $_REQUEST['id'];
                $give = mysqli_query($conexion, $query);
                header ('location: ClientesAdmListado.php');
        
}
    /*else {
        $query = "UPDATE cliente SET estado='Activo' WHERE idCliente=" . $_REQUEST['id'];
        $give = mysqli_query($conexion, $query);
        header ('location: ClientesAdmListado.php');}*/
}
    
    mysqli_close($conexion);
?>