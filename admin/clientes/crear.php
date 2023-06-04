<?php 
require '../../includes/database.php';

$bd = conectar_db();

//El arreglo $errores nos guarda mensajes de error en caso de no escribir nada en el formulario
$errores =  [];

//echo '<pre>';
//if(($_SERVER['REQUEST_METHOD'])){
//echo '<pre>';
//var_dump(($_POST));
//}

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $documento = $_POST['documento'];
        $tipo_documento = $_POST['tipo_documento'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $primer_nombre = $_POST['primer_nombre'];
        $segundo_nombre = $_POST['segundo_nombre'];
        $primer_apellido = $_POST['primer_apellido'];
        $segundo_apellido = $_POST['segundo_apellido'];
        if(!$documento){
            $errores[] = 'cualquier cosa';
        };
        if(!$primer_nombre){
            $errores[]='el primer nombre es obligatorio';
        };
        if(!$primer_apellido){
            $errores[]='el primer apellido es obligatorio';
        };
        if(empty($errores)){
        //Insertar los datos a la BD
        //tomar pantallazo consulta sql
            $sql = "INSERT INTO cliente(documento,tipo_documento,email,telefono,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido) 
            VALUES ('$documento','$tipo_documento','$email','$telefono','$primer_nombre','$segundo_nombre','$primer_apellido', '$segundo_apellido')" ;

            echo $sql;

            $resultado = mysqli_query($bd, $sql);

            if($resultado){
                //'El registro se ha insertado correctamente';
                //Nos devolvemos a la página inicial
                header('location: ../../index.php');

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
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
<div>
    <p>Nuevo cliente</p>

    <a href="../../index.php">Regresar</a>

    <form class="formulario" method="POST" action="crear.php">
        <fieldset>
            <legend>Datos</legend>
            <label for="documento">Documento: </label><br>
            <input type="text" id="documento" name="documento"><br>
            <label for="tipo_documento">tipo de documento: </label><br>
            <input type="text" tipo='tipo_documento' name="tipo_documento"><br>
            <label for="email">Correo electrónico:</label><br>
            <input type="mail" id="email" name="email" ><br>
            <label for="telefono">Telefono: </label> <br>
            <input type="text" id="telefono" name="telefono"> <br>
            <label for="primero_nombre">Primer Nombre: </label> <br>
            <input type="text" id="primer_nombre" name="primer_nombre"> <br>
            <label for="segundo_nombre">Segundo Nombre:</label> <br>
            <input type="text" id="segundo_nombre" name="segundo_nombre"> <br>
            <label for="primer_apellido">Primer Apellido:</label><br>
            <input type="text" id="primer_apellido" name="primer_apellido"><br>
            <label for="segundo_apellido">Segundo Apellido:</label><br>
            <input type="text" id="segundo_apellido" name="segundo_apellido" ><br>
            <input type="submit" id="enviar" name="enviar" value="Enviar datos">
        </fieldset>
        
    </form>

</div>
</body>
</html>


