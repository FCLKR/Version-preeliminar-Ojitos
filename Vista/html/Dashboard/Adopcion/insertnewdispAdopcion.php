 <?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ojitos_db1";
$idAnimaldisponible = $_POST["idAnimaldisponible"];
$fechaAdop = $_POST["fechaEncuentro"];
$nombreAAdop = $_POST["nombreAnimaladopocion"];
$especieAAdop = $_POST["especie_Animal"];
$raza = $_POST["raza"];
$observacionesAn = $_POST["observacionesAnimal"];

$conexion = mysqli_connect($servername, $username, $password, $dbname);


if (!$conexion){
    die("connection failed:" .mysqli_connect_error());
}
$sql ="CALL InsertarNuevoAnimal ('$fechaAdop','$nombreAAdop','$especieAAdop','$raza','$observacionesAn')";
/*$sql = "INSERT INTO animales_en_adopcion (idAnimaldisponible, fechaEncuentro, nombreAnimaladopocion, especie_Animal, raza,observacionesAnimal)
VALUES ('$idAnimaldisponible', '$fechaAdop', '$nombreAAdop', '$especieAAdop','$raza','$observacionesAn')";*/
   
if ($especieAAdop =="Elija una especie") {
    echo "Asegurate de haber elegido una especie";
    
} elseif (mysqli_query($conexion, $sql)) {
        header('location: adopcionAdmListado.php');
    } else {
        echo " -> Error al registrar el dato!" . mysqli_error($conexion);
    } 

mysqli_close($conexion);
?>
