<?php

include("../conexion/conexion.php");

if (isset($_GET['id_grup'])) {
    $id_grup = $_GET['id_grup'];

    $query = "DELETE FROM grupo_producto WHERE id_grup = $id_grup";
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die ("NO se puede eliminar el grupo por que tiene productos asociados");
    }

    header("Location: list-grupos.php");
}

?>