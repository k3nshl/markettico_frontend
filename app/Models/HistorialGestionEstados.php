<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialGestionEstados extends Model
{
    use HasFactory;
    protected $table ='historial_gestion_estados';
    protected $primaryKey='id_historial_estado';
    public $timestamps=false;

    public function usuario()
    {
        return $this->belongsTo(UsuarioAdministrativo::class, 'id_usuario');
    }

    public function rol()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
