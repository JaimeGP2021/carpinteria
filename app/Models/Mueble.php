<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mueble extends Model
{
    /** @use HasFactory<\Database\Factories\MuebleFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
    [
        'denominacion',
        'precio',
        'muebleable_type',
        'muebleable_id',
    ];

    public function muebleable()
    {
        return $this->morphTo();
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

    public function precioCalculado()
    {
        return $this->muebleable->precioFinal();
    }
}
