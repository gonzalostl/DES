<?php

use App\Http\Controllers\PantalonController;
use Illuminate\Support\Facades\Route;

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

Route::get('/buenosdias', function () {
    return "Tenga usted";
});

Route::get('/cargarPantalon/{idPantalon}', [PantalonController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
