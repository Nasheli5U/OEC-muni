<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $table = 'reportes';
    protected $primaryKey = 'reporte_id';

    protected $fillable = [
        'expediente_id',
        'tipo_reporte',
    ];

    public function expediente()
    {
        return $this->belongsTo(Expediente::class);
    }
}
