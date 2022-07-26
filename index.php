<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM clientes";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registrar Info</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="css/style.css" rel="stylesheet"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form id="formulario" name="formulario" method="POST" autocomplete="off">

                                    <input type="text" class="form-control mb-3" id="cod_registro" name="cod_registro" placeholder="Codigo Registro" autocomplete="off">
                                    <input type="text" class="form-control mb-3" id="nombre_cliente" name="nombre_cliente" class="req" placeholder="Nombre Cliente" autocomplete="off">
                                    <select name="select" class="form-control mb-3" id="tipo_documento" name="tipo_documento">
                                        <option selected>Tipo de Documento</option>
                                        <option value="CC">Cedula de Ciudadania</option>
                                        <option value="CExtr">Cedula de Extranjeria</option>
                                        <option value="TI">Tarjeta de Identidad</option>
                                        <option value="Pasaporte">Pasaporte</option>
                                    </select>
                                    <input type="text" id="direccion" name="direccion" class="form-control mb-3" placeholder="direccion" autocomplete="off">
                                    <input type="text" id="telefono" name="telefono" class="form-control mb-3" placeholder="telefono" autocomplete="off">
                                    <!-- <input type="text" class="form-control mb-3" name="dni" placeholder="Dni"> -->
                                    <input type="text" id="correo" name="correo" class="form-control mb-3" placeholder="Correo" autocomplete="off">
                                    <!-- <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres"> -->
                                    <!-- <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos"> -->
                                    
                                    <!-- <input type="submit" class="btn btn-primary"> -->
                                    <button type="button" id="enviar_dato" name="enviar_dato" class="btn btn-primary" style="cursor:pointer" method="post" action="insertar.php" onclick="enviar_form();">Enviar Datos</button>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Tipo Doc</th>
                                        <th>Direccion</th>
                                        <th>telefono</th>
                                        <th>Correo</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_registro']?></th>
                                                <th><?php  echo $row['nombre_cliente']?></th>
                                                <th><?php  echo $row['tipo_doc']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['correo']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_registro'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_registro'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <script src="./js/index.js"></script>
    </body>
</html>