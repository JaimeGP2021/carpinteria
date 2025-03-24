<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fabricado extends Model
{
    /** @use HasFactory<\Database\Factories\FabricadoFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable=
    [
        'ancho',
        'alto',
    ];

    public function mueble()
    {
        return $this->morphOne(Mueble::class, 'muebleable');
    }

    public function precioFinal()
    {
        return $this->ancho * $this->alto * $this->mueble->precio;
    }
}
