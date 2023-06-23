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
                           <a href="adopcionAdmListado.php">
                          <button class="btn btn-danger">Cancelar</button></a></h3>
                    <?php 
                    date_default_timezone_set("America/Bogota");
                    $fecha_ACtual= date("Y-m-d");
                    ?>
                    <div class="row">
                    <form action="\Ojitos\vista\html\dashboard\Adopcion\insertnewdispAdopcion.php" method="post">
                            
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                          <label for="">Fecha de rescate</label>
                          <input type="datatime" name="fechaEncuentro" value="<?=$fecha_ACtual ?>"class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">Nombre (Opcional)</label>
                          <input type="text" name="nombreAnimaladopocion" class="form-control" placeholder="Nombre..." >
                        </div>
                        <div class="form-group">
                            <label for="Especie Animal">Especie</label>
                            <select name="especie_Animal" class="form-control">
                                <option selected>Elija una especie</option>
                                <option>Perro</option>
                                <option>Gato</option>

                            </select>
                        </div>
                        <div class="form-group">
                              <label for="descripcion">Raza</label>
                              <input type="int" name="raza" class="form-control" placeholder="Especifique la raza">
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Observaciones</label>
                          <input type="text" name="observacionesAnimal" class="form-control" placeholder="Datos Adicionales">
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
