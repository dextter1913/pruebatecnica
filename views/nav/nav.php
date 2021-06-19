<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="?modulos=cv" title="Hoja de Vida">Bienvenido <?= $_SESSION['logeado'];?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="?modulos=ver">Ver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="?modulos=crear">Crear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="?modulos=tiempos">Tiempos</a>
                </li>
            </ul>
            <a href="?modulos=matar" class="nav-link"><button class="btn btn-outline-danger btn-sm d-flex"><i>Matar session</i></button></a>
        </div>
    </div>
</nav>