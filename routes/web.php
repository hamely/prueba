<?php

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
    return view('login');
});

Route::get('/administracion', function () {
    return view('admin/inicio/index');
});

/*Route::get('/', function () {
    return view('login');
});*/

Route::get('/modulos', function () { 
    return view('index');
});



Route::resource('sancion', 'SancionController'); //LLAMAR AL CONTROLADOR TypesanctionController
Route::resource('comision','ComisionController');
Route::resource('persona','PersonaController');
Route::post('search/persona','PersonaController@search')->name('searchPersona');
Route::post('search/personaCip','PersonaController@searchCipPersona')->name('searchPersonaCip');
Route::get('/selectListadoUnidadLaboral','PersonaController@listarUnidadLaboral');

Route::resource('cargo','CargoController');

Route::resource('grado','GradoController');

Route::resource('asignarcomision','ProcesoComisionController');
Route::get('selectListadoComision/{estado?}','ProcesoComisionController@selectListadoPorComisionEstado')->name('selectListadoComision');
Route::post('insertComision','ProcesoComisionController@asignarComision')->name('insertComision');

Route::resource('personagrado','ProcesoPersonaGrado');

Route::resource('personacargo','ProcesoPersonaCargo');
Route::get('historialpersonacargo/{id}','ProcesoPersonaCargo@pdfhistorialpersonacargo')->name('historialpersonacargo');

Route::resource('personaunidad','ProcesoPersonaUnidad');


Route::resource('licencia','LicenciaController');
Route::resource('ubigeo','UbigeoController');
Route::post('list/provincia','UbigeoController@provincia')->name('listProvincia');
Route::post('list/distrito','UbigeoController@distrito')->name('listDistrito');

Route::get('papeletacomision/{id?}', 'ProcesoComisionController@pdfpapeletacomision')->name('papeletacomision');
Route::get('historialpersonacomision/{id?}','ProcesoComisionController@pdfhistorialpersonacomision')->name('historialpersonacomision');
Route::get('comisionporunidad','ProcesoComisionController@pdfcomisionporunidad')->name('comisionporunidad');
//Route::get('culminarcomision', 'ProcesoComisionController@culminarcomision')->name('culminarcomision');
Route::get('culminarcomision/{id?}', 'ProcesoComisionController@culminarcomision')->name('culminarcomision');
//Route::post('post/cargo','CargoController@asignar');
Route::post('terminarcomision/','ProcesoComisionController@terminarcomision')->name('terminarcomision');

Route::get('tags','PersonaController@buscar');

Route::get('login','Auth\LoginController@showLogForm');
Route::post('login','Auth\LoginController@login');
Route::get('logout','Auth\LoginController@logout');