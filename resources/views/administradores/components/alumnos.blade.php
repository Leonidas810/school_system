<!-- Componente de gestión de profesores -->
<div class="container mt-4">
    <!-- Agregar Alumno -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Agregar Alumno:</h2>
            <form action="{{ route('alumnos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Alumno</button>
            </form>
        </div>
    </div>

    <!-- Lista de Alumnos -->
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Alumnos Registrados:</h2>
            <ul class="list-group">
                @foreach($alumnos as $alumno)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $alumno->user->name }} - {{ $alumno->user->email }}
                    <div>
                        <!-- Editar Alumno -->
                        <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <input type="text" id="name" name="name" value="{{ $alumno->user->name }}" class="form-control" required>
                            <input type="email" id="email" name="email" value="{{ $alumno->user->email }}" class="form-control mt-2" required>
                            <button type="submit" class="btn btn-sm btn-primary mt-2">Guardar Cambios</button>
                        </form>

                        <!-- Eliminar Alumno -->
                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger mt-2">Eliminar {{ $alumno->user->name }}</button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
