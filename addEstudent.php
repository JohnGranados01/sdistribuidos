<?php
    // header('content');
    $id = $_POST['Identificacion'];
    $nombre = $_POST['full-name'];
    $edad = $_POST['Edad'];
    
    require_once './Conexion.php';

    $conexion = new Conexion;
    $sqlstr = "INSERT INTO estudiante VALUES($id,'$nombre',$edad)";
    $conexion->insercion($sqlstr);
?>