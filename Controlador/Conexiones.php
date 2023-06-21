<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Conexiones
 *
 * @author Facel
 */
class Conexiones{

    public static function Test() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ojitos_db1";
# variable para inserccion de script SQL -> $query = $_POST["codQuery"];
        /* Script SQL para ejecutar -> 
         * $sql = "CREATE TABLE Directory(
          $query
          )";
          if (mysqli_query($conexion, $sql)) {
          echo "La tabla Directory ha sido completada con exito";
          }else{
          echo "Error creating database: "  . mysqli_error($conexion);
          } */

        $conexion = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conexion) {
            die("connection failed:" . mysqli_connect_error());
        } else {
            echo "Conexion Exitosa";
        }
    }

}

?>
