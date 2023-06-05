<?php
require '../../includes/database.php';

$bd=conectar_db();
$sql="SELECT * FROM CLIENTE";
$a=mysqli_query($bd,$sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar clientes</title>
</head>
<body>
    <table>
        <th>
            <tr>
                <td>documento</td>
                <td>tipo_documento</td>
                <td>email</td>
                <td>telefono</td>
                <td>primer_nombre</td>
                <td>segundo_nombre</td>
                <td>primer_apellido</td>
                <td>segundo_apellido</td>
                <td>estado</td>
            </tr>
        </th>
    </table>
    <?php while($cliente = mysqli_fetch_assoc($a)){?>
    <tr>
        <td> <?php echo $cliente['documento'];?> </td>
        <td> <?php echo $cliente['tipo_documento'];?> </td>
        <td> <?php echo $cliente['email'];?> </td>
        <td> <?php echo $cliente['telefono'];?> </td>
        <td> <?php echo $cliente['primer_nombre'];?> </td>
        <td> <?php echo $cliente['segundo_nombre'];?> </td>
        <td> <?php echo $cliente['primer_apellido'];?> </td>
        <td> <?php echo $cliente['segundo_apellido'];?> </td>
        <td> <?php echo $cliente['estado'];?> </td>
        <td>
            <a href="">eliminar</a>
            <a href="/admin/clientes/actualizar.php?id=<?php echo $cliente['documento'];?>">actualizar</a>
            <?php }?>
        </td>
    </tr>    
</body>
</html>