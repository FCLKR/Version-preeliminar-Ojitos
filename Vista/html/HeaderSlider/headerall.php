<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

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
              <?php
              session_start();
              $documentoiniciar = $_SESSION["username"];

              $inc = include("Conexion.php");
              $user_id2 = null;
              $sql2 = "SELECT  nombresUsuarios, apellidosUsuarios FROM usuarios WHERE documentoUsuario= $documentoiniciar ";
              $query2 = $conexion->query($sql2);
              while ($r = $query2->fetch_array()) {
                  $user_id2 = ["id"];
                  break;
              } if($user_id2==null){
                    $sql2 = "SELECT  nombresUsuarios, apellidosUsuarios FROM cliente WHERE documentoCliente= $documentoiniciar ";
                    $buscarResult = $conexion->query($sql2);
                        while ($row = $buscarResult->fetch_array())  {
                        $nombreinicio = $row["nombresUsuarios"];
                         $apellidoinicio= $row["apellidosUsuarios"];
                        }
              ?> 
              <li class="dropdown user user-menu"   style="color: black;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <small class="bg-red">Cliente</small><?php
              }else{
                  $sql2 = " SELECT  nombresUsuarios, apellidosUsuarios, roles.nomRol
                            FROM usuarios
                            INNER JOIN roles ON usuarios.Roles_idRol = roles.idRol WHERE documentoUsuario= $documentoiniciar ";
                   $query2 = $conexion->query($sql2);
                  while ($row = $query2->fetch_array())  {
                  $nombreinicio = $row["nombresUsuarios"];
                  $apellidoinicio= $row["apellidosUsuarios"];
                  $nomRol=$row ["nomRol"];
                        }
              ?> 
              <li class="dropdown user user-menu"   style="color: black;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <small class="bg-red"><?php echo "$nomRol"; ?></small><?php
                  }
                  ?>
              <!-- User Account: style can be found in dropdown.less -->
              
                  <!--<small class="bg-red">Administrador</small>-->
                  <span class="hidden-xs"><?php echo $nombreinicio  ; ?>  <?php echo $apellidoinicio  ; ?> </span>
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
                      <a href="logout.php" class="btn btn-default btn-flat">Cerrar sesion</a>
                    </div>
                    <div class="pull-left">
                      <a href="http://localhost/Ojitos/vista/html/Homepage/New_Pass/New_Pass.php" class="btn btn-default btn-flat">Cambiar contraseña</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>