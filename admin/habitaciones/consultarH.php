<?php
require '../../includes/database.php';

$bd=conectar_db();
$sql="SELECT * FROM HABITACION";
$a=mysqli_query($bd,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar habitacion</title>
</head>
<body>
    <h3>Gestion de habitaciones</h3>
    <table>
        <th>
            <tr>
             <!-- inicio de creacion de tabla con la etiqueta "td" --> 
            </tr>
        </th>
    <?php  
    //bloque de codigo php para ejecucion del while
    
    ?>
    </table>
<a href="../../gestionH.php">Regresar</a>
</body>
</html>