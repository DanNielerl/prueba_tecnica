<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    protected $table = 'libros';

    protected $fillable = [
        'titulo',
        'autor',
        'anio_publicacion',
        'disponible'
    ];

    public $timestamps = false;
}
