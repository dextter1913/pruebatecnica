<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="?modulos=ver">Bienvenido <?= $_SESSION['logeado'];?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="?modulos=ver">Ver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?modulos=crear">Crear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?modulos=tiempos">Tiempos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>