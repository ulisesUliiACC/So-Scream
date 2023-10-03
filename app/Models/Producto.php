<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_producto',
        'descripcion',
        'precio',
        'stock',
        'estado',
        'fecha_activo',
        'fecha_limite',
        'imagen',
    ];
    
}
