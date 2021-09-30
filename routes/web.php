<?php

use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/agendamiento-citas', function () {
    return view('agendamiento');
})->name('agendamiento-citas')->middleware('auth');

Route::get('/historial-medico', function () {
    return view('historial-medico');
})->name('historial-medico')->middleware('auth');

Route::get('/tus-datos', function () {
    return view('tus-datos');
})->name('tus-datos')->middleware('auth');

// Después borraremos esto
Route::get('/admin', function () {
    return view('administrador');
})->name('admin')->middleware('auth');
// Después borraremos esto

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('medicos', MedicoController::class)->middleware('auth');
Route::get('recuperar-medicos', [MedicoController::class,'recuperarMedicos'])->middleware('auth');

Route::resource('pacientes', PacienteController::class)->middleware('auth');
Route::get('recuperar-pacientes', [PacienteController::class,'recuperarPacientes'])->middleware('auth');

