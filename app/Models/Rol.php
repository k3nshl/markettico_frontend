<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table ='roles';
    protected $primaryKey='id_rol';
    public $timestamps=false;

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function usuariosAdministrativos()
    {
        return $this->hasMany(UsuarioAdministrativo::class, 'rol_id');
    }

    public function historialGestionRoles()
    {
        return $this->hasMany(HistorialGestionRoles::class, 'rol_id');
    }
}
