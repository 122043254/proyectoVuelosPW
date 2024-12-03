<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reservacionesVuelos extends Model
{
    use HasFactory;

    protected $fillable = [
        'vuelo_id',
        'nombre_pasajero',
        'email_pasajero',
        'asiento',
    ];

    public function vuelo()
    {
        return $this->belongsTo(vuelos::class);
    }
}
