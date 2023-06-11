<?php
require '../../includes/database.php';

$bd=conectar_db();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
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
        <a href="../../administracion_habitaciones.php">Regresar</a>
        <form action="formulario" method="POST" action="crearH.php">
            <fieldset>
                <legend>datos</legend>
            </fieldset>
        </form>
    </div>
    
</body>
</html>