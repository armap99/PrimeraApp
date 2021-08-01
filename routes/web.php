<?php
use App\Http\Controllers\PortfolioControllerR;


//Rutas de nuetra pagina

//Route::get('/', function () {
    //return view('home');//no es necesario poner toda la ruta solo el nombre de la vista
//})->name('home');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::get('/portfolio','App\Http\Controllers\ProjectControllerR@index')->name('portfolio.index');
Route::get('/portfolio/crear','App\Http\Controllers\ProjectControllerR@create')->name('portfolio.create');
Route::get('/portfolio/{project}/editar','App\Http\Controllers\ProjectControllerR@edit')->name('portfolio.edit');
Route::post('/portfolio','App\Http\Controllers\ProjectControllerR@store')->name('projects.store');
Route::get('/portfolio/{id}','App\Http\Controllers\ProjectControllerR@show')->name('portfolio.show');

//Route::get('/portfolio','App\Http\Controllers\PortfolioController')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');
Route::post('contact', 'App\Http\Controllers\MessagesController@store')->name('messages.store');

//Para hacer las rutas de todos los metodos 
//Route::resource('projects', ProjectControllerR::class);//-> only(['indes', 'show']) lo mismo con except

/*Route::get('saludo/{nombre}', function ($nombre) {
    return "Saludos " . $nombre;
});

Route::get('saludos/{nombre?}', function ($nombre = "Incitado") { //? sirve para que no sea obligatorio el parametro
    return "Saludos " . $nombre;
});

//Rutas con nombre o Named Routes
Route::get('contactame', function () {
    return "vista de la pagina de contactos";
})->name('contactos');*/