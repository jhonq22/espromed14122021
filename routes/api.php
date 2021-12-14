<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Users
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('profile', 'UserController@getAuthenticatedUser');
Route::put('usuarios_subir_foto/{$user_id}', 'UserController@ActualizarFoto');




//CRUD USERS
Route::resource('usuarios', 'UserController');
Route::resource('pacientes', 'PacientesController');
Route::resource('antecedentes_personales', 'AntecedentespersonalesController');
Route::resource('examen_fisico', 'ExamenfisicoController');
Route::resource('paraclinicos', 'ParaclinicosController');
Route::resource('categorizacion_riesgo_infeccion', 'CategorizacionriesgoinfeccionController');
Route::resource('proceso_aleatoriazacion', 'ProcesoaleatoriazacionController');
Route::resource('proceso_vacunacion', 'ProcesovacunacionController');


Route::get('pacientes/cedula/{cedula}', 'PacientesController@Pacientescedula');


//Route::get('antecedentes_personal/id/{paciente_id}', 'AntecedentespersonalesController@Pacientesid');


// importar excel
Route::post('import', 'InventarioController@import')->name('import');