<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identificacion;
use PDF;

class PDFController extends Controller
{
    public function generarPDF($id)
    {
        $identificacion = Identificacion::findOrFail($id);

        $data = [
            'facultad' => $identificacion->facultad,
            'programa' => $identificacion->programa,
            'nombre_curso' => $identificacion->nombre_curso,
            'elaborado_por' => $identificacion->elaborado_por,
            'fecha_ultima_actualizacion' => $identificacion->fecha_ultima_actualizacion,
            'fecha_aprobacion_comite_curricular' => $identificacion->fecha_aprobacion_comite_curricular,
            'idioma' => $identificacion->idioma,
            'codigo' => $identificacion->codigo,
            'acta_aprobacion_consejo_facultad' => $identificacion->acta_aprobacion_consejo_facultad,
        ];

        $pdf = PDF::loadView('pdf.reporte', $data);

        return $pdf->download('reporte.pdf');
    }
}
