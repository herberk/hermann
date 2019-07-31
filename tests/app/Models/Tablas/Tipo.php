<?php

namespace App\models\Tablas;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos';
    protected $fillable = ['name'];

    public function atributos()
    {
        return $this->hasMany(Atributo::class);
    }
}
