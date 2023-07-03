<!DOCTYPE html>
<html>
<?php
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\headall.php';//-> Fila superior
    ?>
   <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

       <?php
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\headerall.php';//-> Cuadro de presentacion y cerrar sesion
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\slidermenuStaff.php';//-> Menu lateral.
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
                  <h3 class="box-title">Proceso Adopcion</h3>
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
                        <h3>Listado de animales <!--<a href=".\adopcionAdmCrear.php"><button class="btn btn-success">Nuevo</button></a>--></h3>
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
                              <th>Solicitud</th>
                              <th>Nombre</th>
                              <th>Especie</th>
                              <th>Raza</th>
                              <th>Nombre interesado</th>
                              <th>Documento interesado</th>
                              <th>Cambiar estado</th>
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
                                      $nombreAAdop = $row["nombreAnimaladopocion"];
                                      $especieAAdop = $row["especie_Animal"];
                                      $raza = $row["raza"];
                                        ?>
                                        <tr>
                                            <td><?php echo $idAnimaldisponible ?>  </td>
                                            <td><?php echo $nombreAAdop ?></td>
                                            <td><?php echo $especieAAdop ?></td>
                                            <td><?php echo $raza ?></td>
                                            <td>
                                               <!-- <a href="adopadmlistadoEditar.php?id=<?php echo $row ['idAnimaldisponible'];?>"><button class="btn btn-info">Editar</button></a>-->
                                                <!--<a href="adopadmlistadoEliminar.php?id=<?php echo $row ['idAnimaldisponible'];?>"><button class="btn btn-danger">Eliminar</button></a>-->
                                            </td>
                                        </tr> 
            <?php
                                }}else{
                                  $traer1 = "SELECT animales_en_adopcion.idAnimaldisponible,animales_en_adopcion.estadoSolicitud,animales_en_adopcion.nombreAnimaladopocion, animales_en_adopcion.especie_Animal,animales_en_adopcion.raza,cliente.idCliente,cliente.nombresUsuarios,
                                            cliente.documentoCliente
                                            FROM animales_en_adopcion
                                            INNER JOIN adopcion ON animales_en_adopcion.idAnimaldisponible= adopcion.Animal_Adopcioncol
                                            INNER JOIN cliente ON adopcion.cliente_idCliente= cliente.idCliente WHERE estadoSolicitud = 'Solicitado'";
                                  $resultado = mysqli_query($conexion, $traer1);
                                 if ($resultado) {
                                    while ($row = $resultado->fetch_array()) {
                                      $idAnimaldisponible=$row['idAnimaldisponible'];
                                      $idinteresado=$row['idCliente'];
                                      $estadoSoli = $row["estadoSolicitud"];
                                      $nombreAAdopc = $row["nombreAnimaladopocion"];
                                      $especieAAdop = $row["especie_Animal"];
                                      $raza = $row["raza"];
                                      $nomCli = $row["nombresUsuarios"];
                                      $docCli = $row["documentoCliente"];
                                        ?>
                                        <form action="actualizarSolicitudAdop.php" method="post"> 
                                        
                                        <tr>
                                            <td> <input type="hidden" name="nidinteresado" value=" <?php echo $idinteresado ?> "><?php echo $estadoSoli?> </td>
                                            <td><input type="hidden" name="nidanadop" value=" <?php echo $idAnimaldisponible ?> "><?php echo $nombreAAdopc ?></td>
                                            <td><?php echo $especieAAdop ?></td>
                                            <td><?php echo $raza ?></td>
                                            <td><?php echo $nomCli ?></td>
                                            <td><?php echo $docCli ?></td>
                                            <td><select name="statusoptions" class="form-control">
                                                                                                <option selected>Adoptado</option>
                                                                                                <option>Rechazado</option>
                                                                                            </select></td>
                                            <td>
                                                <!--<a href="adopadmlistadoEditar.php?id="><button class="btn btn-info">Editar</button></a>-->
                                                <a href="#"><button class="btn btn-success" type="submit">Actualizar</button></a>
                                            </td>
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
                        <h3>Listado de animales <!--<a href=".\adopcionAdmCrear.php"><button class="btn btn-success">Nuevo</button></a>--></h3>
                        <div class="form-group">
                         <!--   
                         <form action="" method="post">
                          <div class="input-group">
                           <input type="text" class="form-control" name="textbox" placeholder="Buscar..." value="">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-primary" name="enviar">Buscar</button>
                            </span>
                          </div>
                         </form>-->
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
                                               <!-- <a href="adopadmlistadoEditar.php?id=<?php echo $row ['idAnimaldisponible'];?>"><button class="btn btn-info">Editar</button></a>-->
                                                <!--<a href="adopadmlistadoEliminar.php?id=<?php echo $row ['idAnimaldisponible'];?>"><button class="btn btn-danger">Eliminar</button></a>-->
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
                                                <!--<a href="adopadmlistadoEditar.php?id=<?php echo $row ['idAnimaldisponible'];?>"><button class="btn btn-info">Editar</button></a>-->
                                                <!--<a href="adopadmlistadoEliminar.php?id=<?php echo $row ['idAnimaldisponible'];?>"><button class="btn btn-danger">Eliminar</button></a>-->
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

