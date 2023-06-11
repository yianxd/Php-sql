<?php
require '../../includes/database.php';

$bd=conectar_db();

$errores =  [];


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_habitacion = $_POST['id_habitacion'];
    $estado = $_POST['estado'];
    $fecha_salida = $_POST['fecha_salida'];
    $fecha_entrada = $_POST['fecha_entrada'];
    $precio_total = $_POST['precio_total'];
    $cantidad_personas = $_POST['cantidad_personas'];
    $nombre_tipo = $_POST['nombre_tipo'];
    if(!$id_habitacion){
        $errores[] = 'Es obligatorio colocar la habitacion';
        };
        if(!$estado){
            $errores[]='Es obligatorio colocar el estado';
        };
        if(!$fecha_salida){
            $errores[]='Es obligatorio colocar la fecha de salida';
        };
        if(!$fecha_entrada){
            $errores[]='Es obligatorio colocar la fecha de entrada';
        };
        if(!$precio_total){
            $errores[]='Es obligatorio colocar el precio total';
        };
        if(!$cantidad_personas){
            $errores[]='Es obligatorio colocar la cantidad de personas';
        };
        if(!$nombre_tipo){
            $errores[]='Es obligatorio colocar el tipo de habitacion ';
        };
        if(empty($errores)){
        
            $sql = "INSERT INTO habitacion(id_habitacion,estado,fecha_salida,fecha_entrada,precio_total,cantidad_personas,nombre_tipo) 
            VALUES ('$id_habitacion','$estado','$fecha_salida','$fecha_entrada','$precio_total','$cantidad_personas','$nombre_tipo')" ;

            echo $sql;

            $resultado = mysqli_query($bd, $sql);

            if($resultado){
                
                header('location: ../../gestionH.php');
            }
            }
            else{
                foreach($errores as $error){
                    echo '<br>' . $error;
                }
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar habitacion</title>
</head>
<body>
    <div>
        <p>Nueva habitacion</p>
        <a href="../../gestionH.php">Regresar</a>
        <form action="" method="POST" action="crearH.php">
            <fieldset>
            <label for="id_habitacion">Habitacion:</label><br>
            <input type="text" id="id_habitacion" name="id_habitacion"><br>

            <label for="estado">Estado:</label><br>
            <input type="text" tipo='estado' name="estado"><br>

            <label for="fecha_entrada">Fecha de entrada:</label><br>
            <input type="text" tipo='fecha_entrada' name="fecha_entrada"><br>

            <label for="fecha_salida">Fecha de salida:</label><br>
            <input type="text" tipo='fecha_salida' name="fecha_salida"><br>

            <label for="precio_total">Precio total:</label><br>
            <input type="text" id="precio_total" name="precio_total" ><br>

            <label for="cantidad_personas">Cantidad de personas: </label> <br>
            <input type="text" id="cantidad_personas" name="cantidad_personas"> <br>

            <label for="nombre_tipo">Tipo de habitacion:</label><br>
            <input type="text" id="nombre_tipo" name="nombre_tipo" ><br>

            <input type="submit" id="enviar" name="enviar" value="Enviar datos">
            </fieldset>
        </form>
    </div>
</body>
</html>