<?php 
require '../../includes/database.php';

$eliminar = $_GET['documento'];
$eliminar = filter_var($eliminar, FILTER_VALIDATE_INT);

if(!$eliminar){
    header('../../index.php');
}

$bd = conectar_db();

    $sql = "DELETE FROM cliente WHERE documento = '$eliminar'";
    echo $sql;
    $resultado = mysqli_query($bd, $sql);

    if($resultado){
        header('location: ../../index.php');
    }