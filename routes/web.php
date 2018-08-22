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
    return view('admin/inicio/index');
});

Route::get('/modulos', function () { 
    return view('index');
});
Route::get('/login', function () {
    return view('welcome');
});


Route::resource('sancion', 'SancionController'); //LLAMAR AL CONTROLADOR TypesanctionController
Route::resource('comision','ComisionController');
Route::resource('persona','PersonaController');
Route::post('search/persona','PersonaController@search')->name('searchPersona');
Route::post('search/personaCip','PersonaController@searchCipPersona')->name('searchPersonaCip');

Route::resource('cargo','CargoController');
Route::resource('grado','GradoController');
Route::resource('asignarcomision','ProcesoComisionController');
Route::post('insertComision','ProcesoComisionController@asignarComision')->name('insertComision');
Route::resource('personagrado','ProcesoPersonaGrado');
Route::resource('personacargo','ProcesoPersonaCargo');
Route::resource('personaunidadcargo','ProcesoPersonaUnidadCargoController');
Route::resource('unidad','UnidadController');
Route::resource('licencia','LicenciaController');
Route::resource('ubigeo','UbigeoController');
Route::post('list/provincia','UbigeoController@provincia')->name('listProvincia');
Route::post('list/distrito','UbigeoController@distrito')->name('listDistrito');

Route::get('papeletacomision', 'ProcesoComisionController@pdfpapeletacomision')->name('papeletacomision');
Route::get('culminarcomision', 'ProcesoComisionController@culminarcomision')->name('culminarcomision');

//Route::post('post/cargo','CargoController@asignar');

Route::get('tags','PersonaController@buscar');