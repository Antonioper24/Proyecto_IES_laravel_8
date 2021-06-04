<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactoController;

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
})->name('index');

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

/* utilización de modelos y controladores para la zona administradores*/
Route::post('/administrador/autorizar', [AdministradorController::class, 'login'])->name('administrador.login');

Route::post('/administrador/insertar/administrador', [AdministradorController::class, 'store'])->name('administrador.store');

Route::post('/administrador/insertar/clientes', [ClienteController::class, 'store'])->name('cliente.store');

Route::post('/administrador/insertar/personal', [PersonalController::class, 'store'])->name('personal.store');

Route::post('/administrador/comprobaciones', [AdministradorController::class, 'index'])->name('administrador.index');

/* altas */
Route::get('/administrador/formulariocli',[ClienteController::class, 'index'] )->name('cliente.index');

Route::get('/administrador/formulariodoc', [PersonalController::class, 'index'])->name('personal.index');

Route::get('/adminstrador/formularioadmin', function () {
    return view('administrador.formadmin');
})->name('formadmin');

/* actualizaciones*/

Route::get('/administrador/actualizaciones', function () {
    return view('administrador.update');
})->name('update');

Route::post('/administador/edit', [AdministradorController::class, 'edit'])->name('administrador.edit');

Route::put('/administrador/update/administrador', [AdministradorController::class, 'update'])->name('administrador.update');

Route::put('/administrador/update/personal', [PersonalController::class, 'update'])->name('personal.update');

Route::put('/administrador/update/cliente', [ClienteController::class, 'update'])->name('cliente.update');

Route::post('/logout', [AdministradorController::class, 'logout'])->name('administrador.logout');

/* borrado*/
Route::get('/administrador/borrado', function () {
    return view('administrador.delete');
})->name('delete');

/* routa de consultas por administrador*/
Route::get('/administrador/consultas/citas', [ContactoController::class, 'index'])->name('contacto.index');

Route::get('/administrador/consultas/clientes', [ClienteController::class, 'show'])->name('cliente.show');

Route::put('/administrador/update/citas', [ContactoController::class, 'update'])->name('contacto.update');


/* route de la nuestros contactos*/
Route::get('/contacto', function () {
    return view('consulta.contactos');
})->name('contactos');

/* route de las citas */
Route::get('/citas', function () {
    return view('cliente.citas');
})->name('citas');

Route::post('/citas/solicitud', [ContactoController::class, 'store'])->name('contacto.store');

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




