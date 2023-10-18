<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = 'carrito'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'user_id', // Si los usuarios están autenticados
        'producto_id',
        'cantidad',
        'precio',
        // Otras columnas que puedas necesitar en la tabla carrito
    ];

    // Definir relaciones
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id', 'id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
