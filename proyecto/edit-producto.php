<?php

include("../conexion/conexion.php");

if (isset($_GET['id_prod'])) {
    $id_prod = $_GET['id_prod'];
    $query = "SELECT * FROM productos WHERE id_prod = $id_prod";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id_prod = $row['id_prod'];
        $codigo_prod = $row['codigo_prod'];
        $nombre = $row['nombre'];
        $descripcion = $row['descripcion'];
        $precio = $row['precio'];
        $stock = $row['stock'];
        $fecha = $row['fecha'];
        $id_grup = $row['id_grup'];
    }
}

if (isset($_POST['edit'])) {
    $id_prod = $_GET['id_prod'];
    $codigo_prod = $_POST['codigo_prod'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $fecha = $_POST['fecha'];
    $id_grup = $_POST['id_grup'];


    $query = "UPDATE productos set codigo_prod = '$codigo_prod', nombre = '$nombre', descripcion = '$descripcion', precio = '$precio', 
    stock = '$stock', fecha = '$fecha', id_grup = '$id_grup'  WHERE id_prod = $id_prod";
    mysqli_query($conexion, $query);

    header("Location:index.php");
}

?>

<?php include("../includes/header.php") ?>


<div class="row">
    <div class="col-md-12" style="position: absolute; top: 12%; padding-left: 33px; background: orange; padding-bottom: 12px;">

        <h2>Editar Producto</h2>

        <form action="edit-producto.php?id_prod=<?php echo $_GET['id_prod']; ?>" method="POST">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="codigo_prod">Código</label>
                        <input type="text" class="form-control" name="codigo_prod" value="<?php echo $codigo_prod ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>" required>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" value="<?php echo $descripcion ?>" required>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" name="precio" value="<?php echo $precio ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" name="stock" value="<?php echo $stock ?>" required>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" name="fecha" value="<?php echo $fecha ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="id_grup">Grupo</label>
                        <select class="form-control" name="id_grup" required>
                            <option value="" selected></option>
                            <?php
                            $query = "SELECT * FROM grupo_producto";
                            $grupos = mysqli_query($conexion, $query);

                            while ($row = mysqli_fetch_array($grupos)) { ?>
                                <option value="<?php echo $row['id_grup']; ?>"><?php echo $row['nombre_grup']; ?></option>
                            <?php } ?>

                        </select>
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