<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    /** @use HasFactory<\Database\Factories\PedidoFactory> */
    use HasFactory;
    use SoftDeletes;

    public function mueble()
    {
        return $this->belongsTo(Mueble::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
