<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    protected $table = 'expedientes';
    protected $primaryKey = 'expediente_id';

    protected $fillable = [
        'apellidos',
        'nombres',
        'nExpediente',
        'fechaNot',
        'estado',
        'comprobante',
        'imagen',
        'precio',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function comprobantesDePago()
    {
        return $this->hasMany(ComprobanteDePago::class);
    }

    public function resoluciones()
    {
        return $this->hasMany(Resolucion::class);
    }

    public function estados()
    {
        return $this->hasMany(Estado::class);
    }

    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }
}
