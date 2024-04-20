<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Agrega enlaces a tus estilos CSS aquí si los tienes -->
</head>
<body>

    <!-- Navbar -->
    <x-navbar />

    <div class="container mt-4">
        <h1>Panel de Administrador</h1>

        <!-- Alumnos -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Gestión de Alumnos</h2>
                @include('administradores.components.alumnos')
            </div>
        </div>

        <!-- Profesores -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Gestión de Profesores</h2>
                @include('administradores.components.profesores')
            </div>
        </div>

        <!-- Lista de Materias -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Lista de Materias</h2>
                @include('administradores.components.materias')
            </div>
        </div>

        <!-- Grupos -->
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Gestión de Grupos</h2>
                @include('administradores.components.grupos')
            </div>
        </div>
    </div>

    <!-- Agrega enlaces a tus scripts JS aquí si los tienes -->

    <!-- Enlaces a Bootstrap JS y jQuery (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
