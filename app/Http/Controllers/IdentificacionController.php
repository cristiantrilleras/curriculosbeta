<?php


// de esta manera sale la notificacion de que los datos quedan guardados pero no redirije a la siguiente seccion

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Identificacion;

// class IdentificacionController extends Controller
// {
//     // Método para mostrar la vista de identificación
//     public function index()
//     {
//         return view('dashboard.identificacion');
//     }

//     // Método para almacenar los datos de identificación
//     public function store(Request $request)
//     {
//         $request->validate([
//             'facultad' => 'required|string',
//             'programa' => 'required|string',
//             'nombre_curso' => 'required|string',
//             'elaborado_por' => 'required|string',
//             'fecha_ultima_actualizacion' => 'required|date',
//             'fecha_aprobacion_comite_curricular' => 'required|date',
//             'idioma' => 'required|string',
//             'codigo' => 'required|string',
//             'acta_aprobacion_consejo_facultad' => 'required|string',
//         ]);

//         Identificacion::create($request->all());

//         return redirect()->route('identificacion')->with('success', 'Datos guardados correctamente');
//     }
// }


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identificacion;
use PDF;

class IdentificacionController extends Controller
{
    // Método para mostrar la vista de identificación
    public function index()
    {
        return view('dashboard.identificacion');
    }

    // Método para almacenar los datos de identificación y generar el PDF
    public function store(Request $request)
    {
        $request->validate([
            'facultad' => 'required|string',
            'programa' => 'required|string',
            'nombre_curso' => 'required|string',
            'elaborado_por' => 'required|string',
            'fecha_ultima_actualizacion' => 'required|date',
            'fecha_aprobacion_comite_curricular' => 'required|date',
            'idioma' => 'required|string',
            'codigo' => 'required|string',
            'acta_aprobacion_consejo_facultad' => 'required|string',
        ]);

        $identificacion = Identificacion::create($request->all());

        // Generar el PDF
        $pdf = PDF::loadView('pdf.identificacion', compact('identificacion'));

        return $pdf->download('identificacion.pdf');
    }
}

