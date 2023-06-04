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
    <title>Document</title>
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
    
</body>
</html>