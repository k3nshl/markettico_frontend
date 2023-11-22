<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialSuspenciones extends Model
{
    use HasFactory;
    protected $table ='historial_suspenciones';
    protected $primaryKey='id_historial';
    public $timestamps=false;

    public function suscripcion()
    {
        return $this->belongsTo(Suscripcion::class, 'id_suscripcion');
    }
}
