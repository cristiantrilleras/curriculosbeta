<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Microcurriculo;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function identificacion()
    {
        return view('dashboard.identificacion');
    }

    public function storeIdentificacion(Request $request)
    {
        // Guardar datos de identificación
        return redirect()->route('propositos-formativos');
    }

    public function propositosFormativos()
    {
        return view('dashboard.propositos-formativos');
    }

    public function storePropositosFormativos(Request $request)
    {
        // Guardar datos de propósitos formativos
        return redirect()->route('competencias');
    }

    public function competencias()
    {
        return view('dashboard.competencias');
    }

    public function storeCompetencias(Request $request)
    {
        // Guardar datos de competencias
        return redirect()->route('plan-tematico');
    }

    public function planTematico()
    {
        return view('dashboard.plan-tematico');
    }

    public function storePlanTematico(Request $request)
    {
        // Guardar datos de plan temático
        return redirect()->route('evaluacion');
    }

    public function evaluacion()
    {
        return view('dashboard.evaluacion');
    }

    public function storeEvaluacion(Request $request)
    {
        // Guardar datos de evaluación
        return redirect()->route('perfil-docente');
    }

    public function perfilDocente()
    {
        return view('dashboard.perfil-docente');
    }

    public function storePerfilDocente(Request $request)
    {
        // Guardar datos de perfil docente
        return redirect()->route('dashboard');
    }
}
