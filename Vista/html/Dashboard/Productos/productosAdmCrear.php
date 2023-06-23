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
                  <h3 class="box-title">Ingresar nuevo producto</h3>
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
                         <h3>Especifique los siguientes datos
                             <a href=".\productosAdmListado.php">
                             <button class="btn btn-danger">Cancelar</button></a></h3>
                         <div class="row">
                    <form action="\Ojitos\vista\html\dashboard\productos\InsertstockProducts.php" method="post">
                            
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        
                        
                        <div class="form-group">
                          <label for="nombre">Nombre del producto</label>
                          <input type="text" name="nombreProducto" class="form-control" placeholder="Nombre..." >
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Valor venta</label>
                          <input type="text" name="valorProducto" class="form-control" placeholder="Valor para venta">
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Cantidad</label>
                          <input type="int" name="stockProducto" class="form-control" placeholder="Cantidad de productos">
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Descripcion del producto</label>
                          <input type="text" name="descripcionProducto" class="form-control" placeholder="Descripcion del producto">
                        </div>
                        <div class="form-group">
                          <a href="#">
                          <button class="btn btn-primary" type="submit" onclick= "return Confirmacion()">Guardar</button></a>
                          
                        </div>
                      </div>
                     </form>
                        
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
