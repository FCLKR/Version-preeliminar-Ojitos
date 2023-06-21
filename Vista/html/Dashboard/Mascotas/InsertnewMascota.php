 <?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ojitos_db1";
$nombreMascota = $_POST["nombreMascota"];
$sexoMascota = $_POST["sexoMascota"];
$edadMascota = $_POST["edadMascota"];

$conexion = mysqli_connect($servername, $username, $password, $dbname);


if (!$conexion){
    die("connection failed:" .mysqli_connect_error());
}

$sql = "INSERT INTO mascota (nombreMascota, sexoMascota, edadMascota)
VALUES ('$nombreMascota', '$sexoMascota', '$edadMascota')
";
if ($sexoMascota == "Elija:") {
    echo "Asegurate de haber elegido una opción";
    
} elseif (mysqli_query($conexion, $sql)) {
        header('location: mascotasClienteListado.php');
    } else {
        echo " -> Error al registrar el dato!" . mysqli_error($conexion);
    } 

mysqli_close($conexion);
?>
