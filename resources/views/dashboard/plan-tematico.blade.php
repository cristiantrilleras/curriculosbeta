@extends('layouts.app')

@section('title', 'Plan Temático')

@section('content')
    <form action="{{ route('plan-tematico') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre_plan_tematico">Nombre del Plan Temático</label>
            <input type="text" name="nombre_plan_tematico" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="plan_tematico">Plan Temático</label>
            <textarea name="plan_tematico" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="tipo_recurso">Tipo de Recurso</label>
            <select name="tipo_recurso" class="form-control" required>
                <option value="">Seleccione una opción</option>
                <option value="libro">Libro</option>
                <option value="articulo">Artículo</option>
                <option value="video">Video</option>
                <option value="otro">Otro</option>
            </select>
        </div>
        <br>
        <h3>Medios educativos</h3>
        <br>
        <div class="form-group">
            <label for="ubicacion_convenio">Ubicación</label>
            <input type="text" name="ubicacion_convenio" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ubicacion_convenio">Convenio</label>
            <input type="text" name="ubicacion_convenio" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="bibliografia">Bibliografía</label>
            <input type="text" name="bibliografia" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ubicacion">Ubicación</label>
            <input type="text" name="ubicacion" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Siguiente</button>
        <button type="button" class="btn btn-secondary" onclick="history.back()">Volver</button>
    </form>
@stop
