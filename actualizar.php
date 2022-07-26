<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];
//echo $id;

$sql="SELECT * FROM clientes WHERE cod_registro='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="css/style.css" rel="stylesheet"> -->
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_cliente" value="<?php echo $row['id_cliente']  ?>">
                                
                                <!-- <input type="text" class="form-control mb-3" name="id_cliente" placeholder="id_cliente" value="<?php echo $row['id_cliente']  ?>"> -->
                                <input type="text" class="form-control mb-3" id="cod_registro" name="cod_registro" placeholder="Codigo Registro" value="<?php echo $row['cod_registro']  ?>"> 
                                <input type="text" class="form-control mb-3" name="tipo_doc" placeholder="Tipo Documento" value="<?php echo $row['tipo_doc']  ?>">
                                <!-- <select name="select" class="form-control mb-3" id="tipo_doc" name="tipo_doc" value="<?php echo $row['cod_registro']  ?>">
                                        <option selected>Tipo de Documento</option>
                                        <option value="CC">Cedula de Ciudadania</option>
                                        <option value="CExtr">Cedula de Extranjeria</option>
                                        <option value="TI">Tarjeta de Identidad</option>
                                        <option value="Pasaporte">Pasaporte nro</option>
                                    </select> -->
                                <!-- "> -->
                                <input type="text" class="form-control mb-3" name="nombre_cliente" placeholder="Nombre Cliente" value="<?php echo $row['nombre_cliente']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $row['correo']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>