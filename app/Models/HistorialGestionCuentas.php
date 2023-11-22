<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialGestionCuentas extends Model
{
    use HasFactory;
    protected $table ='historial_gestion_cuentas';
    protected $primaryKey='id_historial_cuenta';
    public $timestamps=false;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
