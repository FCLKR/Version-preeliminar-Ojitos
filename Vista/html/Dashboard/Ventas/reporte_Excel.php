   <script>


<?php
//Incluir librerias


require 'C:\xampp\htdocs\Ojitos\vendor\autoload.php';
require 'Conexion.php';

//Consulta a ojitos_db1
$sql3="CALL VentasProListaAdmExcel()";
$consulta= mysqli_query($conexion, $sql3);

//Especificar la fila donde queremos que comience el reporte
$fila=2;

//$gdImage = imagecreatefromjpeg('http://localhost/Ojitos/vista/html/dashboard/layout/img/Logo_Small.png');

//Crear el objeto de excel con su descripcion y creadores.
//$objPHPExcel = new PHPExcel(); ->//Antiguo
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$spreadsheet = new Spreadsheet();
$spreadsheet ->getProperties()->setCreator("FCLKR - Association with Jose Beltran")-> setDescription("Reporte productos VENTAS");

//Crear el objeto de excel propiedades especificas.
//$objPHPExcel ->setActiveSheetIndex(0);->Antiguo PHPExcel
$spreadsheet ->getActiveSheetIndex(0);
$hojaActiva = $spreadsheet->getActiveSheet();

//Crear el objeto de excel con propiedades de celdas [Definir titulos].
$hojaActiva ->setCellValue('A1','id_Factura');
$hojaActiva ->setCellValue('B1','Fecha de Facturacion');
$hojaActiva ->setCellValue('C1','Nombre_Cliente');
$hojaActiva ->setCellValue('D1','Apellido_Cliente');
$hojaActiva ->setCellValue('E1','Producto');
$hojaActiva ->setCellValue('F1','Valor Producto');
$hojaActiva ->setCellValue('G1','Cantidad compradas');
$hojaActiva ->setCellValue('H1','Iva aplicado');
$hojaActiva ->setCellValue('I1','Subtotal');
$hojaActiva ->setCellValue('J1','Total_Factura');
$hojaActiva ->setCellValue('K1','Cantidad en stock');

while($row=$consulta->fetch_assoc()){
    //Crear el objeto de excel con propiedades de celdas [Traer datos].
    $hojaActiva ->setCellValue('A'.$fila,$row['idfactura']);
    $hojaActiva ->setCellValue('B'.$fila,$row['fechaFactura']);
    $hojaActiva ->setCellValue('C'.$fila,$row['nombresUsuarios']);
    $hojaActiva ->setCellValue('D'.$fila,$row['apellidosUsuarios']);
    $hojaActiva ->setCellValue('E'.$fila,$row['nombreProducto']);
    $hojaActiva ->setCellValue('F'.$fila,$row['valorProducto']);
    $hojaActiva ->setCellValue('G'.$fila,$row['cantidad']);
    $hojaActiva ->setCellValue('H'.$fila,$row['valorIva']);
    $hojaActiva ->setCellValue('I'.$fila,$row['subTotal']);
    //$objPHPExcel ->getActiveSheet()->setCellValue('I'.$fila,'=F'.$fila.'*G'.$fila);
    $hojaActiva ->setCellValue('J'.$fila,$row['totalFactura']);
    $hojaActiva ->setCellValue('K'.$fila,$row['stockProducto']);
    
    $fila++; //Aumentar fila.
    
}

        /*header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"); // Formato para darle al archivo
	header('Content-Disposition: attachment;filename="Productos.xlsx"'); // Nombre con extension
	header('Cache-Control: max-age=0'); // Controlar el Cache*/
        
        //$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); ->controlador Antiguo
	
        $write = new Xlsx($spreadsheet);
	$write->save('C:\xampp\htdocs\Ojitos\Reportes_Excel\Reporte_VentasP.xlsx');
        $fp = fopen("miarchivo.txt", "r");
            
        header ('location: VentanaEmergenteREVP.php');
       
        
  ?>