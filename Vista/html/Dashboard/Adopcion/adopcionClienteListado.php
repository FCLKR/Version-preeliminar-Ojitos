<!DOCTYPE html>
<html>
<?php
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\headall.php'; //-> Fila superior
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
                  <h3 class="box-title">Bienvenido a nuestro refujio de Animales</h3>
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
                        <h3>Conoce a nuestros amigos para adoptar</h3>
                        <div class="form-group">
                          <form action="" method="post">
                          <div class="input-group">
                           <input type="text" class="form-control" name="textbox" placeholder="Busca por especie" value="">
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
                              <th>Nombre</th>
                              <th>Especie</th>
                              <th>Raza</th>
                              <th>Observaciones</th>
                              <th>Estado</th>
                            </thead>
                    <?php
                        $inc = include("Conexion.php");
                            if ($inc) {
                                if (isset($_POST["enviar"])) {
                                  
                                  $buscar = $_POST["textbox"];
                                  $Result = "SELECT * FROM animales_en_adopcion WHERE especie_Animal LIKE '%$buscar%'";
                                  //$Result= $conexion->query("SELECT * FROM mascota WHERE nombreMascota LIKE '%$buscar%'");
                                  $buscarResult= mysqli_query($conexion, $Result);
                                    while ($row = $buscarResult->fetch_array()) {
                                      //$idAnimaldisponible = $row["idAnimaldisponible"];
                                      $fechaAdop = $row["fechaEncuentro"];
                                      $nombreAAdop = $row["nombreAnimaladopocion"];
                                      $especieAAdop = $row["especie_Animal"];
                                      $raza = $row["raza"];
                                      $observacionesAn = $row["observacionesAnimal"];
                                      $statusadop = $row["estadoSolicitud"];
                                        ?>
                                        <tr>
                                            <td><?php echo $nombreAAdop ?></td>
                                            <td><?php echo $especieAAdop ?></td>
                                            <td><?php echo $raza ?></td>
                                            <td><?php echo $observacionesAn ?></td>
                                            <td><?php echo $statusadop?></td>
                                            <td>
                                               <!-- <a href="enviarSolicitudAdop.php?id=<?php echo $row ['idAnimaldisponible'];?>"><button class="btn btn-danger">Adoptar</button></a>
                                            </td>-->
                                        </tr> 
            <?php
                                }}else{
                                  $traer = "SELECT * FROM animales_en_adopcion";
                                  $resultado = mysqli_query($conexion, $traer);
                                 if ($resultado) {
                                    while ($row = $resultado->fetch_array()) {
                                      $idAnimaldisponiblee = $row["idAnimaldisponible"];
                                      $fechaAdop = $row["fechaEncuentro"];
                                      $nombreAAdop = $row["nombreAnimaladopocion"];
                                      $especieAAdop = $row["especie_Animal"];
                                      $raza = $row["raza"];
                                      $observacionesAn = $row["observacionesAnimal"];
                                      $statusadop = $row["estadoSolicitud"];
                                        ?>
                                        <form action="enviarSolicitudAdop.php" method="post" >
                                        <tr>
                                            <td> <input type="hidden" name="nidanimal" value=" <?php echo $idAnimaldisponiblee ?> "><?php echo $nombreAAdop ?></td>
                                            <td><input type="hidden" name="nidclient" value=" <?php echo $documentoiniciar ?> "><?php echo $especieAAdop ?></td>
                                            <td><?php echo $raza ?></td>
                                            <td><?php echo $observacionesAn ?></td>
                                            <td><?php echo $statusadop?></td>
                                            
                                            <?php 
                                            $look = null;
                                                    $sql14 = "SELECT * FROM animales_en_adopcion WHERE idAnimaldisponible = $idAnimaldisponiblee AND estadoSolicitud ='Adoptado'";
                                                    $query14 = $conexion->query($sql14);
                                                    while ($row = $query14->fetch_array())  {
                                                    $look= ["id"]; //-> Si se encuentra datos esta variable ocupara un resulta
                                                    }
                                                    if($look ==null){
                                                   
                                                     ?> 
                                            <td>
                                                <a href="#"><button class="btn btn-success" type="submit">Adoptar</button></a>
                                                 
                                            </td>
                                            <?php
                                                    
                                                    }else {?>
                                                        <td><label >Ya esta Adoptado</label></td>
                                                  <?php      
                                                  } 
        ?>
                                            
                                        </tr> 
                                        </form>
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
