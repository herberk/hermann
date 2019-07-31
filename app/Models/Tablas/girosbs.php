<?php

namespace App\models\Tablas;

use Illuminate\Database\Eloquent\Model;

class girosbs extends Model
{
    protected $fillable = ['name','girosas_id'];

    protected $table = 'girosbs';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    Public function giros()
    {
        return $this->hasMany('App\models\Tablas\giros', 'girosbs_id');
    }

}
