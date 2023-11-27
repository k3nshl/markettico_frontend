<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialGestionPaginas extends Model
{
    use HasFactory;
    protected $table ='historial_gestion_paginas';
    protected $primaryKey='id_historial';
    public $timestamps=false;

    public function pagina_informacion()
    {
        return $this->belongsTo(PaginaInformacion::class, 'id_pagina_informacion');
    }
}
