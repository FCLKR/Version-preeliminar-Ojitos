<!DOCTYPE html>

<html>
 <?php
    include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\headall.php'; //-> Fila superior
    ?>


    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

 <?php
            include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\headerall.php'; //-> Cuadro de presentacion y cerrar sesion
            include 'C:\xampp\htdocs\Ojitos\Vista\html\HeaderSlider\slidermenuCliente.php'; //-> Menu para cliente
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
                                                    <h3>Listado de Productos <a href=".\productosAdmCrear.php"><button class="btn btn-success">Nuevo</button></a></h3>
                                                    <div class="form-group">

                                                        <form action="" method="post">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="textbox" placeholder="Busca por documento..." value="">
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
                                                            <th>Producto</th>
                                                                <th>Descripcion</th>
                                                                <th>Valor</th>
                                                                <th>Cantidad</th>
                                                                <th>¿Lo quieres?</th>
                                                            </thead>

                                                            <?php
                                                            $inc = include("Conexion.php");
                                                            if ($inc) {
                                                                if (isset($_POST["enviar"])) {

                                                                    $buscar = $_POST["textbox"];
                                                                    $Result = "SELECT * FROM cliente WHERE documentoCliente LIKE '%$buscar%'";
                                                                    //$Result= $conexion->query("SELECT * FROM producto WHERE nombreProducto LIKE '%$buscar%'");
                                                                    $buscarResult = mysqli_query($conexion, $Result);
                                                                    while ($row = $buscarResult->fetch_array()) {
                                                                        $idCliente = $row["idCliente"];
                                                                        $nombreCliente = $row["nombresUsuarios"];
                                                                        $segundoNombre = $row["segnombreCliente"];
                                                                        $primerApellido = $row["apellidosUsuarios"];
                                                                        $segundoApellido = $row["segapellidoCliente"];
                                                                        $documentoCliente = $row["documentoCliente"];
                                                                        $edadCliente = $row["edadCliente"];
                                                                        $email = $row["mailCliente"];
                                                                        $direccionCliente = $row["addressCliente"];
                                                                        $celularCliente = $row["numeroCelular"];
                                                                        $estadoCliente = $row["estado"];
                                                                        
                                                                        ?>
                                                                        <tr>
                                                                            <td><?php echo $idCliente ?>  </td>
                                                                            <td><?php echo $nombreCliente ?></td>
                                                                            <td><?php echo $segundoNombre ?></td>
                                                                            <td><?php echo $primerApellido ?></td>
                                                                            <td><?php echo $segundoApellido ?></td>
                                                                            <td><?php echo $documentoCliente ?>  </td>
                                                                            <td><?php echo $edadCliente ?></td>
                                                                            <td><?php echo $email ?></td>
                                                                            <td><?php echo $direccionCliente ?></td>
                                                                            <td><?php echo $celularCliente ?></td>
                                                                            <td>
                                                                                <a href="updateEstadocliente.php?id=<?php echo $row ['idCliente']; ?> "><button class="btn btn-info">Cambiar</button></a></td>
                                                                            <td>   
                                                                            </td>
                                                                        </tr> 
                                                                        <?php
                                                                    }
                                                                } else {
                                                                            
                                                                            
                                                                            $traer = "CALL ListaProductoCliente()";
                                                                            $resultado = mysqli_query($conexion, $traer);
                                                                            if ($resultado) {
                                                                            while ($row = $resultado->fetch_array()) {
                                                                            $idPro = $row["idProducto"];
                                                                            $nomPro = $row["nombreProducto"];
                                                                            $valPro = $row["valorProducto"];
                                                                            $desPro = $row["descripcionProducto"];

                                                                            ?>
                                                                                <tr>
                                                                                    <td><?php echo $nomPro ?>  </td>
                                                                                    <td><?php echo $desPro ?></td>
                                                                                    <td><?php echo $valPro ?></td>
                                                                                    <td><?php// echo $cantPro ?></td>
                                                                                            <td>
                                                                                                <a href="crearFactura.php?id=<?php echo $row ['idProducto']; ?>"><button   class="btn btn-info">¡Lo quiero!</button></a></td>
                                                                                            <td> 
                                                                                            </td>
                                                                                        </tr> 
                                                                                        <?php
                                                                                    }
                                                                    }
                                                                }
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

