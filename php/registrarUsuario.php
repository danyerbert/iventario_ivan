<?php

require 'conexion.php';

$valido['success']=array('success', false, 'mensaje'=>"");

if ($_POST) {
    $usuario = $_POST['usuario'];
    if ($usuario == '') {
        $valido['success']=false;
        $valido['mensaje']="Ingrese correctamente los datos";
    }
    $password = $_POST['password'];

    if ($password == '') {
        $valido['success']=false;
        $valido['mensaje']="Ingrese correctamente los datos";
    }

    $sqlValidation = "SELECT usuario FROM usuario WHERE usuario = '$usuario'";
    $resultadoValidation = $mysqli->query($sqlValidation);

    $num = $resultadoValidation->num_rows;

    if ($num > 0) {
        $valido['success']=false;
        $valido['mensaje']="Usuario ya registrado";
    }else {
        $sqlRegister = "INSERT INTO usuario (id_usuario, usuario, password) VALUES (NULL, '$usuario', '$password')";
        $resultadoRegister = $mysqli->query($sqlRegister);

        if ($resultadoRegister === true) {
            # code...
            $valido['success']=true;
            $valido['mensaje']="Registro Realizado con exito";
        }else {
            $valido['success']=false;
            $valido['mensaje']="No se realizo el registro";
        }
    }
}

echo json_encode($valido);




?>