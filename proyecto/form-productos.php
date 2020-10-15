<?php include("../conexion/conexion.php") ?>

<?php include("../includes/header.php") ?>

<div class="row">
    <div class="col-md-12" style="position: absolute; top: 12%; padding-left: 33px; background: orange; padding-bottom: 12px;">

        <h2>Agregar Producto</h2>

        <form action="control.php" method="POST" accept-charset="utf-8">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="codigo_prod">Código</label>
                        <input type="text" class="form-control" name="codigo_prod" value="" placeholder="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="" placeholder="" required>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" value="" placeholder="" required>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" name="precio" value="" placeholder="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" name="stock" value="" placeholder="" required>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" name="fecha" value="" placeholder="" required>
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
                    <button type="submit" class="btn btn-success" name="guardar_producto" value="Guardar">Guardar</button>
                </div>
            </div>

        </form>
    </div>
</div>

<?php include("../includes/footer.php") ?>