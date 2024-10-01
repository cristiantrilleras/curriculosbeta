@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Microcurriculo</h1>
    <form action="{{ route('microcurriculos.update', $microcurriculo->id_microcurriculo) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_curso">Nombre del Curso</label>
            <input type="text" name="nombre_curso" id="nombre_curso" class="form-control" value="{{ $microcurriculo->nombre_curso }}" required>
        </div>
        <div class="form-group">
            <label for="idioma">Idioma</label>
            <input type="text" name="idioma" id="idioma" class="form-control" value="{{ $microcurriculo->idioma }}" required>
        </div>
        <!-- Añade más campos según tus necesidades -->
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
