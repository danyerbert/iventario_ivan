<?php
require "php/conexion.php";
session_start();

//  Verificacion para el inicio de sesion.
if ($_POST) {
    $usuario = $_POST['usuario'];
    if ($usuario == '') {
        echo  "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El nombre de usuario no cumple con las caracteristicas establecidas.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('index.php');
              });
            });
        </script>";
    }
    $password = $_POST['password'];
    if ($password == '') {
        # code...
        echo  "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Las caracteristicas no cumplen con el formato preestablecido.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('index.php');
              });
            });
        </script>";
    }

    $sql = "SELECT id_usuario, password, usuario FROM usuario WHERE usuario='$usuario' ";
    $resultado = $mysqli->query($sql);

    $num = $resultado->num_rows;

    if ($num > 0) {
        $row = $resultado->fetch_assoc();
        $password_bd = $row['password'];
        if ($password_bd == $password) {
            $_SESSION['id_usuario'] = $row['id_usuario'];
            $_SESSION['usuario'] = $row['usuario'];
                header("Location: listadeequipo.php");
        } else {
             echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'La contraseña no coincide',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                      }).then(() => {

                        location.assign('index.php');

                      });
            });
                </script>";
        }
    } else {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El usuario no coincide',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                      }).then(() => {

                        location.assign('index.php');

                      });
            });
                </script>";
    }
}




?>