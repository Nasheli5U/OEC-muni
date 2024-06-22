<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resolucion extends Model
{
    protected $primaryKey = 'id'; // Define la clave primaria personalizada

    // Define la relación con el expediente
    public function expediente()
    {
        return $this->belongsTo(Expediente::class);
    }
}
