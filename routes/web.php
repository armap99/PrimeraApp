<?php
use App\Http\Controllers\ProjectControllerR;

//para crear login y registro php artisan make:auth

//Rutas de nuetra pagina

//Route::get('/', function () {
    //return view('home');//no es necesario poner toda la ruta solo el nombre de la vista
//})->name('home');

//{{auth()->user()}}//rregresa la info del usuario

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about')->middleware('auth');

Route::get('/portfolio',[ProjectControllerR::class,'index'])->name('portfolio.index');
Route::get('/portfolio/crear','App\Http\Controllers\ProjectControllerR@create')->name('portfolio.create');

Route::get('/portfolio/{project}/editar','App\Http\Controllers\ProjectControllerR@edit')->name('portfolio.edit');
Route::patch('/portfolio/{project}','App\Http\Controllers\ProjectControllerR@update')->name('portfolio.update');//put y patch para editar
Route::delete('/portfolio/{project}','App\Http\Controllers\ProjectControllerR@destroy')->name('portfolio.destroy');
Route::post('/portfolio','App\Http\Controllers\ProjectControllerR@store')->name('projects.store');
Route::get('/portfolio/{id}','App\Http\Controllers\ProjectControllerR@show')->name('portfolio.show');

//Route::get('/portfolio','App\Http\Controllers\PortfolioController')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');
Route::post('contact', 'App\Http\Controllers\MessagesController@store')->name('messages.store');



//Para hacer las rutas de todos los metodos
//Route::resource('projects', ProjectControllerR::class);//-> only(['index', 'show']) lo mismo con except

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
