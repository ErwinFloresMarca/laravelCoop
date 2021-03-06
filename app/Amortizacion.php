<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cajera;
use App\Prestamo;
class Amortizacion extends Model
{
    protected $table='amortizaciones';
    public function prestamo(){
      return $this->belongsTo(Prestamo::class);
    }
    public function cajera(){
      return $this->belongsTo(Cajera::class);
    }
}
