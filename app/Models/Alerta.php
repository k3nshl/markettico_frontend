<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    use HasFactory;
    protected $table ='alertas';
    protected $primaryKey='id_alerta';
    public $timestamps=false;

    public function usuario()
    {
        return $this->belongsTo(UsuarioAdministrativo::class, 'id_usuario_remitente');
    }

    public function Estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    protected $table ='alertas';
    protected $primaryKey = "id_alerta";
    
    public $timestamps=false;


}
