<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioAdministrativo extends Model
{
    use HasFactory;

    protected $table ='usuarios_administrativos';
    protected $primaryKey='id_usuarios_administrativo';
    public $timestamps=false;

    public function roles()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }

    public function estados()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

}
