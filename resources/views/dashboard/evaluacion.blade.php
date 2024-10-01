@extends('layouts.app')

@section('title', 'Evaluación')

@section('content')
    <form action="{{ route('evaluacion') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="resultados_aprendizaje">Resultados de Aprendizaje</label>
            <textarea name="resultados_aprendizaje" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="mecanismos_evaluacion">Mecanismos de Evaluación</label>
            <textarea name="mecanismos_evaluacion" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="instrumentos_evaluacion">Instrumentos de Evaluación</label>
            <textarea name="instrumentos_evaluacion" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Siguiente</button>
        <button type="button" class="btn btn-secondary" onclick="history.back()">Volver</button>

    </form>
@stop
