<?php

namespace App\models\Tablas;

use Illuminate\Database\Eloquent\Model;

class Comunas extends Model
{
    protected $table = 'Comunas';

    protected $fillable = ['name'];

    public function regiones() {
        return $this->belongsTo('App\models\Tablas\Regiones');
    }
}
