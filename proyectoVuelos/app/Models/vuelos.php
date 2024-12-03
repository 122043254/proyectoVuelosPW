<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\reservacionesVuelos;

class vuelos extends Model
{
    use HasFactory;
    protected $table = 'vuelos';
    protected $fillable = [
        'origen',
        'destino',
        'fechaSalida',
        'fechaLlegada',
        'horaSalida',
        'horaLlegada'
    ];

    public $timestamps = false;

    public function reservaciones()
    {
        return $this->hasMany(reservacionesVuelos::class);
    }
}
