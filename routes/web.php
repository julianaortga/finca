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


//Rutas CRUD Linea Genética
Route::resource('linea_gen','Linea_GenController');

//Rutas CRUD Raza
Route::resource('raza','RazaController');

//Rutas CRUD Tipo de Ave
Route::resource('tipo_ave','Tipo_aveController');

//Rutas CRUD Ave
Route::resource('ave','AveController');


Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/registrar-ave', function(){
    return view('registrar-ave');
});

Route::get('/listar-aves', function(){
    return view('listar-aves');
});*/

Route::get('/modificar-datos', function(){
    return view('modificar-datos');
});

Route::get('/registrar-alimentacion', function(){
    return view('registrar-alimentacion');
});

Route::get('/registrar-vacunacion', function(){
    return view('registrar-vacunacion');
});


Route::get('/registrar-tratamiento', function(){
    return view('registrar-tratamiento');
});

Route::get('/reportes', function(){
    return view('reportes');
});

Route::get('/registrar-producto', function(){
    return view('registrar-producto');
});

Route::get('/modificar-producto', function(){
    return view('modificar-producto');
});

Route::get('/registrar-galpon', function(){
    return view('registrar-galpon');
});

Route::get('/modificar-galpon', function(){
    return view('modificar-galpon');
});

Route::get('/registrar-inventario', function(){
    return view('registrar-inventario');
});