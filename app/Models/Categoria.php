<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $primaryKey = "id_categoria";
    protected $nombre = "nombre";
    protected $descripcion = "descripcion";
    protected $id_estado = "id_estado";
    public $timestamps = false;


    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    public function preferencias()
    {
        return $this->hasMany(preferencias::class, 'id_categoria');
    }

    public function productos_servicios()
    {
        return $this->hasMany(productos_servicios::class, 'id_categoria');
    }

    public function subcategorias()
    {
        return $this->hasMany(subcategorias::class, 'id_categoria');
    }

}
