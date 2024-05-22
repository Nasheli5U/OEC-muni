<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComprobanteDePago extends Model
{
    use HasFactory;

    protected $table = 'comprobantes_de_pago';
    protected $primaryKey = 'comprobante_id';

    protected $fillable = [
        'concepto',
        'descripcion',
        'nComprobante',
        'monto',
        'expediente_id',
    ];

    public function expediente()
    {
        return $this->belongsTo(Expediente::class);
    }
}
