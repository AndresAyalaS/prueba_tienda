<?php

session_start();

$servidor="localhost";
$usuario="root";
$contraseña="";
$bd="tienda";

$conexion=mysqli_connect($servidor, $usuario, $contraseña, $bd);
