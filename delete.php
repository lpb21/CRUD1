<?php

include("conexion.php");

$con=conectar();

//$opcion_curso = $_POST["opcion_curso"];
$cod_registro=$_GET['id'];
//echo 'prueba123';


$sql="DELETE FROM clientes WHERE cod_registro ='$cod_registro'";
//echo $sql;
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
