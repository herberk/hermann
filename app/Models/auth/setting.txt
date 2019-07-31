<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $table = 'settings';

    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['company_id', 'key', 'value'];

}
