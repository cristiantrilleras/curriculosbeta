@extends('layouts.app')

@section('title', 'Perfil Docente')

@section('content')
    <form action="{{ route('perfil-docente') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="perfil_docente">Perfil del Docente</label>
            <textarea name="perfil_docente" class="form-control" required rows="5" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Finalizar</button>
        <button type="button" class="btn btn-secondary" onclick="history.back()">Volver</button>

    </form>
@stop
