<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialGestionRoles extends Model
{
    use HasFactory;
    protected $table ='historial_gestion_roles';
    protected $primaryKey='id_historial_rol';
    public $timestamps=false;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }
}
