<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Archivo extends Model
{
    use HasFactory;

    protected $fillable = ["nombre","nombre_hash","mime"];

    public function pintura()
    {
        return $this->belongsTo(Pintura::class);
    }

}
