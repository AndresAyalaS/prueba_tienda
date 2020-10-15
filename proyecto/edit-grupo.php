<?php

include("../conexion/conexion.php");

if (isset($_GET['id_grup'])) {
    $id_grup = $_GET['id_grup'];
    $query = "SELECT * FROM grupo_producto WHERE id_grup = $id_grup";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $codigo_grup = $row['codigo_grup'];
        $nombre_grup = $row['nombre_grup'];
    }
}

if (isset($_POST['edit'])) {
    $id_grup = $_GET['id_grup'];
    $codigo_grup = $_POST['codigo_grup'];
    $nombre_grup = $_POST['nombre_grup'];


    $query = "UPDATE grupo_producto set codigo_grup = '$codigo_grup', nombre_grup = '$nombre_grup' WHERE id_grup = $id_grup";
    mysqli_query($conexion, $query);

    header("Location: list-grupos.php");
}

?>

<?php include("../includes/header.php") ?>

<div class="row">
    <div class="col-md-12" style="position: absolute; top: 12%; padding-left: 33px; background: orange; padding-bottom: 12px;">

        <h2>Editar Grupo</h2>

        <form action="edit-grupo.php?id_grup=<?php echo $_GET['id_grup']; ?>" method="POST">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="codigo_prod">Código</label>
                        <input type="text" class="form-control" name="codigo_grup" value="<?php echo $codigo_grup ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre_grup" value="<?php echo $nombre_grup ?>" required>
                    </div>

                </div>
                <div style="padding-top: 12px; text-align: end;">
                    <button type="submit" class="btn btn-success" name="edit">Actualizar</button>
                </div>
            </div>

        </form>
    </div>

</div>


<?php include("../includes/footer.php") ?>