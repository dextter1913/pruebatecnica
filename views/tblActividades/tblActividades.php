    <div class="container">
        <div class="row table-responsive shadow p-3 mb-5 bg-body text-center">
            <h1 class="Actividades">Actividades</h1>
            <table class="table table-hover rounded border">
                <thead>
                    <tr>
                        <th>Seleccionar</th>
                        <th>ID</th>
                        <th>Actividad</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="index.php?modulos=tiempos" method="post">
                        <?php
                        while ($row = mysqli_fetch_assoc($resultado)) :
                        ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="id[]" class="form-check-input" value="<?= $row['idActividad'] ?>">
                                </td>
                                <td>
                                    <?= $row['idActividad'] ?>
                                </td>
                                <td>
                                    <?= $row['descripcionActividad'] ?>
                                </td>
                            </tr>
                        <?php
                        endwhile;
                        ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6"><br/>
                <h3>Registro de horas</h3>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                <label for="fecha">Ingrese Fecha</label>
                <input type="date" name="fecha" class="form-control" id="fecha">
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                <label for="horas">Horas</label>
                <input type="number" name="horas" id="horas" class="form-control"><br />
                <input type="submit" value="Ingresar" class="btn btn-outline-secondary btn-sm">
            </div>
            </form>
        </div>
    </div>