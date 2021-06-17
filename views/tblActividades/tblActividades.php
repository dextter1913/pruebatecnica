    <div class="container">
        <div class="row table-responsive shadow p-3 mb-5 bg-body">
            <table class="table table-hover text-center rounded border">
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