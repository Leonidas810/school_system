<!-- Componente de gestión de materias -->
<div class="container mt-4">
    <!-- Agregar Materia -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Agregar Materia:</h2>
            <form action="{{ route('materias.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Materia</button>
            </form>
        </div>
    </div>

    <!-- Lista de Materias -->
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Materias Registradas:</h2>
            <ul class="list-group">
                @foreach($materias as $materia)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $materia->name }}
                    <div>
                        <!-- Editar Materia -->
                        <form action="{{ route('materias.update', $materia) }}" method="post" class="d-inline">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $materia->name }}" required>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Guardar Cambios</button>
                        </form>

                        <!-- Eliminar Materia -->
                        <form action="{{ route('materias.destroy', $materia) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
