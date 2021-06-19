<div class="container">
    <div class="row text-center">
    <h1>Crear Actividad</h1>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 shadow p-3 mb-5 bg-body rounded">
            <form action="index.php?modulos=crear" method="post">
                <label for="nombreactividad" class="text-white">Nombre Actividad</label>
                <input type="text" name="nombreactividad" id="nombreactividad" class="form-control" placeholder="Nombre"><br/>
                <label for="actividad" class="text-white">Ingrese Actividad</label><br/>
                <textarea name="actividad" id="actividad" class="form-control" cols="30" rows="10" placeholder="Descripcion Actividad"></textarea><br/>
                <input type="submit" value="Ingresar" name="btnIngresarActividad" class="btn btn-outline-success btn-sm">
            </form>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
    </div>
</div>