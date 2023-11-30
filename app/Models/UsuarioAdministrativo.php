<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class UsuarioAdministrativo extends Model implements Authenticatable

{
    use AuthenticatableTrait;

    use HasFactory;

    protected $table = 'usuarios_administrativos';
    protected $primaryKey = 'id_usuario_administrativo';
    public $timestamps = false;

    public function roles()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }

    public function estados()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }


    public function codigo_verificacion()
    {
        return $this->hasMany(CodigoVerificacion::class, 'id_codigo');
    }
}
