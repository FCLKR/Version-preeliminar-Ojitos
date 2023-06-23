<!DOCTYPE html>

<html>
<head>
  <link rel="stylesheet" href="../Layout/font-awesome-4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lista Productos</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../Layout/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Layout/css/font-awesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Layout/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="../Layout/css/_all-skins.min.css">
     <link rel="apple-touch-icon" href="img/eye.png">
     <link rel="shortcut icon" href="img/eye.ico">

   </head>
   
   
   <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="../Layout/inicioAdmin.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <img src="..\Layout\img\Logo_Small.png">
          <!-- logo for regular state and mobile devices -->
         <!----<span class="logo-lg"><b>INVentario</b></span>-->
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu"   style="color: black;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Administrador</small>
                  <span class="hidden-xs">Jefferson A. Arenas Z</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">

                    <p style="color: black;">
                      Proyecto Ojitos en proceso
                      <small>En desarrollo</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <div class="pull-right">
                      <a href="../Login/login.html" class="btn btn-default btn-flat">Cerrar sesion</a>
                    </div>
                    <div class="pull-left">
                      <a href="../Login/login.html" class="btn btn-default btn-flat">Cambiar contraseña</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i>
                <span>Tienda</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="..\Productos\productosAdmListado.php"><i class="fa fa-circle-o"></i>Lista de productos</a></li>                
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Ventas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="..\Ventas\proAdmListado.php"><i class="fa fa-circle-o"></i> Productos</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Servicios</a></li>
              </ul>
            </li>
            

            <li class="treeview">
              <a href="#">
                <i class="fa fa-paw"></i> 
                <span>Animales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="..\Mascotas\mascotasAdmListado.php"><i class="fa fa-paw"></i>Mascotas</a></li>
                <li><a href="..\Adopcion\adopcionAdmListado.php"><i class="fa fa-paw"></i>Adopcion</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="..\InventarioClientes\ClientesAdmListado.php">
                <i class="fa fa-users"></i>
                <span>Clientes</span>
              </a>
            </li>
            <li class="treeview">
              <a href="..\InventarioClientes\ClientesAdmListado.php">
                <i class="fa fa-user"></i> 
                <span>Gestion de usuarios</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


     



      <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Facturacion</h3>
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
                        <h3>Informe de servicios vendidos</h3>
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
                              <th>Codigo Factura</th>
                              <th>Fecha Factura</th>
                              <th>Documento Cliente</th>
                              <th>Servicio</th>
                              <th>Tipo</th>
                              <th>Valor</th>
                              <th>subTotal</th>
                              <th>Total Factura</th>
                              <th>Observaciones</th>
                            </thead>
                               
                    <?php
                        $inc = include("Conexion.php");
                            if ($inc) {
                                if (isset($_POST["enviar"])) {
                                  
                                  $buscar = $_POST["textbox"];
                                  $Result = "CALL VentasSerListaAdmFiltro ('%$buscar%')";
                                  //$Result= $conexion->query("SELECT * FROM producto WHERE nombreProducto LIKE '%$buscar%'");
                                  $buscarResult= mysqli_query($conexion, $Result);
                                    while ($row = $buscarResult->fetch_array()) {
                                            $idfactura = $row["idfactura"];
                                            $fechaFactura = $row["fechaFactura"];
                                            $documentoCliente = $row["documentoCliente"];
                                            $nombreProducto = $row["nombreServicio"];
                                            $tipoServicio= $row["tipoServicio"];
                                            $valorServicio= $row["valorServicio"];
                                            $subTotal= $row["subTotal"];
                                            $totalCompra = $row["totalFactura"];
                                            $observacionServicio = $row["descripcion_compra"];
                                        ?>
                                         <tr>
                                            <td><?php echo $idfactura  ?>  </td>
                                            <td><?php echo $fechaFactura  ?>  </td>
                                            <td><?php echo $documentoCliente ?></td>
                                            <td><?php echo $nombreProducto ?></td>
                                            <td><?php echo $tipoServicio ?></td>
                                            <td><?php echo $valorServicio ?></td>
                                            <td><?php echo $subTotal ?></td>
                                            <td><?php echo $totalCompra ?></td>
                                            <td><?php echo $observacionServicio ?></td>

                                        </tr> 
                                        <?php
                                    }
                                } else {
                                    $traer = "CALL VentasSerListaAdmFiltro ";
                                    $resultado = mysqli_query($conexion, $traer);
                                    if ($resultado) {
                                        while ($row = $resultado->fetch_array()) {
                                            $idfactura = $row["idfactura"];
                                            $fechaFactura = $row["fechaFactura"];
                                            $documentoCliente = $row["documentoCliente"];
                                            $nombreProducto = $row["nombreServicio"];
                                            $tipoServicio= $row["tipoServicio"];
                                            $valorServicio= $row["valorServicio"];
                                            $subTotal= $row["subTotal"];
                                            $totalCompra = $row["totalFactura"];
                                            $observacionServicio = $row["descripcion_compra"];
                                            ?>
                                            <tr>
                                            <td><?php echo $idfactura  ?>  </td>
                                            <td><?php echo $fechaFactura  ?>  </td>
                                            <td><?php echo $documentoCliente ?></td>
                                            <td><?php echo $nombreProducto ?></td>
                                            <td><?php echo $tipoServicio ?></td>
                                            <td><?php echo $valorServicio ?></td>
                                            <td><?php echo $subTotal ?></td>
                                            <td><?php echo $totalCompra ?></td>
                                            <td><?php echo $observacionServicio ?></td>
                                            
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
