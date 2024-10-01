<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @stack('styles')
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .content-wrapper {
            flex: 1;
            display: flex;
            padding: 20px;
        }
        .main-content {
            flex: 1;
            padding-right: 320px; /* Espacio para la sección de ayuda */
        }
        .help-section {
            position: fixed;
            right: 0;
            top: 0;
            width: 300px; /* Ajusta el ancho según sea necesario */
            height: 100%;
            background-color: #f9f577; /* Color de fondo más suave */
            padding: 20px;
            overflow-y: auto;
            border-left: 1px solid #dee2e6;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1); /* Sombra sutil */
            font-size: 0.9rem; /* Tamaño de fuente más pequeño */
            /* color: white; */
        }
        .help-section h5 {
            font-weight: bold;
            margin-bottom: 10px;
            /* color: #343a40; */
             /* Color del encabezado */
        }
        .help-section ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        .help-section ul li {
            margin-bottom: 10px;
        }
        .breadcrumb {
            background: none;
            padding: 0;
            margin-bottom: 1rem;
            font-size: 0.9rem; /* Tamaño de fuente más pequeño */
        }
        .breadcrumb-item + .breadcrumb-item::before {
            content: ">";
            padding: 0 0.5rem;
            color: #6c757d;
        }
        .breadcrumb-item.active {
            color: green; /* Color del texto activo */
            font-weight: bold;
        }
        .progress-container {
            position: relative;
            height: 5px;
            background-color: #e9ecef;
            border-radius: 3px;
            margin-top: 10px;
        }
        .progress-bar {
            height: 100%;
            background-color: #28a745; /* Color verde para el progreso */
            border-radius: 3px;
            transition: width 0.4s ease;
        }
        .nav-link.active {
            background-color: #28a745; /* Color verde para el ítem activo */
            color: #fff;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('partials.sidebar')
        <div class="content-wrapper">
            <div class="main-content">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('identificacion') }}">Identificación</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Formulario</li>
                    </ol>
                    <div class="progress-container">
                        <div class="progress-bar" style="width: 20%;"></div> <!-- Ajusta el ancho según la sección actual -->
                    </div>
                </nav>
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>@yield('title')</h1>
                            </div>
                            <div class="col-sm-6 text-right">
                                <!-- Puede añadir algún botón o icono adicional aquí si es necesario -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content">
                    @yield('content')
                </section>
            </div>
            <div class="help-section">
                <!-- Contenido de la ayuda -->
                <h5>Ayuda</h5>
                <p>Aquí puedes poner cualquier información que consideres necesaria para asistir al usuario.</p>
                <ul>
                    <li>Facultad: Seleccione la facultad correspondiente.</li>
                    <li>Programa: Seleccione el programa académico.</li>
                    <li>Nombre del Curso: Ingrese el nombre del curso.</li>
                    <li>Elaborado por: Ingrese el nombre del responsable de la elaboración.</li>
                    <li>Fecha última actualización: Seleccione la fecha de la última actualización.</li>
                    <li>Fecha aprobación del Comité Curricular: Seleccione la fecha de aprobación.</li>
                    <li>Idioma: Seleccione el idioma del curso.</li>
                    <li>Código: Ingrese el código del curso.</li>
                    <li>Acta de aprobación del Consejo de Facultad: Ingrese el número de acta.</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    @stack('scripts')
</body>
</html>
