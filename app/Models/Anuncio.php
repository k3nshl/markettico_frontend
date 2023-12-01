<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;
    protected $table ='anuncios';
    protected $primaryKey='id_anuncio';
    public $timestamps=false;

    public function usuario()
    {
        return $this->belongsTo(UsuarioAdministrativo::class, 'id_usuario_remitente');
    }

    public function Estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
