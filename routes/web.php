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

Route::get('/', 'PagesController@inicio');

Route::get('fotos/{numero?}', function($numero = ''){
    return 'estas en la galeria de fotos :'.$numero;
})->where('numero', '[0-9]+');

Route::get('/foto', function () {
    return view('foto');
})-> name('foto');

Route::view('galeria', 'galeria', ['numero' => 124])->name('galeria');

Route::get('we/{nombre?}', function($nombre = null){
    $equipo = ['Juanito', 'Mauricio', 'Paco'];
    return view('we', ['equipo'=>$equipo, 'nombre'=>$nombre]);
    //forma compacta return view('we', compact('equipo'));
})->name('we');

//php artisan make:controller PagesController

//cargar migrations php artisan migrate
//migrate:rollback

//eloquent

//crear modelo y migration
//php artisan make:model Name -m