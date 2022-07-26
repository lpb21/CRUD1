<?php
include("conexion.php");
$con=conectar();

$cod_registro=$_POST['cod_registro'];
$nombre_cliente=$_POST['nombre_cliente'];
$tipo_doc=$_POST['tipo_documento'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$fecha = date("Y-m-d H:i:s");

try {
$sql="INSERT INTO clientes (cod_registro, nombre_cliente, tipo_doc, direccion, telefono, correo, fecha) VALUES('$cod_registro','$nombre_cliente','$tipo_doc','$direccion','$telefono','$correo','$fecha');";
//echo $sql;

} catch (\Exception $e) {
    echo 'Se presentó un inconveniente al procesar la información. Actualiza la pagina e intenta nuevamente';
}

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>