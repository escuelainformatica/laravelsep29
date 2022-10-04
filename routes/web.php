<?php

use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::view('/404','404',[]);

Route::get('/cliente/{id}',function($id) {
    //$a=echo "hola";
    //$b=print "hola";
        return "el cliente $id";
    }
)->name('ruta1');
/*
Route::get('/producto',[
    ProductoController::class,'ejemplo']);
Route::get('/producto/listado',[
    ProductoController::class,'listado']);
Route::get('/producto/vista',[
    ProductoController::class,'vista']);
*/
Route::controller(ProductoController::class)->group(function () {
    Route::get('/producto', 'ejemplo');
    Route::get('/producto/listado', 'listado');
    Route::get('/producto/vista', 'vista');
});

Route::controller(CalculadoraController::class)->group(function () {
    Route::get('/calculadora/calcular', 'calcular');
});



Route::fallback(function() {
    return view("404");
});

Route::get('/', function () {
    $nombre="John Doe àaañññ<u>abc</u>";
    $paises=["chile","argentina","peru","bolivia"];
    $precio=500;
    $clavesecreta="2222";
    return view('welcome',[
        'name'=>$nombre,
        'paises'=>$paises,
        'precio'=>$precio
    ]);
});
Route::get('/ejemplo',function(Request $request) {
    return "hola";
});

Route::redirect('/here', '/');
