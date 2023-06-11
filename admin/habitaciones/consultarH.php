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
            <td>id_habitacion</td>
            <td>estado</td>
            <td>precio_total</td>
            <td>cantidad_personas</td>
            <td>nombre_tipo</td>
            </tr>
        </th>
    <?php while($habitaciom=mysqli_fetch_assoc($a)){?>
     <tr>
        <td> <?php echo $habitaciom['id_habitacion'];?></td>
        <td> <?php echo $habitaciom['estado'];?></td>
        <td> <?php echo $habitaciom['precio_total'];?></td>
        <td> <?php echo $habitaciom['cantidad_personas'];?></td>
        <td> <?php echo $habitaciom['nombre_tipo'];?></td>
        <td>
            <a href="">eliminar</a>
            <a href="/admin/habitaciones/actualizarH.php"<?php echo $habitaciom['id_habitacion'];?> >actualizar</a>
        </td>
        <?php }?>
     </tr>
    </table>
<a href="../../gestionH.php">Regresar</a>
</body>
</html>