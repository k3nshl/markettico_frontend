<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $primaryKey = "id_solicitud";
    protected $idEstado = "id_estado";
    protected $idProductoServicio = "id_producto_servicio";
    protected $idVendedor = "id_vendedor";
    protected $descripcion = "descripcion";
    protected $tipo = "tipo";
    protected $fechaSolicitud = "fecha_solicitud";
    protected $fechaRevision = "fecha_revision";
    public $timestamps = false;
}
