@extends('layouts.app')

@section('title', 'Competencias')

@section('content')
    <form action="{{ route('competencias') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="competencias_especificas">Competencias Específicas</label>
            <textarea name="competencias_especificas" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="resultados_aprendizaje">Resultados de Aprendizaje</label>
            <textarea name="resultados_aprendizaje" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="competencias_genericas">Competencias Genéricas</label>
            <textarea name="competencias_genericas" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Siguiente</button>
        <button type="button" class="btn btn-secondary" onclick="history.back()">Volver</button>
    </form>
@stop
