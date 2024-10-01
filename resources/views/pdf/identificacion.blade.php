<!-- resources/views/pdf/identificacion.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificación</title>
</head>
<body>
    <h1>Identificación</h1>
    <p><strong>Facultad:</strong> {{ $identificacion->facultad }}</p>
    <p><strong>Programa:</strong> {{ $identificacion->programa }}</p>
    <p><strong>Nombre del Curso:</strong> {{ $identificacion->nombre_curso }}</p>
    <p><strong>Elaborado por:</strong> {{ $identificacion->elaborado_por }}</p>
    <p><strong>Fecha última actualización:</strong> {{ $identificacion->fecha_ultima_actualizacion }}</p>
    <p><strong>Fecha aprobación del Comité Curricular:</strong> {{ $identificacion->fecha_aprobacion_comite_curricular }}</p>
    <p><strong>Idioma:</strong> {{ $identificacion->idioma }}</p>
    <p><strong>Código:</strong> {{ $identificacion->codigo }}</p>
    <p><strong>Acta de aprobación del Consejo de Facultad:</strong> {{ $identificacion->acta_aprobacion_consejo_facultad }}</p>
</body>
</html>
