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
                                    <?php
                                    //..........................Consulta para extraer variable del Cliente que se loguea.......................................
                                    $sql2 = "SELECT idCliente, nombresUsuarios, apellidosUsuarios FROM cliente WHERE documentoCliente= $documentoiniciar ";
                                    $query2 = $conexion->query($sql2);
                                    while ($row = $query2->fetch_array()) {
                                        $nombreinicio = $row["nombresUsuarios"];
                                        $apellidoinicio = $row["apellidosUsuarios"];
                                        $idClienteSesion = $row["idCliente"]; //-> Se genera variable id cliente para actualizar tabla factura fase 1.
                                    }
                                    $sql4 = "SELECT * FROM factura WHERE cliente_idCliente = $idClienteSesion";
                                    $query4 = $conexion->query($sql4);
                                    while ($row = $query4->fetch_array()) {
                                        $idFact = $row["idfactura"];
                                    }
                                    //..........................Condicionar si existe una factura concluida por totalFactura .......................................        
                                    $versi = null;
                                    $sql5 = "SELECT * FROM factura WHERE cliente_idCliente = $idClienteSesion AND totalFactura >=0 ";
                                    $query5 = $conexion->query($sql5);
                                    while ($row = $query5->fetch_array()) {
                                        $versi = ["id"]; //-> Si se encuentra datos esta variable ocupara un resulta
                                    }
                                    
                                    if ($versi == null) {
                                        ?><h3 class="box-title">Bienvenido a nuestra  </h3><?php
                                    }else{
                                    $sql7 = "SELECT SUM(valorProducto), SUM(valorIva),SUM(subTotal) FROM factura_has_producto WHERE Factura_idfactura = $idFact";
                                    $query7 = $conexion->query($sql7);
                                    while ($row = $query7->fetch_array()) {
                                        $valorTotalProducto = $row ['SUM(valorProducto)'];
                                        $valorIvaproducto = $row ['SUM(valorIva)'];
                                        $valorsubtotal = $row ['SUM(subTotal)'];
                                    }
                                    $sql11 = "SELECT totalFactura FROM factura WHERE cliente_idCliente = $idClienteSesion";
                                    $query11 = $conexion->query($sql11);
                                    while ($row = $query11->fetch_array()) {
                                        $totalFactura = $row ['totalFactura'];
                                    }}
                                    ?>
                                    <h3 class="box-title">Tienda Ojitos  </h3>
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
                                                    <h3>Conoce nuestros productos    <a href="crearFactura.php"><button   class="btn btn-success">PAGAR AHORA</button></a></h3>
                                                    <div class="form-group">

                                                        <form action="" method="post">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="textbox" placeholder="¿Que producto buscas?" value="">
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
                                                                    $Result = "CALL BuscarListaProductoCliente('$buscar')";
                                                                    //$Result= $conexion->query("SELECT * FROM producto WHERE nombreProducto LIKE '%$buscar%'");
                                                                    $buscarResult = mysqli_query($conexion, $Result);
                                                                    while ($row = $buscarResult->fetch_array()) {
                                                                        $idPro = $row["idProducto"];
                                                                        $nomPro = $row["nombreProducto"];
                                                                        $valPro = $row["valorProducto"];
                                                                        $desPro = $row["descripcionProducto"];
                                                                        ?>

                                                                        <form action="crearDetallesFact.php" method="post"> 
                                                                            <tr>
                                                                                <td><input type="hidden" name="nidPro" value="<?php echo $idPro ?> ">
            <?php echo $nomPro ?>  </td>
                                                                                <td><?php echo $desPro ?></td>
                                                                                <td><input type="hidden" name="nvalPro" value="<?php echo $valPro ?> "><?php echo $valPro ?></td>
                                                                                <td><select name="cantidaComprar" class="form-control">
                                                                                        <option selected>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>

                                                                                    </select></td>
                                                                                <td>
                                                                                    <a href="#"><button   class="btn btn-info" type="submit">¡Lo quiero!</button></a></td>
                                                                                <td> 
                                                                                </td>
                                                                            </tr> 
                                                                        </form>
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

                                                                                <form action="crearDetallesFact.php" method="post"> 
                                                                                    <tr>
                                                                                        <td><input type="hidden" name="nidPro" value="<?php echo $idPro ?> ">
                <?php echo $nomPro ?>  </td>
                                                                                        <td><?php echo $desPro ?></td>
                                                                                        <td><input type="hidden" name="nvalPro" value="<?php echo $valPro ?> "><?php echo $valPro ?></td>
                                                                                        <td><select name="cantidaComprar" class="form-control">
                                                                                                <option selected>1</option>
                                                                                                <option>2</option>
                                                                                                <option>3</option>

                                                                                            </select></td>
                                                                                        <td>
                                                                                            <a href="#"><button   class="btn btn-info" type="submit">¡Lo quiero!</button></a></td>
                                                                                        <td> 
                                                                                        </td>
                                                                                    </tr> 
                                                                                </form> 
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
                            <?php
                            if ($versi==null){
                                echo "Hey! Aun no haz adquirido ningun producto de nuestra tienda - ¿Que esperas?";
                            }else{
                            ?>
                            <div class="box">
                                <div class="box-header with-border">
                                    
                                    <h3 class="box-title">Codigo Factura  </h3> <label class="box-title"> No. <?php echo $idFact ?></label>
                                    <div class="box-tools pull-right">
                                        <h3 class="box-title">Total ultima factura  </h3> <label class="box-title"> | <?php echo $totalFactura ?></label>
                                    </div>
                                </div>
                                
                                <div class="box-header with-border">
                                    
                                    <h3 class="box-title">Valor total productos  =   </h3> <label class="box-title">     <?php echo $valorsubtotal ?></label>
                                    <div class="box-tools pull-right">
                                    </div>
                                </div>
                                
                                 <div class="box-header with-border">
                                    
                                    <h3 class="box-title">Total Iva  =  </h3> <label class="box-title">  <?php echo $valorIvaproducto ?></label>
                                    <div class="box-tools pull-right">
                                    </div>
                                </div>
                            </div><!-- /.row -->
                            <?php } ?>
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

