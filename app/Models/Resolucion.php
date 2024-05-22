<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resolucion extends Model
{
    use HasFactory;

    protected $table = 'resoluciones';
    protected $primaryKey = 'resolucion_id';

    protected $fillable = [
        'expediente_id',
        'tipo_expediente',
    ];

    public function expediente()
    {
        return $this->belongsTo(Expediente::class);
    }
}
