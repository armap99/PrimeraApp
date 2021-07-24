<?php

//Rutas de nuetra pagina

Route::get('/', function () {
    return view('home');//no es necesario poner toda la ruta solo el nombre de la vista
})->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

Route::get('saludo/{nombre}', function ($nombre) {
    return "Saludos " . $nombre;
});

Route::get('saludos/{nombre?}', function ($nombre = "Incitado") { //? sirve para que no sea obligatorio el parametro
    return "Saludos " . $nombre;
});

//Rutas con nombre o Named Routes
Route::get('contactame', function () {
    return "vista de la pagina de contactos";
})->name('contactos');