<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    use HasFactory;
    protected $table = "planes";
    protected $primaryKey = "id_plan";

    protected $nombre = "nombre";

    protected $cantidadProductos = "cantidad_productos";
    protected $multitienda = "multitienda";
    protected $duracion = "duracion";
    protected $nombrePlan = "tipo";
    protected $descripcion = "descripcion";
    protected $costo = "costo";
    protected $idEstado = "id_estado";
    public $timestamps = false;



}
