<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\AdministradorController;

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

/* nuestro route de inicio(Home)*/
Route::get('/', function () {
    return view('index');
});

/* Aparatado para la zona clientes*/
Route::get('/cliente', function () {
    return view('cliente.clientes');
})->name('clientes');

/* Routes de zona doctores*/

Route::get('/doctores', function () {
    return view('personal.doctores');
})->name('doctores');

/* utilización de modelos y controladores para la zona doctores*/
Route::post('/personal/credenciales', [PersonalController::class, 'index'])->name('credenciales');

Route::get('/personal/revision', function () {
    return view('personal.consultar');
})->name('revision');

Route::get('/personal/cerrar', function () {
    return view('personal.show');
})->name('cerrar');

/* Route para la zona administrador*/
Route::get('/administrador', function () {
    return view('administrador.administrador');
})->name('administrador');

/* utilización de modelos y controladores para la zona doctores*/
Route::post('/administrador/autorizar', [AdministradorController::class, 'index'])->name('autorizacion');

/* altas */
Route::get('/adminstrador/formulariocli', function () {
    return view('administrador.formularioCli');
})->name('formcliente');

Route::get('/adminstrador/formulariodoc', function () {
    return view('administrador.formdoctore');
})->name('formdoctor');

Route::get('/adminstrador/formularioadmin', function () {
    return view('administrador.formadmin');
})->name('formadmin');

/* actualizaciones*/

Route::get('/administrador/actualizaciones', function () {
    return view('administrador.update');
})->name('update');

/* borrado*/
Route::get('/administrador/borrado', function () {
    return view('administrador.delete');
})->name('delete');

/* route de la nuestros contactos*/
Route::get('/contacto', function () {
    return view('consulta.contactos');
})->name('contactos');

/* route de las citas */
Route::get('/citas', function () {
    return view('cliente.citas');
})->name('citas');

/* route de nuestras tratamientos*/
Route::get('/Endodoncia', function () {
    return view('endodoncias');
})->name('endodoncia');

/* tratamiento ortodoncia*/
Route::get('/Ortodoncia', function () {
    return view('ortodoncias');
})->name('ortodoncia');

/* tratamiento de la protesis*/
Route::get('/protesis', function () {
    return view('protesis');
})->name('protesis');

/* tratamiento de implante*/
Route::get('/Implante', function () {
    return view('implantes');
})->name('implantes');

/*tratamiento de las caries*/
Route::get('/Caries', function () {
    return view('caries');
})->name('caries');

/*tratamiento de estetica dental*/
Route::get('/Estetica', function () {
    return view('esteticas');
})->name('estetica');




