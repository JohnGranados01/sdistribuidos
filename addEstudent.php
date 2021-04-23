<?php
    // header('content');
    $id = $_POST['Identificacion'];
    $nombre = $_POST['full-name'];
    $edad = $_POST['Edad'];
    
    require_once './Conexion.php';

    $conexion = new Conexion;
    $sqlstr = "INSERT INTO estudiante VALUES($id,'$nombre',$edad)";
    $result = $conexion->insercion($sqlstr);
    if($result['filas_afectadas']==-1){
        print_r($result);
    }else{
        echo 'Todo Bien, no hay Error!';
    }
?>