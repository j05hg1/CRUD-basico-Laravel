<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// Trait Model de eloquent
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    //Instancio la tabla Productos
    protected $table = 'productos';

    //Declaro los campos a usar de la tabla Productos
    protected $fillable = ['nombre','precio','stock','img'];

}
