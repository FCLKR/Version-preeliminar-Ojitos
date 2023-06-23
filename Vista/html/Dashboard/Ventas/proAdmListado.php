<!DOCTYPE html>

<html>
<?php
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\headall.php';//-> Fila superior
    ?>
      

   
   <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

 <?php
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\headerall.php';//-> Cuadro de presentacion y cerrar sesion
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\slidermenuAdmin.php';//-> Menu lateral.
    ?>
      <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Facturacion</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                 <div class="row">
                  <div class="col-md-12">
                    <!--Contenido-->
                    
                    <div class="row">
                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                          <h3>Informe de productos vendidos <a href="reporte_Excel.php"> <button type="button" class="btn btn-success">Exportar</button></a></h3>
                        <div class="form-group">
                            
                         <form action="" method="post">
                          <div class="input-group">
                           <input type="text" class="form-control" name="textbox" placeholder="Buscar..." value="">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-primary" name="enviar">Buscar</button>
                            </span>
                          </div>
                         </form>
                        </div>
                      </div>
                    </div>
                    
                    

                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                         
                            
                          <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                              <th>Codigo Factura</th>
                              <th>Fecha Factura</th>
                              <th>Documento Cliente</th>
                              <th>Producto</th>
                              <th>Precio producto</th>
                              <th>Unidades</th>
                              <th>iva aplicado</th>
                              <th>subTotal</th>
                              <th>Total Factura</th>
                              <th>Disp Stock</th>
                            </thead>
                               
                    <?php
                        $inc = include("Conexion.php");
                            if ($inc) {
                                if (isset($_POST["enviar"])) {
                                  
                                  $buscar = $_POST["textbox"];
                                  $Result = "CALL VentasProListaAdmFiltro ('%$buscar%')";
                                  //$Result= $conexion->query("SELECT * FROM producto WHERE nombreProducto LIKE '%$buscar%'");
                                  $buscarResult= mysqli_query($conexion, $Result);
                                    while ($row = $buscarResult->fetch_array()) {
                                            $idfactura = $row["idfactura"];
                                            $fechaFactura = $row["fechaFactura"];
                                            $documentCliente = $row["documentoCliente"];
                                            $nombreProducto = $row["nombreProducto"];
                                            $valorFactProducto = $row["valorProducto"];
                                            $cantidadCompra= $row["cantidad"];
                                            $valorivaFactproducto = $row["valorIva"];
                                            $subTotal= $row["subTotal"];
                                            $totalCompra = $row["totalFactura"];
                                            $cantidadStock = $row["stockProducto"];
                                        ?>
                                         <tr>
                                            <td><?php echo $idfactura  ?>  </td>
                                            <td><?php echo $fechaFactura  ?>  </td>
                                            <td><?php echo $documentCliente ?></td>
                                            <td><?php echo $nombreProducto ?></td>
                                            <td><?php echo $valorFactProducto ?></td>
                                            <td><?php echo $cantidadCompra ?></td>
                                            <td><?php echo $valorivaFactproducto ?></td>
                                            <td><?php echo $subTotal ?></td>
                                            <td><?php echo $totalCompra ?></td>
                                            <td><?php echo $cantidadStock ?></td>

                                        </tr> 
                                        <?php
                                    }
                                } else {
                                    $traer = "CALL VentasProListaAdm";
                                    $resultado = mysqli_query($conexion, $traer);
                                    if ($resultado) {
                                        while ($row = $resultado->fetch_array()) {
                                            $idfactura = $row["idfactura"];
                                            $fechaFactura = $row["fechaFactura"];
                                            $documentCliente = $row["documentoCliente"];
                                            $nombreProducto = $row["nombreProducto"];
                                            $valorFactProducto = $row["valorProducto"];
                                            $cantidadCompra= $row["cantidad"];
                                            $valorivaFactproducto = $row["valorIva"];
                                            $subTotal= $row["subTotal"];
                                            $totalCompra = $row["totalFactura"];
                                            $cantidadStock = $row["stockProducto"];
                                            ?>
                                            <tr>
                                            <td><?php echo $idfactura  ?>  </td>
                                            <td><?php echo $fechaFactura  ?>  </td>
                                            <td><?php echo $documentCliente ?></td>
                                            <td><?php echo $nombreProducto ?></td>
                                            <td><?php echo $valorFactProducto ?></td>
                                            <td><?php echo $cantidadCompra ?></td>
                                            <td><?php echo $valorivaFactproducto ?></td>
                                            <td><?php echo $subTotal ?></td>
                                            <td><?php echo $totalCompra ?></td>
                                            <td><?php echo $cantidadStock ?></td>
                                            
                                        </tr> 
            <?php
                                }}}
                                
        ?>
        
                                  </table>
                                    <?php
                        }
                            ?>
                            
                                 
                        </div>
                      </div>
                    </div>
                    <!--Fin Contenido-->
                  </div>
                </div>

              </div>
            </div><!-- /.row -->
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Ficha: 2558705-1[4] Version</b> 1.1.0
  </div>
  <strong>Copyright &copy; 2022-2023 <a href="www.incanatoit.com">SENA-ADSO</a>.</strong> All rights reserved.
</footer>


<!-- jQuery 2.1.4 -->
<script src="../Layout/js/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../Layout/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../Layout/js/app.min.js"></script>

</body>
</html>
