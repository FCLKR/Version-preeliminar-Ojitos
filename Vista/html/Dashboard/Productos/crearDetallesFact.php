<?php
require_once ('Conexion.php'); //conectar a base de datos

$id_pro=$_POST['nidPro']; //traer en varieble el id de producto seleccionado
$cantCom=$_POST['cantidaComprar'];//traer en varieble cantidad seleccionada
$valPro=$_POST['nvalPro']; //traer en varieble valor del producto
$ivacalunidad=$valPro*0.19; //extraccion IVA por producto
$subtotalunidadesP= $valPro* $cantCom;
echo " ID $id_pro";//prueba provisional
echo "Valor producto = $valPro";
echo "IVA por producto = $ivacalunidad";
echo "Subtotal por producto = $subtotalunidadesP";

        date_default_timezone_set("America/Bogota");
        $fecha_ACtual = date("Y-m-d");//Fecha actual
        session_start();
        $documentoiniciar = $_SESSION["username"];//variable traida del inicio de sesion
        
        //..........................Resta de el stock.......................................
        $sql12="UPDATE producto SET stockProducto=stockProducto-$cantCom WHERE idProducto= $id_pro";
        $query12 = $conexion->query($sql12);
        //..........................Consulta para extraer variable del Cliente que se loguea.......................................
         $sql2 = "SELECT idCliente, nombresUsuarios, apellidosUsuarios FROM cliente WHERE documentoCliente= $documentoiniciar ";
                   $query2 = $conexion->query($sql2);
                  while ($row = $query2->fetch_array())  {
                  $nombreinicio = $row["nombresUsuarios"];
                  $apellidoinicio= $row["apellidosUsuarios"];
                  $idClienteSesion= $row["idCliente"]; //-> Se genera variable id cliente para actualizar tabla factura fase 1.
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
                    
                 //..........................Traer en variables las filas de la tabla factura para traer el id de factura.......................................
                  $sql4 = "SELECT * FROM factura WHERE cliente_idCliente = $idClienteSesion";
                  $query4 = $conexion->query($sql4);
                    while ($row = $query4->fetch_array())  {
                    $idFact = $row["idfactura"];
                    }
                    
                $sql7 = "INSERT INTO factura_has_producto (cantidad,valorProducto,valorIva,subTotal,Factura_idfactura,producto_idProducto) VALUES ($cantCom,$valPro,$ivacalunidad,$subtotalunidadesP,$idFact,$id_pro)";
                $query7 = $conexion->query($sql7);
                header ('location: productoClienteListado.php');
                //echo "Creado el Id de factura Registro finalizado";
                
                
        }else {
            $sql4 = "SELECT * FROM factura WHERE cliente_idCliente = $idClienteSesion";
                  $query4 = $conexion->query($sql4);
                    while ($row = $query4->fetch_array())  {
                    $idFact = $row["idfactura"];
                    }
                    
            $sql7 = "INSERT INTO factura_has_producto (cantidad,valorProducto,valorIva,subTotal,Factura_idfactura,producto_idProducto) VALUES ($cantCom,$valPro,$ivacalunidad,$subtotalunidadesP,$idFact,$id_pro)";
            $query7 = $conexion->query($sql7);
            header ('location: productoClienteListado.php');
            //echo "Registro finalizado";
                  }
        
        
        
        
        
        
       
                  
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