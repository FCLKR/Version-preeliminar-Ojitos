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
                  <h3 class="box-title">Bienvenido <?php    
                                $documentoiniciar = $_SESSION["username"];
                                $sql2 = " SELECT  nombresUsuarios, apellidosUsuarios, roles.nomRol
                                    FROM usuarios
                                    INNER JOIN roles ON usuarios.Roles_idRol = roles.idRol WHERE documentoUsuario= $documentoiniciar ";
                                    $query2 = $conexion->query($sql2);
                                    while ($row = $query2->fetch_array())  {
                                    $nombreinicio = $row["nombresUsuarios"];
                                    $apellidoinicio= $row["apellidosUsuarios"];
                                    $nomRol=$row ["nomRol"];
                        }
                                echo $nombreinicio;  
                                date_default_timezone_set("America/Bogota");
                                $hora = date('G');
                                //$hora2 = date('h:i:s A'); 
                                //echo $hora;
                                switch ($hora) {
                                    case (($hora >= 6) AND ($hora < 12)): $mensaje = ",  ¡Buenos dias!";
                                        echo $mensaje;
                                        break;

                                    case (($hora >= 12) AND ($hora < 18)): $mensaje = ",  ¡Buenas tardes!";
                                        echo $mensaje;
                                        break;

                                    case (($hora >= 0) AND ($hora < 6)): $mensaje = ",  ¡Buena madrugada!";
                                        echo $mensaje;
                                        break;
                                }
                                ?></h3>
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
                    <h3>Contenido [Aqui aparecera los resultados totales de registros de animales, clientes, ventas realizadas y solicitudes pendientes]</h3>
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
<script src="js/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>

</body>
</html>
