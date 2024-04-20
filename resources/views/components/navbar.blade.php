<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Sistema de Control Escolar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Aquí puedes agregar enlaces adicionales para tu navbar si lo deseas -->
            </ul>
            <form class="d-flex" method="POST" action="{{ route('login') }}">
                @csrf
                <input class="form-control me-2" type="email" name="email" placeholder="Correo electrónico" aria-label="Correo electrónico">
                <input class="form-control me-2" type="password" name="password" placeholder="Contraseña" aria-label="Contraseña">
                <button class="btn btn-outline-success me-2" type="submit">Iniciar sesión</button>
                <a href="{{ route('welcome') }}" class="btn btn-outline-primary">Volver al inicio</a>
            </form>            
        </div>
    </div>
</nav>
