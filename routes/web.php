<?php
use App\Http\Controllers\PortfolioControllerR;


//Rutas de nuetra pagina

//Route::get('/', function () {
    //return view('home');//no es necesario poner toda la ruta solo el nombre de la vista
//})->name('home');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio','App\Http\Controllers\PortfolioControllerR@index')->name('portfolio');
//Route::get('/portfolio','App\Http\Controllers\PortfolioController')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');
Route::post('contact', 'App\Http\Controllers\MessagesController@store');

//Para hacer las rutas de todos los metodos 
//Route::resource('projects', PortfolioControllerR::class);//-> only(['indes', 'show']) lo mismo con except

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