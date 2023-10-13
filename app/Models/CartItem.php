<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'carrito'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'user_id',
        'producto_id',
        'cantidad',
        'precio',
    ];

    // Relación con el modelo de usuario (si los usuarios están autenticados)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el modelo de producto
    public function product()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
