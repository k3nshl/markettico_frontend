<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialAcciones extends Model
{
    use HasFactory;
    protected $table ='historial_acciones';
    protected $primaryKey='id_historial_accion';
    public $timestamps=false;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
