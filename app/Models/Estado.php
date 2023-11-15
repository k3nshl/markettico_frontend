<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $primaryKey = "id_estado";
    protected $nombre = "nombre";
    public $timestamps = false;



    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
