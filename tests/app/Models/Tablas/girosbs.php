<?php

namespace App\modal\tablas;

use Illuminate\Database\Eloquent\Model;

class girosbs extends Model
{
    protected $fillable = ['name'];

    protected $table = 'girosbs';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    Public function giros()
    {
        return $this->hasMany(giros,'girosbs_id');

    }




//    Public function girosas()
//    {
//        return $this->hasOne(girosas::class)->withDefault();
//    }
}
