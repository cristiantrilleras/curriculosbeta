@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Microcurriculo</h1>
    <form action="{{ route('microcurriculos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre_curso">Nombre del Curso</label>
            <input type="text" name="nombre_curso" id="nombre_curso" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="idioma">Idioma</label>
            <input type="text" name="idioma" id="idioma" class="form-control" required>
        </div>
        <!-- Añade más campos según tus necesidades -->
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
