@extends('layouts.app')

@section('title', 'Propósitos Formativos')

@section('content')
    <form action="{{ route('propositos-formativos') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="competencias_graduado_asociadas_curso">Competencias del Graduado Asociadas al Curso</label>
            <textarea name="competencias_graduado_asociadas_curso" class="form-control" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="resultados_aprendizaje_graduado_asociados_curso">Resultados de Aprendizaje del Graduado que se Relacionan con el Curso</label>
            <textarea name="resultados_aprendizaje_graduado_asociados_curso" class="form-control" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="aporte_perfil_graduado">¿De qué manera el curso aportará al Perfil del Graduado?</label>
            <textarea name="aporte_perfil_graduado" class="form-control" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="competencia_principal_curso">Competencia Principal del Curso</label>
            <input type="text" name="competencia_principal_curso" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="resultados_aprendizaje_competencia_principal_curso">Resultados de Aprendizaje Asociados a la Competencia Principal del Curso</label>
            <textarea name="resultados_aprendizaje_competencia_principal_curso" class="form-control" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Siguiente</button>
        <button type="button" class="btn btn-secondary" onclick="history.back()">Volver</button>
    </form>
@stop
