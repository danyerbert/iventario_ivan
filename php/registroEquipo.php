<?php
    // include "./config/conexion.php";

    include "conexion.php";

    $valido['success']=array('success', false, 'mensaje'=>"");

    if ($_POST) {
        # Recepcion de datos para realizar el registro

        $planta = $_POST['planta'];
        $gcia = $_POST['gcia'];
        $direcionEncargada = $_POST['direcionEncargada'];
        $Nombres = $_POST['Nombres'];
        $Apellidos = $_POST['Apellidos'];
        $Cedula = $_POST['Cedula'];
        $Usuario = $_POST['Usuario'];
        $Cargo = $_POST['Cargo'];
        $tipo_de_equipo = $_POST['tipo_de_equipo'];
        $marca_equipo = $_POST['marca_equipo'];
        $modelo_equipo = $_POST['modelo_equipo'];
        $serial_equipo = $_POST['serial_equipo'];
        $monitor_marca = $_POST['monitor_marca'];
        $monitor_modelo = $_POST['monitor_modelo'];
        $serial_monitor = $_POST['serial_monitor'];
        $bien_nacional = $_POST['bien_nacional'];
        $serial_tecnologia = $_POST['serial_tecnologia'];
        $sistema_operativo = $_POST['sistema_operativo'];
        $disco_duro = $_POST['disco_duro'];
        $memoria_ram = $_POST['memoria_ram'];
        $nombre_de_equipo = $_POST['nombre_de_equipo'];
        $mac_de_equipo = $_POST['mac_de_equipo'];
        $observaciones = $_POST['observaciones'];
        $responsable_tecnico = $_POST['responsable_tecnico'];


        $sqlRegistro = "INSERT INTO equipo_invent (id_equipo, planta, gcia, gcia_div_dep, nombre, apellido, cedula, usuario, cargo, tipo_de_equipo, marca_equipo, modelo, serial_equipo, monitor_marca, monitor_modelo, serial_monitor, bien_nacional, serial_tecnologia, sistema_migrado, disco_duro, ram, nombre_de_equipo, mac_equipo, observaciones, tecnico_responsable) VALUES (NULL, '$planta','$gcia','$direcionEncargada','$Nombres','$Apellidos','$Cedula','$Usuario','$Cargo','$tipo_de_equipo','$marca_equipo','$modelo_equipo','$serial_equipo','$monitor_marca','$monitor_modelo','$serial_monitor','$bien_nacional','$serial_tecnologia','$sistema_operativo','$disco_duro','$memoria_ram','$nombre_de_equipo','$mac_de_equipo','$observaciones','$responsable_tecnico')";
        $resultado = $mysqli->query($sqlRegistro);

        if ($resultado === true) {
            $valido['success']=true;
            $valido['mensaje']="Se realizo el registro";
        }else {
            $valido['success']=false;
            $valido['mensaje']="No se realizo el registro";    
        }
    }else {
        $valido['success']=false;
        $valido['mensaje']="No se enviaron datos";
    }


echo json_encode($valido);
?>