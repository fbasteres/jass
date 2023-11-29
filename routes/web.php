<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jass\TaxpayersController;
use App\Http\Controllers\Componentes\TipoServicioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})-> name ('dashboard');

Route::get('/componentes', function () {
    return view('pages.utilitarios');
})-> name ('componentes');

Route::resource('contribuyentes', TaxpayersController::class) -> names ('admin.contribuyentes');
Route::resource('componentes/tiposervicio', TipoServicioController::class) -> names ('admin.tiposervicio');

