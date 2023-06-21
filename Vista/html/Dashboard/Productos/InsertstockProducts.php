 <?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ojitos_db1";
$nombreProducto = $_POST["nombreProducto"];
$valorProducto = $_POST["valorProducto"];
$stockProducto = $_POST["stockProducto"];
$descripcionProducto = $_POST["descripcionProducto"];

$conexion = mysqli_connect($servername, $username, $password, $dbname);


if (!$conexion){
    die("connection failed:" .mysqli_connect_error());
}

$sql = "INSERT INTO producto (nombreProducto, valorProducto, stockProducto, descripcionProducto)
VALUES ('$nombreProducto', '$valorProducto', '$stockProducto','$descripcionProducto')
";
   if (mysqli_query($conexion, $sql)) {
       header ('location: productosAdmListado.php');
   }else{
    echo "Error creating database: "  . mysqli_error($conexion);
   } 
   mysqli_close($conexion);


?>
