<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Models\producto;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/12', function () {
    return view('layouts');
});*/

Route::view('/', 'index')-> name('index');
Route::view('/alta', 'alta')-> name('alta');
//Route::view('/consulta', 'consulta')-> name('consulta');

Route::get('/productoin', [ProductoController::class,'index']) -> name('productos.index');
Route::get('/consultas/{id}/', [ProductoController::class,'show']) -> name('productos.show');
Route::post('/producto',[ProductoController::class,'store']) -> name('productos.store');
