<?php

namespace App\models\Tablas;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    protected $table = 'Ciudades';
//    public $timestamps = false;
    protected $fillable = ['name'];


}
