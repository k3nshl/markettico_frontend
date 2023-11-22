<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaginaInformacion extends Model
{
    use HasFactory;

    protected $table = 'paginas_informacion';
    protected $primaryKey = 'id_pagina_informacion';
    public $timestamps = false;

    public function articulos()
    {
        return $this->hasMany(Articulo::class, 'id_articulo');
    }


}
