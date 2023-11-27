<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $table = 'articulos';
    protected $primaryKey = 'id_articulo';
    public $timestamps = false;


    public function pagina_informacion()
    {
        return $this->belongsTo(PaginaInformacion::class, 'id_pagina_informacion');
    }

    //usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    //belonsto para estado

    public function estado()
    {
    return $this->belongsTo(Estado::class, 'id_estado');
   }

}