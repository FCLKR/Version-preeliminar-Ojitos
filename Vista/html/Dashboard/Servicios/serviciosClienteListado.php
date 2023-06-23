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
                  <h3 class="box-title">Productos Inventario</h3>
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
                        <h3>Listado de Productos <a href="Adopcion_Crear.html"><button class="btn btn-success">Nuevo</button></a></h3>
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-primary">Buscar</button>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                              <th>Id_Producto</th>
                              <th>Tipo</th>
                              <th>Nombre</th>
                              <th>Costo de adquisicion</th>
                              <th>Costo de Venta</th>
                            </thead>

                            <tr>
                              <td>1. </td>
                              <td>P001</td>
                              <td>Portatil HP-PV360</td>
                              <td>20</td>
                              <td>Portatil gris-resol-5g</td>
                              <td>Computadores</td>
                              <td>
                                <a href="#"><button class="btn btn-info">Editar</button></a>
                                <a href="#"><button class="btn btn-danger">Eliminar</button></a>
                              </td>
                            </tr>
                            
                          </table>
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
