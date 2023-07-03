<!DOCTYPE html>

<html>
<?php
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\headall.php';//-> Fila superior
    ?>
      

   
   <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

 <?php
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\headerall.php';//-> Cuadro de presentacion y cerrar sesion
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\slidermenuCliente.php';//-> Menu lateral.
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
                  <h3 class="box-title">Facturacion General </h3>
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
                          <h3>Facturacion general - productos vendidos <a href="reporte_Excel.php"> <button type="button" class="btn btn-success">Exportar PDF</button>
                              </a> </h3>
                        <div class="form-group">

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
                              <th>Valor Factura</th>
                              <th>Iva</th>
                              <th>Total Cancelado</th>
                            </thead>
                               
                    <?php
                        $inc = include("Conexion.php");
                            if ($inc) {
                              $documentoiniciar = $_SESSION["username"];
                              $sql2 = "SELECT idCliente FROM cliente WHERE documentoCliente=$documentoiniciar ";
                                        $query2 = $conexion->query($sql2);
                                       while ($row = $query2->fetch_array())  {
                                       $idClienteSesion= $row["idCliente"]; 
                                       }
                                if (isset($_POST["enviar"])) {
                                    $buscar = $_POST["textbox"];
                                  $Result1 = "SELECT * FROM factura WHERE Cliente_idCliente=$idClienteSesion Like'%$buscar%'";
                                  //$Result= $conexion->query("SELECT * FROM producto WHERE nombreProducto LIKE '%$buscar%'");
                                  $buscarResult1= mysqli_query($conexion, $Result1);
                                    while ($row = $buscarResult1->fetch_array()) {
                                            $idfactura = $row["idfactura"];
                                            $fechaFactura = $row["fechaFactura"];
                                            $valFact = $row["valorFactura"];
                                            $ivaFact = $row["iva"];
                                            $tolFact = $row["totalFactura"];

                                        ?>
                                         <tr>
                                            <td><?php echo $idfactura  ?>  </td>
                                            <td><?php echo $fechaFactura  ?>  </td>
                                            <td><?php echo $valFact ?></td>
                                            <td><?php echo $ivaFact?></td>
                                            <td><?php echo $tolFact ?></td>

                                        </tr> 
                                        <?php
                                    }
                                } else {
                                    
                                    $Result2 = "SELECT * FROM factura WHERE cliente_idCliente=$idClienteSesion";
                                    $buscarResult2= mysqli_query($conexion, $Result2);
                                    if ($buscarResult2) {
                                        while ($row = $buscarResult2->fetch_array()) {
                                            $idfactura = $row["idfactura"];
                                            $fechaFactura = $row["fechaFactura"];
                                            $valFact = $row["valorFactura"];
                                            $ivaFact = $row["iva"];
                                            $tolFact = $row["totalFactura"];
                                            $idCliFact= $row["cliente_idCliente"];
                                            ?>
                                            <tr>
                                            <td><?php echo $idfactura  ?>  </td>
                                            <td><?php echo $fechaFactura  ?>  </td>
                                            <td><?php echo $valFact ?></td>
                                            <td><?php echo $ivaFact?></td>
                                            <td><?php echo $tolFact ?></td>

                                            
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
