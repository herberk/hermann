<?php

namespace App\modal\tablas;

use Illuminate\Database\Eloquent\Model;

class girosas extends Model
{
    protected $fillable = ['name'];

    protected $table = 'girosas';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

}
