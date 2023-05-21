<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pintura extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = ['nombre','descripcion','precio'];


    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucwords($value);
    }

    public function setDescripcionAttribute($value)
    {
        $this->attributes['descripcion'] = ucfirst(strtolower($value));
    }

    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }
}
