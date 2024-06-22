<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; // Define la clave primaria personalizada

    protected $fillable = [
        'apellidos', 'nombres', 'dni_ruc', 'direccion_predio', 'domicilio', 
        'procedencia', 'fecha', 'infraccion', 'monto', 'resolucion','numero_expediente', 'medida_complementaria'
    ];
    // Define la relación con los comprobantes de pago
    public function comprobantesDePago()
    {
        return $this->hasMany(ComprobanteDePago::class);
    }

    // Define la relación con las resoluciones
    public function resoluciones()
    {
        return $this->hasMany(Resolucion::class);
    }

    // Define la relación con los estados
    public function estados()
    {
        return $this->hasMany(Estado::class);
    }

    // Define la relación con los reportes
    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }
}
