<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prefabricado extends Model
{
    /** @use HasFactory<\Database\Factories\PrefabricadoFactory> */
    use HasFactory;
    use SoftDeletes;

    public function mueble()
    {
        return $this->morphOne(Mueble::class, 'muebleable');
    }

    public function precioFinal()
    {
        return $this->mueble->precio;
    }
}
