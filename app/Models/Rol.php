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
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    public function usuariosAdministrativos()
    {
        return $this->hasMany(usuariosAdministrativos::class, 'id_rol');
    }

    public function historialGestionRoles()
    {
        return $this->hasMany(HistorialGestionRoles::class, 'id_rol');
    }
}
