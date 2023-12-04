<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UsuarioBloqueado extends Model
{

    protected $table = 'usuarios_bloqueados';
    protected $primaryKey = 'id_usuario_bloqueado';
    public $timestamps = false;
    
    public function usuarioAdministrativo()
    {
        return $this->belongsTo(UsuarioAdministrativo::class, 'id_usuario_administrativo');
    }

    public function usuarioVendedor(){
        return $this->belongsTo(Vendedor::class, 'id_usuario_vendedor');
    }

}
