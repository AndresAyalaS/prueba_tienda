<?php include("../conexion/conexion.php") ?>

<?php include("../includes/header.php") ?>

<div class="row">

    <div class="col l7 offset-l5" style="position: absolute; top: 12%; padding-left: 50px">

        <table class="table table-dark">
            <h2>Lista de Grupos</h2>
            <div style="padding-bottom: 12px;">

                <a type="button" class="btn btn-success" href="form-grupos.php">Agregar grupo</a>
            </div>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th style="text-align: center">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $query = "SELECT * FROM grupo_producto";
                $grupos = mysqli_query($conexion, $query);

                while ($row = mysqli_fetch_array($grupos)) { ?>
                    <tr>
                        <td><?php echo $row['id_grup'] ?></td>
                        <td><?php echo $row['codigo_grup'] ?></td>
                        <td><?php echo $row['nombre_grup'] ?></td>
                        <td style="text-align: center">
                            <a href="edit-grupo.php?id_grup=<?php echo $row['id_grup'] ?>" class="btn btn-info">Editar</a>
                            <a href="eliminar-grup.php?id_grup=<?php echo $row['id_grup'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>


<?php include("../includes/footer.php") ?>