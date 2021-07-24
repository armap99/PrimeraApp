<?php

//Rutas de nuetra pagina

Route::get('/', function () {
    //return "Hola desde la pagina de inicio";
    echo "<a href='" . route('contactos') . "'>Contactos 1<br>";
    echo "<a href='" . route('contactos') . "'>Contactos 2<br>";
    echo "<a href='" . route('contactos') . "'>Contactos 3<br>";
    echo "<a href='" . route('contactos') . "'>Contactos 4<br>";
    echo "<a href='" . route('contactos') . "'>Contactos 5<br>";
});

Route::get('contacto', function () {
    return "vista de la pagina de contacto";
});

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