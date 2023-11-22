<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'estados';
    protected $primaryKey = "id_estado";
    public $timestamps = false;

    public function alertas()
    {
        return $this->hasMany(Alertas::class, 'id_estado');
    }

    public function anuncios()
    {
        return $this->hasMany(Anuncios::class, 'id_estado');
    }
    public function articulos()
    {
        return $this->hasMany(Articulos::class, 'id_estado');
    }

    public function categorias()
    {
        return $this->hasMany(Categorias::class, 'id_estado');
    }

    public function codigosVerificacion()
    {
        return $this->hasMany(CodigosVerificacion::class, 'id_estado');
    }

    public function historialGestionEstados()
    {
        return $this->hasMany(HistorialGestionEstados::class, 'id_estado');
    }

    public function ofertas()
    {
        return $this->hasMany(Ofertas::class, 'id_estado');
    }

    public function pagos()
    {
        return $this->hasMany(Pagos::class, 'id_estado');
    }

    public function planes()
    {
        return $this->hasMany(Planes::class, 'id_estado');
    }

    public function roles()
    {
        return $this->hasMany(Roles::class, 'id_estado');
    }

    public function suscripciones()
    {
        return $this->hasMany(suscripciones::class, 'id_estado');
    }

    public function usuariosAdmin()
    {
        return $this->hasMany(suscripciones::class, 'id_estado');
    }

    public function vendedores()
    {
        return $this->hasMany(suscripciones::class, 'id_estado');
    }

    public function productosServicios()
    {
        return $this->hasMany(ProductosServicios::class, 'id_estado');
    }


    
    






}
