<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsuarioAdministrativo;

class CodigoVerificacion extends Model
{
    use HasFactory;
    protected $table = 'codigos_verificacion';
    protected $primaryKey = 'id_codigo';
    public $timestamps = false;
   
    public function usuario()
    {
        return $this->belongsTo(UsuarioAdministrativo::class, 'id_usuario');

    }
}
