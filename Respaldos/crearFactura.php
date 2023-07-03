<?php 

require_once ('Conexion.php');


if (isset($_REQUEST['id'])) {
        $idProd= $_REQUEST['id'];
        date_default_timezone_set("America/Bogota");
        $fecha_ACtual = date("Y-m-d");//Fecha actual
        session_start();
        $documentoiniciar = $_SESSION["username"];//variable traida del inicio de sesion
        //..........................Consulta para extraer variable del Cliente que se loguea.......................................
         $sql2 = "SELECT idCliente, nombresUsuarios, apellidosUsuarios FROM cliente WHERE documentoCliente= $documentoiniciar ";
                   $query2 = $conexion->query($sql2);
                  while ($row = $query2->fetch_array())  {
                  $nombreinicio = $row["nombresUsuarios"];
                  $apellidoinicio= $row["apellidosUsuarios"];
                  $idClienteSesion= $row["idCliente"]; //-> Se genera variable id cliente para actualizar tabla factura fase 1.
                  }
                  echo $idClienteSesion;
         //..........................Traer en variables las filas de la tabla factura .......................................
                  $sql4 = "SELECT * FROM factura ";
                   $query4 = $conexion->query($sql4);
                  while ($row = $query4->fetch_array())  {
                  $idFact = $row["idfactura"];
                  $dateFact= $row["fechaFactura"];
                  $valorFact= $row["valorFactura"];
                  $ivaFact= $row["iva"];
                  $totalFact= $row["totalFactura"];
                  $cliente_idCliente= $row["cliente_idCliente"];
                  $descripCompra= $row["descripcion_compra"];
                  }
          //..........................Condicionar si existe una factura concluida por totalFactura .......................................        
                  $versi=null;
                  $sql5 = "SELECT * FROM factura WHERE cliente_idCliente = $idClienteSesion AND totalFactura =0  ";
                   $query5 = $conexion->query($sql5);
                  while ($row = $query5->fetch_array())  {
                  $versi= ["id"]; //-> Si se encuentra datos esta variable ocupara un resulta
                  }
        //.....Si no existe el total de ningun factura con ese ID generara un nuevo registro en la tabla factura.......................................        
                 if ($versi == null) {
                $sql6 = "INSERT INTO factura (fechaFactura,cliente_idCliente) VALUES ('$fecha_ACtual',$idClienteSesion)";
                $query6 = $conexion->query($sql6);
                
        }/*else {
            $query = "UPDATE cliente SET estado='Activo' WHERE idCliente=" . $_REQUEST['id'];
                $give = mysqli_query($conexion, $query);
                header ('location: ClientesAdmListado.php');
        
                  }*/
        
        
        
        
        
        
       
                  
        //$cantseleccionada = null;
        
        
        
        
                  
        
        
       /* while ($r = $query2->fetch_array()) {
            $cantseleccionada = ["id"];
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
    */
    mysqli_close($conexion);
}
?>