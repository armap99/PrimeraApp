<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    //php artisan make:model Project -m para que tambien cree la migracion
    //protected $table = 'nombre de la tabla '; en caso de que no encuentre la tabla
    protected $fillable = ['title','url','description']; //campos que se pueden guardar masivamente
    
}
