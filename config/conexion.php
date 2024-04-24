<?php

$mysqli = new mysqli("localhost", "root", "", "inventario_ivan");

// $mysqli = new mysqli("10.10.5.28", "sistema", "123456", "inventario_ivan");


if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);

}
?>
