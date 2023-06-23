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
                  <h3 class="box-title">Registro de nuevo animal</h3>
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
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3>Nuevo Animal</h3>

                        <div class="form-group">
                          <label for="nombre">Id_Animal</label>
                          <input type="text" name="nombre" class="form-control" placeholder="Nombre...">
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Id_Propietario</label>
                          <input type="text" name="Id_Propietario" class="form-control" placeholder="Descripción...">
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Nombre</label>
                          <input type="text" name="Nombre" class="form-control" placeholder="Descripción...">
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Especie</label>
                          <input type="text" name="Especie" class="form-control" placeholder="Descripción...">
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Diagnostico</label>
                          <input type="text" name="Diagnostico" class="form-control" placeholder="Descripción...">
                        </div>

                        <div class="form-group">
                          <a href="listadocategorias.html">
                          <button class="btn btn-primary" type="submit">Guardar</button></a>
                          <a href="Adopcion_Listado.html">
                          <button class="btn btn-danger" type="reset">Cancelar</button></a>
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
