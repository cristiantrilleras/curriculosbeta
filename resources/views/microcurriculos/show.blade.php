@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Microcurriculo</h1>
    <div class="card">
        <div class="card-header">
            {{ $microcurriculo->nombre_curso }}
        </div>
        <div class="card-body">
            <p><strong>Idioma: </strong>{{ $microcurriculo->idioma }}</p>
            <!-- Añade más campos según tus necesidades -->
            <a href="{{ route('microcurriculos.edit', $microcurriculo->id_microcurriculo) }}" class="btn btn-warning">Editar</a>
        </div>
    </div>
</div>
@endsection
