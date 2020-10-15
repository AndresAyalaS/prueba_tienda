<?php include("../conexion/conexion.php") ?>

<?php include("../includes/header.php") ?>

<div class="row">

    <div class="col l7 offset-l5" style="position: absolute; top: 12%; padding-left: 50px">

        <h2>Lista de productos</h2>
        <div style="padding-bottom: 12px;">
            <a type="button" class="btn btn-success" href="form-productos.php">Agregar producto</a>
        </div>

        <table class="table table-dark">
            <thead>
                <th>Código</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Fecha</th>
                <th>Grupo</th>
                <th style="text-align: center">Acciones</th>
            </thead>

            <tbody>
                <?php
                $query = "SELECT p.codigo_prod, p.id_prod, p.nombre, p.precio, p.fecha, p.stock, p.descripcion, g.nombre_grup FROM productos p INNER JOIN grupo_producto g ON g.id_grup = p.id_grup ";
                $grupos = mysqli_query($conexion, $query);

                while ($row = mysqli_fetch_array($grupos)) { ?>
                    <tr>
                        <td><?php echo $row['codigo_prod'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['descripcion'] ?></td>
                        <td><?php echo $row['precio'] ?></td>
                        <td><?php echo $row['stock'] ?></td>
                        <td><?php echo $row['fecha'] ?></td>
                        <td><?php echo $row['nombre_grup'] ?></td>
                        <td style="text-align: center">
                            <a href="edit-producto.php?id_prod=<?php echo $row['id_prod'] ?>" class="btn btn-info">Editar</a>
                            <a href="eliminar-prod.php?id_prod=<?php echo $row['id_prod'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>


<?php include("../includes/footer.php") ?>