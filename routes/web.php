<?php

use App\Http\Controllers\AdmisionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TransparenciaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\ContactenosController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\TrabajeconNosotrosController;

Route::get('/', InicioController::class)-> name('inicio');
Route::get('/admision', AdmisionController::class)-> name('admision');
Route::get('/trabaje-con-nosotros', TrabajeconNosotrosController::class)-> name('trabajeconNosotros');
Route::get('/contactenos', ContactenosController::class)-> name('contactenos');

Route::controller(NosotrosController::class)->group(function () {
    Route::get('nosotros', 'nosotros')-> name('nosotros');
    Route::get('nosotros/bolsadeTrabajo', 'bolsadeTrabajo')-> name('bolsadeTrabajo');
    Route::get('nosotros/proyectos', 'proyectos')-> name('proyectos');
    Route::get('nosotros/autoridades', 'autoridades')-> name('autoridades');
    Route::get('nosotros/transparencia', 'transparencia')-> name('transparencia');
    Route::get('nosotros/titulacion', 'titulacion')-> name('titulacion');
    Route::get('nosotros/bienestar', 'bienestar')-> name('bienestar');
});

Route::controller(CarrerasController::class)->group(function () {
    Route::get('carreras', 'carreras') -> name('carreras');
    Route::get('carreras/tecnico-en-farmacia', 'Farmacia')-> name('farmacia');
    Route::get('carreras/tecnico-en-protesis-dental', 'protesisDental')-> name('protesisDental');
    Route::get('carreras/tecnico-en-fisioterapia-y-rehabilitacion','fisioterapiayRehabilitacion')-> name('fisioterapiayRehabilitacion');
    Route::get('carreras/tecnico-en-entrenamiento-deportivo','entrenamientoDeportivo')-> name('entrenamientoDeportivo');
    Route::get('carreras/tecnico-en-enfermeria','enfermeria')-> name('enfermeria');
    Route::get('carreras/tecnico-en-optometria','optometria')-> name('optometria');
});

Route::controller(TransparenciaController::class)->group(function () {
    Route::get('transparencia/academico', 'academico')->name('academico'); 
    Route::get('transparencia/acreditacion', 'acreditacion')-> name('acreditacion');
    Route::get('transparencia/reglamento', 'reglamento')-> name('reglamento');
    Route::get('transparencia/investigacion','investigacion')-> name('investigacion');
    Route::get('transparencia/personal','personal')-> name('personal');
    Route::get('transparencia/licenciamiento','licenciamiento')-> name('licenciamiento');
    Route::get('transparencia/documentos','documentos')-> name('documentos');
    Route::get('transparencia/becas','becas')-> name('becas');
    Route::get('transparencia/tasas','tasas')-> name('tasas');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('blog/razones', 'razones')->name('razones'); 
    Route::get('blog/OpenDaysalle', 'OpenDaysalle')-> name('OpenDaysalle');
    Route::get('blog/IngredientesInactivos', 'IngredientesInactivos')-> name('IngredientesInactivos');
    Route::get('blog/propiedadeslaqato', 'propiedadeslaqato')-> name('propiedadeslaqato');
    Route::get('blog/vinoAjenjo', 'vinoAjenjo')-> name('vinoAjenjo');
    Route::get('blog/jaleadeSabila', 'jaleadeSabila')-> name('jaleadeSabila');
    Route::get('blog/farmaceuticaFrutoseco', 'farmaceuticaFrutoseco')-> name('farmaceuticaFrutoseco');
    Route::get('blog/fabricaciondeoximielito', 'fabricaciondeoximielito')-> name('fabricaciondeoximielito');

});

Route::post('/contactenos/enviar', [ContactenosController::class, 'enviar'])->name('contactenos.enviar');
Route::post('/contactenos/enviar', [ContactenosController::class, 'enviar'])->name('contactenos.enviar');

Route::post('/trabaje-con-nosotros/enviar', [TrabajeconNosotrosController::class, 'enviar'])->name('trabajeconNosotros.enviar');
Route::post('/trabaje-con-nosotros/enviar', [TrabajeconNosotrosController::class, 'enviar'])->name('trabajeconNosotros.enviar');



