<?php include("../includes/header.php") ?>

<div class="row">
    <div class="col-md-12" style="position: absolute; top: 12%; padding-left: 33px; background: orange; padding-bottom: 12px;">

        <h2>Agregar Grupo</h2>

        <form action="control.php" method="POST" accept-charset="utf-8">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="codigo_prod">Código</label>
                        <input type="text" class="form-control" name="codigo_grup" value="" placeholder="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre_grup" value="" placeholder="" required>
                    </div>

                </div>
                <div style="padding-top: 12px; text-align: end;">
                    <button type="submit" class="btn btn-success" name="guardar_grupo" value="Guardar">Guardar</button>
                </div>
            </div>

        </form>

    </div>

</div>


<?php include("../includes/footer.php") ?>