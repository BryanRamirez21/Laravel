<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|Este archivo lo lee de arriba hacia abajo hasta que una url coincida
|


Route::get('/', function () {
    //return view('welcome');

});

Route::get('cursos', function(){//Esto define una nueva ruta para que laravel reconozca a donde ir en caso de que se consulte este php
    //INterpreta la var cursos como una nueva pagina
    return "holis";
});

Route::get('cursos/create', function(){
    return "aqui creamos un curso";
});

Route::get('cursos/{curso}/{category}', function($curso, $category){
    return "Hola, $curso al $category";
});

Route::get('cursos/{curso}/{category?}', function($curso, $category=null){
    if($category)
        return "Hola, $curso al $category";
    else   
        return "Hola, $curso al nada";
    
});

*/
/*
Route::get('/', HomeController::class);

Route::get('cursos', [cursoController::class, 'index']);

Route::get('cursos/create', [cursoController::class, 'create']);

Route::get('cursos/{curso}/{category}', [cursoController::class, 'show']);
*/

Route::controller(cursoController::class)->group(function(){
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::get('cursos/{id}', 'show')->name('cursos.category');
    
    Route::post('cursos', 'store')->name('cursos.store');
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}', 'update')->name('cursos.update');
});