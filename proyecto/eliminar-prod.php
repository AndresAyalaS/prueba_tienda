<?php

include("../conexion/conexion.php");

if (isset($_GET['id_prod'])) {
    $id_prod = $_GET['id_prod'];

    $query = "DELETE FROM productos WHERE id_prod = $id_prod";
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die ("fallo");
    }

    header("Location: index.php");
}

?>