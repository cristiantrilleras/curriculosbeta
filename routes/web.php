<?php
use App\Http\Controllers\MicrocurriculoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdentificacionController;
use App\Http\Controllers\PDFController;




// Hacer que la ruta raíz utilice el controlador y método de identificación


// Hacer que la ruta raíz utilice el controlador y método de identificación
Route::get('/', [DashboardController::class, 'identificacion'])->name('dashboard');
Route::get('/identificacion', [IdentificacionController::class, 'index'])->name('identificacion');
Route::post('/identificacion', [IdentificacionController::class, 'store'])->name('identificacion.store');

Route::get('/propositos-formativos', [DashboardController::class, 'propositosFormativos'])->name('propositos-formativos');
Route::get('/competencias', [DashboardController::class, 'competencias'])->name('competencias');
Route::get('/plan-tematico', [DashboardController::class, 'planTematico'])->name('plan-tematico');
Route::get('/evaluacion', [DashboardController::class, 'evaluacion'])->name('evaluacion');
Route::get('/perfil-docente', [DashboardController::class, 'perfilDocente'])->name('perfil-docente');

Route::get('/login', function () {
    return view('login');
})->name('login');

// controlador pdf
Route::get('/generar-pdf/{id}', [PDFController::class, 'generarPDF'])->name('generar.pdf');