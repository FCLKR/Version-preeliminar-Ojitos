<!DOCTYPE html>
<html>
<?php
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\headall.php';//-> Fila superior
    ?>
   <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

       <?php
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\headerall.php';//-> Cuadro de presentacion y cerrar sesion
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\slidermenuCliente.php';//-> Menu para cliente
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
                  <h3 class="box-title">Nuestra tienda Ojitos</h3>
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
                        <h3>Conoce nuestros productos mas populares</h3>
                        <form action="" method="post">
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" name="textbox" placeholder="Buscar..." value="">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-primary" name="enviar">Buscar</button>
                            </span>
                          </div>
                        </div>
                       </form>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                              <th>Producto</th>
                              <th>Descripcion</th>
                              <th>Valor</th>
                              <th>Cantidad</th>
                              <th></th>
                            </thead>
                            <?php
                        $inc = include("Conexion.php");
                            if ($inc) {
                                if (isset($_POST["enviar"])) {
                                  
                                  $buscar = $_POST["textbox"];
                                  $Result = "CALL BuscarListaProductoCliente ('%$buscar%')";
                                  //$Result= $conexion->query("SELECT * FROM mascota WHERE nombreMascota LIKE '%$buscar%'");
                                  $buscarResult= mysqli_query($conexion, $Result);
                                    while ($row = $buscarResult->fetch_array()) {
                                      //$idProducto= $row["idProducto"];
                                      $nombreProducto = $row["nombreProducto"];
                                      $valorProducto = $row["valorProducto"];
                                      $descripcionProducto = $row["descripcionProducto"];
                                        ?>
                                        <tr>
                                           <td><?php echo $nombreProducto ?>  </td>
                                            <td><?php echo $valorProducto ?>  </td>
                                            <td><?php echo $descripcionProducto ?></td>
                                            <td></td>
                                            <td>
                                                <a href="adopadmlistadoEditar.php?id=<?php echo $row ['nombreProducto'];?>"><button class="btn btn-info">Lo quiero!</button></a>
                                                
                                            </td>
                                        </tr> 
            <?php
                                }}else{
                                  $traer = "CALL ListaProductoCliente()";
                                  $resultado = mysqli_query($conexion, $traer);
                                 if ($resultado) {
                                    while ($row = $resultado->fetch_array()) {
                                      //$idProducto= $row["idProducto"];
                                      $nombreProducto = $row["nombreProducto"];
                                      $valorProducto = $row["valorProducto"];
                                      $descripcionProducto = $row["descripcionProducto"];
                                        ?>
                                        <tr>
                                            <td><?php echo $nombreProducto ?>  </td>
                                            <td><?php echo $valorProducto ?>  </td>
                                            <td><?php echo $descripcionProducto ?></td>
                                            <td></td>
                                            <td>
                                                <a href="adopadmlistadoEditar.php?id=<?php echo $row ['nombreProducto'];?>"><button class="btn btn-info">Lo quiero!</button></a>
                                               
                                            </td>
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
<?php
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\footer.php';//-> Fila inferior
    ?>


</body>
</html>
