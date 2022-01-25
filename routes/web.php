<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teste', function () {
    $teste = "coiso";
    return view('teste', ['nome' => $teste]);
});

Route::get('/testes/{id}', function ($id) {
    $teste = "coiso";
    return view('testeid', ['id' => $id]);
});
// parametro vira opcional com o simbolo ?
Route::get('/testesidnaoobr/{id?}', function ($id = null ) {
   
    return view('testeid', ['id' => $id]);
});

// parametro query string ?parametro=
// Route::get('/parametros/{id?}', function ($id = null ) {
    //     // $busca = request('search');// <-- pega a request
    //     // return view('busca', ['busca' => $busca]);
    //     //foi trasferido para a controler
    // });

// registrarndo controler
use App\Http\Controllers\EventController;
Route::get('/comcontroler', [EventController::class, 'index']);
Route::get('/events/create/', [EventController::class, 'create']);
