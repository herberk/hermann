<?php

namespace App\models\Tablas;
use Illuminate\Database\Eloquent\Model;

class Regiones extends Model
{
    protected $table = 'Regiones';
    protected $fillable = ['name'];


  Public function comunas()
    {
        return $this->hasMany(Comunas,'regiones_id');

    }
    /*Public function scopeName($query, $id){

      If(trim($id)!="")
      {$query->where('name',$id);}
      dd($query);
    }*/
}
