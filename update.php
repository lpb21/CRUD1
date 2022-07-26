<?php

include("conexion.php");
$con=conectar();


$cod_registro=$_POST['cod_registro'];
$nombre_cliente=$_POST['nombre_cliente'];
$tipo_doc=$_POST['tipo_doc'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];

$sql="UPDATE crud1.clientes SET  tipo_doc = '$tipo_doc', nombre_cliente='$nombre_cliente',direccion='$direccion',telefono='$telefono',correo='$correo' WHERE cod_registro='$cod_registro';";
echo $sql;
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>