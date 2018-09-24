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

Route::get('/modulocontrolpersonal', function()
{
    return view('admin/inicio/modulos/controlpersonal/index');
});

Route::get('/administracion', function () {
    return view('admin/inicio/index');
});

Route::get('/moduloperdidacarnet',function(){
    return view('admin/inicio/modulos/perdidacarnet/index');
});

Route::get('/modulodescansomedico',function(){
    return view('admin/inicio/modulos/descansomedico/index');
});

Route::get('modulolicencia',function(){
    return view('admin/inicio/modulos/licencia/index');
});

Route::get('modulomovimientopersonal',function(){
    return view('admin/inicio/modulos/movimientopersonal/index');
});

Route::get('modulovacaciones',function(){
    return view('admin/inicio/modulos/vacaciones/index');
});

Route::get('modulosancion',function(){
    return view('admin/inicio/modulos/sancion/index');
});

Route::get('modulocambiosituacion',function(){
    return view('admin/inicio/modulos/cambiosituacion/index');
});

Route::get('modulomantenimientoyusuarios', function(){
    return view('admin/inicio/modulos/mantenimientoyusuarios/index');
});
/*Route::get('/', function () {
    return view('login');
});*/


Route::get('/modulos','ModuloController@index');


Route::resource('sancion', 'SancionController'); //LLAMAR AL CONTROLADOR TypesanctionController
Route::resource('comision','ComisionController');
Route::resource('persona','PersonaController');
Route::post('search/persona','PersonaController@search')->name('searchPersona');
Route::post('search/personaCip','PersonaController@searchCipPersona')->name('searchPersonaCip');
Route::get('/selectListadoUnidadLaboral','PersonaController@listarUnidadLaboral');

Route::resource('cargo','CargoController');
Route::resource('grado','GradoController');
Route::resource('documento','DocumentoController');
Route::resource('movimiento','MovimientoController');
Route::resource('horario','HorarioController');
Route::resource('cip','CipController');
Route::resource('descanso','DescansoController');

Route::resource('personagrado','ProcesoPersonaGrado');

Route::resource('personacargo','ProcesoPersonaCargo');
Route::get('historialpersonacargo/{id}','ProcesoPersonaCargo@pdfhistorialpersonacargo')->name('historialpersonacargo');

Route::resource('personaunidad','ProcesoPersonaUnidad');

Route::resource('licencia','LicenciaController');
Route::resource('ubigeo','UbigeoController');
Route::post('list/provincia','UbigeoController@provincia')->name('listProvincia');
Route::post('list/distrito','UbigeoController@distrito')->name('listDistrito');

Route::resource('asignarcomision','ProcesoComisionController');
Route::get('selectListadoComision/{estado?}','ProcesoComisionController@selectListadoPorComisionEstado')->name('selectListadoComision');
Route::post('insertComision','ProcesoComisionController@asignarComision')->name('insertComision');

Route::get('papeletacomision/{id?}', 'ProcesoComisionController@pdfpapeletacomision')->name('papeletacomision');
Route::get('historialpersonacomision/{id?}','ProcesoComisionController@pdfhistorialpersonacomision')->name('historialpersonacomision');
Route::get('papeletareincorporacioncomision/{id?}','ProcesoComisionController@pdfpapeletareincorporacioncomision')->name('papeletareincorporacioncomision');
Route::get('comisionporunidad','ProcesoComisionController@pdfcomisionporunidad')->name('comisionporunidad');
Route::get('culminarcomision/{id?}', 'ProcesoComisionController@culminarcomision')->name('culminarcomision');
Route::post('terminarcomision/','ProcesoComisionController@terminarcomision')->name('terminarcomision');





Route::get('tags','PersonaController@buscar');

Route::resource('cambiosituacionpolicial','ProcesoSituacionPolicial');

Route::get('movimientoincluir','ProcesoMovimientoPersonal@movimientoincluir')->name('movimientoincluir');
Route::get('movimientoincluircreate','ProcesoMovimientoPersonal@movimientoincluircreate')->name('movimmovimientoincluircreate');
Route::post('insertMovimientoIncluir','ProcesoMovimientoPersonal@movimientoincluirinsertar')->name('insertMovimientoIncluir');
Route::get('reporteexcelmovimientoincluir','ProcesoMovimientoPersonal@excelmovimientoincluir')->name('reporteexcelmovimientoincluir');

Route::get('movimientoexcluir','ProcesoMovimientoPersonal@movimientoexcluir')->name('movimientoexcluir');
Route::get('movimientoexcluircreate','ProcesoMovimientoPersonal@movimientoexcluircreate')->name('movimientoexcluircreate');
Route::post('insertMovimientoExcluir','ProcesoMovimientoPersonal@movimientoexcluirinsertar')->name('insertMovimientoExcluir');
Route::get('reporteexcelmovimientoexcluir','ProcesoMovimientoPersonal@excelmovimientoexcluir')->name('reporteexcelmovimientoexcluir');

Route::get('movimientocambiounidad','ProcesoMovimientoPersonal@movimientocambiounidad')->name('movimientocambiounidad');
Route::get('movimientocambiounidadcreate','ProcesoMovimientoPersonal@movimientocambiounidadcreate')->name('movimientocambiounidadcreate');
Route::post('insertMovimientoCambioUnidad','ProcesoMovimientoPersonal@movimientocambiounidadinsertar')->name('insertMovimientoCambioUnidad');
Route::get('reporteexcelcambiounidad','ProcesoMovimientoPersonal@excelcambiounidad')->name('reporteexcelcambiounidad');

Route::get('movimientocambiocargo','ProcesoMovimientoPersonal@movimientocambiocargo')->name('movimientocambiocargo');
Route::get('movimientocambiocargocreate','ProcesoMovimientoPersonal@movimientocambiocargocreate')->name('movimientocambiocargocreate');
Route::post('insertMovimientoCambioCargo','ProcesoMovimientoPersonal@movimientocambiocargoinsertar')->name('insertMovimientoCambioCargo');

Route::get('movimientocambiosituacioncip','ProcesoMovimientoPersonal@movimientocambiosituacioncip')->name('movimientocambiosituacioncip');
Route::get('movimientocambiositucioncipcreate','ProcesoMovimientoPersonal@movimientocambiosituacioncipcreate')->name('movimientocambiositucioncipcreate');
Route::post('insertMovimientoCambioSituacionCip','ProcesoMovimientoPersonal@movimientocambiosituacioncipinsertar')->name('insertMovimientoCambioSituacionCip');

Route::get('movimientocambiohorario','ProcesoMovimientoPersonal@movimientocambiohorario')->name('movimientocambiohorario');
Route::get('movimientocambiohorariocreate','ProcesoMovimientoPersonal@movimientocambiohorariocreate')->name('movimientocambiohorariocreate');
Route::post('insertMovimientoCambioHorario','ProcesoMovimientoPersonal@movimientocambiohorarioinsert')->name('insertMovimientoCambioHorario');

Route::resource('controlardescansomedico','ProcesoDescansoMedicoController');
Route::get('insertAsignarDescansoMedico','ProcesoDescansoMedicoController@asignardescansomedicoinsert')->name('insertAsignarDescansoMedico');

Route::get('login','Auth\LoginController@showLogForm');
Route::post('login','Auth\LoginController@login');
Route::get('logout','Auth\LoginController@logout');

Route::Resource('usuario' , 'UsersController');