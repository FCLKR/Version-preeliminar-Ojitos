<?php 

require_once ('Conexion.php');

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
                 
                
                  $sql8 = "SELECT * FROM factura WHERE cliente_idCliente = $idClienteSesion";
                   $query8 = $conexion->query($sql8);
                  while ($row = $query8->fetch_array())  {
                  $idFact = $row["idfactura"];
                  }
                  $sql9 = "CALL InsertVlrsFacturaii ($idFact);";
                  $query9 = $conexion->query($sql9);
                    if (mysqli_query($conexion, $sql9)) {
                    header ('location: productoClienteListado.php');
                    //echo "Registro Exitoso";
                    }else{
                    echo "Error al registrar datos en factura: "  . mysqli_error($conexion);
                    }
                    
                    
                
                //}
                  
        
                  
        
        
        
        
       
                  
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

?>