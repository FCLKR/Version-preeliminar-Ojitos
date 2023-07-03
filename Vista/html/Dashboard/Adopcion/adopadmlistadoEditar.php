<!DOCTYPE html>

<html>
    <?php
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\headall.php';
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
                  <a href=".\adopcionAdmListado.php"><button class="btn btn-success">Volver</button></a>
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
                        <h3 class="box-title">Modificacion de registro</h3>
                        <div class="form-group">
      
                        </div>
                      </div>
                    </div>
                    
                    <form action="adopadmlistadoEditarII.php" method="post">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            
                                <table class="table table-striped table-bordered table-condensed table-hover">
                                    
                                  <?php 
                                  
                                   $inc = include("Conexion.php");
                                   $EIDAA = $_REQUEST['id'];
                                   $query = "CALL EditarporIDAAdopcion  ($EIDAA)";
                                   //$query = "SELECT * FROM animales_en_adopcion WHERE idAnimaldisponible =".$_REQUEST['id'];
                                   $give= mysqli_query($conexion, $query);
                                   
                                   while ($row = mysqli_fetch_array($give)){
                                  
                                  ?>  
                                
                                    <tr>
                                    <td><label for="">Fecha de rescate</label>
                                    <input type="datatime" name="fechaEncuentro" id="fechaEncuentro" class="form-control" value="<?php echo $row['fechaEncuentro']; ?>"></td>
                                    <td><label for="nombreAnimaladopocion">Nombre</label>
                                    <input type="text" name="nombreAnimaladopocion" id="nombreAnimaladopocion" class="form-control" value="<?php echo $row['nombreAnimaladopocion']; ?>"></td>
                                    <div class="form-group">
                                    <label for="especie_Animal">Especie</label>
                                    <select name="especie_Animal" id="especie_Animal" class="form-control" value="<?php echo $row['especie_Animal']; ?>">
                                    <option selected>Elija una especie</option>
                                    <option>Perro</option>
                                    <option>Gato</option>
                                    </select>
                        </div>
                              <td><label for="descripcion">Raza</label>
                              <input type="text" name="raza" id="raza" class="form-control" value="<?php echo $row['raza']; ?>"></td>
                       
                          <td><label for="descripcion">Observaciones</label>
                          <input type="text" name="observacionesAnimal" id="observacionesAnimal" class="form-control" value="<?php echo $row['observacionesAnimal']; ?>"></td>

                        <input type="hidden" name="id" id="idAnimaldisponible" value="<?php echo $_REQUEST['id']; ?>"></td>

                                        <td>
                                            <a href="#">
                                                <button class="btn btn-info" onclick= "return Confirmacioneditar()" name="Guardar" >Guardar</button></a>
                                        </td>
                                    </tr>

                                    <?php } ?>
                                </table>
                        </div>
                      </div>
                    </div>
                    </form>
                    
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
