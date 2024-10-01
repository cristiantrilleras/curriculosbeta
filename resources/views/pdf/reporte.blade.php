<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Identificación</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        .content { margin: 20px; }
        .section { margin-bottom: 20px; }
        .label { font-weight: bold; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Reporte de Identificación</h1>
    </div>

    <div class="content">
        <div class="section">
            <div class="label">Facultad:</div>
            <div>{{ $facultad }}</div>
        </div>

        <div class="section">
            <div class="label">Programa:</div>
            <div>{{ $programa }}</div>
        </div>

        <div class="section">
            <div class="label">Nombre del Curso:</div>
            <div>{{ $nombre_curso }}</div>
        </div>

        <div class="section">
            <div class="label">Elaborado por:</div>
            <div>{{ $elaborado_por }}</div>
        </div>

        <div class="section">
            <div class="label">Fecha última actualización:</div>
            <div>{{ $fecha_ultima_actualizacion }}</div>
        </div>

        <div class="section">
            <div class="label">Fecha aprobación del Comité Curricular:</div>
            <div>{{ $fecha_aprobacion_comite_curricular }}</div>
        </div>

        <div class="section">
            <div class="label">Idioma:</div>
            <div>{{ $idioma }}</div>
        </div>

        <div class="section">
            <div class="label">Código:</div>
            <div>{{ $codigo }}</div>
        </div>

        <div class="section">
            <div class="label">Acta de aprobación del Consejo de Facultad:</div>
            <div>{{ $acta_aprobacion_consejo_facultad }}</div>
        </div>
    </div>
</body>
</html>
