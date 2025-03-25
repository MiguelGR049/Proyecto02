<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" id="navbar_brand">Lista Animes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><i class="fa-regular fa-user"></i>Animes</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a id="home" class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i> Home</a>
                    </li>
                    <li id="item_genero" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Genero
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" id="genero">
                            <li><a class="dropdown-item" href="#" data-genero="action">Acción</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="adventure">Aventura</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="comedy">Comedia</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="drama">Drama</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="fantasy">Fantasía</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="romance">Romance</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="sci-fi">Ciencia Ficción</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="horror">Horror</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="mystery">Misterio</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="slice-of-life">Slice of Life</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="shonen">Shonen</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="shoujo">Shoujo</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="seinen">Seinen</a></li>
                            <li><a class="dropdown-item" href="#" data-genero="josei">Josei</a></li>
                        </ul>
                    </li>
                    <li id="item_visto" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Visto
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" id="visto">
                            <li><a class="dropdown-item" href="#" data-visto="si">Si</a></li>
                            <li><a class="dropdown-item" href="#" data-visto="no">No</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex mt-2 mb-2" role="search">
                    <div class="input-group mb-3">
                        <input id="buscar" class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                        <button id="btn_buscar" class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item mb-2">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#agregarModal">
                            Agregar Anime
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-danger" id="btn_cerrar_sesion">Cerrar Sesion
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>