<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(0, 0, 0, 0.5);">
    <div class="container d-flex">
        <a class="navbar-brand" href="#">Mi Sitio</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <!--INGRESAR BUTTON-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ingresar
                    </a>
                    <div class="dropdown-menu dropdown-menu-start p-4" aria-labelledby="navbarDropdown" style="width: 400px;">
                        <form>
                            <div class="mb-4">
                                <label for="inputEmail" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="email@example.com">
                            </div>
                            <div class="mb-4">
                                <label for="inputPassword" class="form-label">Contraseña</label>
                                <input type="password" class="form-control form-control-lg" id="inputPassword" placeholder="Contraseña">
                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberCheck">
                                <label class="form-check-label" for="rememberCheck">Recordarme</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar sesión</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
