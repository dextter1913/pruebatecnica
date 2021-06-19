<div class="container-fluid text-center">
    <div class="row">
        <div class="col-12 col-sm-2 col-md-2 col-lg-1"></div>
        <div class="col-12 col-sm-8 col-md-8 col-lg-10 table-responsive shadow p-3 mb-5 bg-body rounded">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            iD
                        </th>
                        <th>
                            Fecha
                        </th>
                        <th>
                            Cantidad Horas
                        </th>
                        <th>
                            Empleado
                        </th>
                        <th>
                            Actividad
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($rows = mysqli_fetch_array($consulta)) :
                    ?>
                        <tr>
                            <td>
                            <?= $rows['idtiempo'] ?>
                            </td>
                            <td>
                            <?= $rows['fecTiempos'] ?>
                            </td>
                            <td>
                            <?= $rows['cantHoras'] ?>
                            </td>
                            <td>
                            <?= $rows['user'] ?>
                            </td>
                            <td>
                            <?= $rows['idActividad'] ?>
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
        </div>
        <div class="col-12 col-sm-2 col-md-2 col-lg-1"></div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <h4>
            <?php
            if (isset($_SESSION['Error'])) {
                print $_SESSION['Error'];
                unset($_SESSION['Error']);
            }
            ?>
        </h4>
    </div>
</div>