@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Microcurriculos</h1>
    <a href="{{ route('microcurriculos.create') }}" class="btn btn-primary mb-3">Crear Nuevo Microcurriculo</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Curso</th>
                <th>Idioma</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($microcurriculos as $microcurriculo)
            <tr>
                <td>{{ $microcurriculo->id_microcurriculo }}</td>
                <td>{{ $microcurriculo->nombre_curso }}</td>
                <td>{{ $microcurriculo->idioma }}</td>
                <td>
                    <a href="{{ route('microcurriculos.show', $microcurriculo->id_microcurriculo) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('microcurriculos.edit', $microcurriculo->id_microcurriculo) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('microcurriculos.destroy', $microcurriculo->id_microcurriculo) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
