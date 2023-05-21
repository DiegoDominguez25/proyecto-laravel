<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pintura;

class Categoria extends Model
{
    use HasFactory;

    public function pinturas()
    {
        return $this->hasMany(Pintura::class);
    }

    public function getTipoAttribute($value)
    {
        return strtoupper($value);
    }
}
