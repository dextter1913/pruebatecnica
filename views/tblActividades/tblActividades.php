    <div class="container">
        <div class="row table-responsive shadow p-3 mb-5 bg-body text-center">
        <h1 class="Actividades">Actividades</h1>
            <table class="table table-hover rounded border">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Actividad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($resultado)) :
                    ?>
                        <tr>
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
        </div>
    </div>