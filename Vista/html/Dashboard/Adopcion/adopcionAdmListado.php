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
                  <h3 class="box-title">Inventario refugio</h3>
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
                        <h3>Listado de animales <a href=".\adopcionAdmCrear.php"><button class="btn btn-success">Nuevo</button></a></h3>
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
                              <th>Id</th>
                              <th>Fecha</th>
                              <th>Nombre</th>
                              <th>Especie</th>
                              <th>Raza</th>
                              <th>Observaciones</th>
                            </thead>
                    <?php
                        $inc = include("Conexion.php");
                            if ($inc) {
                                if (isset($_POST["enviar"])) {
                                  
                                  $buscar = $_POST["textbox"];
                                  $Result = "SELECT * FROM animales_en_adopcion WHERE nombreAnimaladopocion LIKE '%$buscar%'";
                                  //$Result= $conexion->query("SELECT * FROM mascota WHERE nombreMascota LIKE '%$buscar%'");
                                  $buscarResult= mysqli_query($conexion, $Result);
                                    while ($row = $buscarResult->fetch_array()) {
                                      $idAnimaldisponible = $row["idAnimaldisponible"];
                                      $fechaAdop = $row["fechaEncuentro"];
                                      $nombreAAdop = $row["nombreAnimaladopocion"];
                                      $especieAAdop = $row["especie_Animal"];
                                      $raza = $row["raza"];
                                      $observacionesAn = $row["observacionesAnimal"];
                                        ?>
                                        <tr>
                                            <td><?php echo $idAnimaldisponible ?>  </td>
                                            <td><?php echo $fechaAdop ?>  </td>
                                            <td><?php echo $nombreAAdop ?></td>
                                            <td><?php echo $especieAAdop ?></td>
                                            <td><?php echo $raza ?></td>
                                            <td><?php echo $observacionesAn ?></td>
                                            <td>
                                                <a href="adopadmlistadoEditar.php?id=<?php echo $row ['idAnimaldisponible'];?>"><button class="btn btn-info">Editar</button></a>
                                                <a href="adopadmlistadoEliminar.php?id=<?php echo $row ['idAnimaldisponible'];?>"><button class="btn btn-danger">Eliminar</button></a>
                                            </td>
                                        </tr> 
            <?php
                                }}else{
                                  $traer = "SELECT * FROM animales_en_adopcion";
                                  $resultado = mysqli_query($conexion, $traer);
                                 if ($resultado) {
                                    while ($row = $resultado->fetch_array()) {
                                      $idAnimaldisponible = $row["idAnimaldisponible"];
                                      $fechaAdop = $row["fechaEncuentro"];
                                      $nombreAAdop = $row["nombreAnimaladopocion"];
                                      $especieAAdop = $row["especie_Animal"];
                                      $raza = $row["raza"];
                                      $observacionesAn = $row["observacionesAnimal"];
                                        ?>
                                        <tr>
                                            <td><?php echo $idAnimaldisponible ?>  </td>
                                            <td><?php echo $fechaAdop ?>  </td>
                                            <td><?php echo $nombreAAdop ?></td>
                                            <td><?php echo $especieAAdop ?></td>
                                            <td><?php echo $raza ?></td>
                                            <td><?php echo $observacionesAn ?></td>
                                            <td>
                                                <a href="adopadmlistadoEditar.php?id=<?php echo $row ['idAnimaldisponible'];?>"><button class="btn btn-info">Editar</button></a>
                                                <a href="adopadmlistadoEliminar.php?id=<?php echo $row ['idAnimaldisponible'];?>"><button class="btn btn-danger">Eliminar</button></a>
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

