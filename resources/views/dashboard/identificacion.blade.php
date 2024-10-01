@extends('layouts.app')

@section('title', 'Identificación')

@section('content')
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('identificacion.store') }}" method="POST" class="row g-3">
            @csrf

            <div class="col-md-6 mb-3">
                <label for="facultad" class="form-label">Facultad</label>
                <select name="facultad" id="facultad" class="form-select" required>
                    <option value="" selected disabled>Seleccione una facultad</option>
                    <option value="facultad1">Facultad 1</option>
                    <option value="facultad2">Facultad 2</option>
                    <option value="facultad3">Facultad 3</option>
                </select>
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="programa" class="form-label">Programa</label>
                <select name="programa" id="programa" class="form-select" required>
                    <option value="" selected disabled>Seleccione un programa</option>
                    <option value="programa1">Programa 1</option>
                    <option value="programa2">Programa 2</option>
                    <option value="programa3">Programa 3</option>
                </select>
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="nombre_curso" class="form-label">Nombre del Curso</label>
                <input type="text" name="nombre_curso" id="nombre_curso" class="form-control" required>
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="elaborado_por" class="form-label">Elaborado por</label>
                <input type="text" name="elaborado_por" id="elaborado_por" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="fecha_ultima_actualizacion" class="form-label">Fecha última actualización</label>
                <input type="date" name="fecha_ultima_actualizacion" id="fecha_ultima_actualizacion" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="fecha_aprobacion_comite_curricular" class="form-label">Fecha aprobación del Comité Curricular</label>
                <input type="date" name="fecha_aprobacion_comite_curricular" id="fecha_aprobacion_comite_curricular" class="form-control" required>
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="idioma" class="form-label">Idioma</label>
                <select name="idioma" id="idioma" class="form-select" required>
                    <option value="" selected disabled>Seleccione un idioma</option>
                    <option value="espanol">Español</option>
                    <option value="ingles">Inglés</option>
                    <option value="frances">Francés</option>
                </select>
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" name="codigo" id="codigo" class="form-control" required>
            </div>

            <div class="col-md-12 mb-3">
                <label for="acta_aprobacion_consejo_facultad" class="form-label">Acta de aprobación del Consejo de Facultad</label>
                <textarea name="acta_aprobacion_consejo_facultad" id="acta_aprobacion_consejo_facultad" class="form-control" rows="3" required></textarea>
            </div>
            
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-primary">Siguiente</button>
            </div>       
        </form>
    </div>
@stop
