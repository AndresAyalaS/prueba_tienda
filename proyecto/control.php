<?php

include("../conexion/conexion.php");

if (isset($_POST['guardar_grupo'])) {

    $codigo_grup = $_POST['codigo_grup'];
    $nombre_grup = $_POST['nombre_grup'];

    $query = "INSERT INTO grupo_producto (codigo_grup, nombre_grup) values('$codigo_grup', '$nombre_grup')";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("fallo");
    }

    header("Location:list-grupos.php");
}

if (isset($_POST['guardar_producto'])) {

    $codigo_prod = $_POST['codigo_prod'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $fecha = $_POST['fecha'];
    $id_grup = $_POST['id_grup'];

    $query = "INSERT INTO productos (codigo_prod, nombre, descripcion, precio, stock, fecha, id_grup) 
    values('$codigo_prod', '$nombre', '$descripcion', '$precio', '$stock', '$fecha', '$id_grup')";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("fallo");
    }

    header("Location:index.php");
}


