<?php 
require '../../includes/database.php';


$codigo_actualizar = $_GET['documento'];
$codigo_actualizar = filter_var($codigo_actualizar, FILTER_VALIDATE_INT);

if(!$codigo_actualizar){
    header('../../index.php');
}

$bd = conectar_db();

$consulta_cliente = "SELECT * FROM cliente WHERE documento = $codigo_actualizar";
$resultado = mysqli_query($bd, $consulta_cliente);
$cliente = mysqli_fetch_assoc($resultado);

$id = $cliente['documento'];
$primer_apellido = $cliente['primer_apellido'];
$segundo_apellido = $cliente['segundo_apellido'];
$primer_nombre = $cliente['primer_nombre'];
$segundo_nombre = $cliente['segundo_nombre'];
$correo = $cliente['email'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST['documento'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $correo = $_POST['email'];

    if(!$id){
        $errores[] = 'El número de identificación es obligatorio';
    }
    if(!$primer_apellido){
        $errores[] = 'El primer apellido es obligatorio';
    }
    if(!$correo){
        $errores[] = 'El correo es obligatorio';
    }
    
    if(empty($errores)){
    //Actualizar los datos a la BD
    
        $sql = "UPDATE cliente SET 
        documento = '$id',
        primer_apellido = '$primer_apellido',
        segundo_apellido = '$segundo_apellido',
        primer_nombre = '$primer_nombre',
        segundo_nombre = '$segundo_nombre',
        email = '$correo'
        WHERE documento = $codigo_actualizar";

        echo $sql;

        $resultado = mysqli_query($bd, $sql);

        if($resultado){
            //'El registro se ha actualizado correctamente';
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
<head>
    <link rel="stylesheet" href="../../estilos/estilos.css">
    
</head>
<div>
    <h3>Actualizar cliente</h3>

    <a href="../../index.php"><input type="button" id="regresar" name="regresar" value="Regresar"></a>

    <form class="formulario" method="POST">
        <fieldset>
            <legend>Datos</legend>
            <label for="documento">No. Identificación</label><br>
            <input type="text" id="documento" name="documento" value="<?php echo $id?>"><br>

            <label for="primer_apellido">Primer Apellido:</label><br>
            <input type="text" id="primer_apellido" name="primer_apellido" value="<?php echo $primer_apellido?>"><br>

            <label for="segundo_apellido">Segundo Apellido:</label><br>
            <input type="text" id="segundo_apellido" name="segundo_apellido" value="<?php echo $segundo_apellido?>"><br>

            <label for="primer_nombre">Primer Nombre:</label><br>
            <input type="text" id="primer_nombre" name="primer_nombre" value="<?php echo $primer_nombre?>"><br>

            <label for="segundo_nombre">segundo nombre:</label><br>
            <input type="text" id="segundo_nombre" name="segundo_nombre" value="<?php echo $segundo_nombre?>"><br>

            <label for="email">Correo electrónico:</label><br>
            <input type="mail" id="email" name="email" value="<?php echo $correo?>"><br>

            <input type="submit" id="enviar" name="enviar" value="Actualizar datos">
        </fieldset>
        
    </form>

</div>

