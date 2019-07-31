<?php

namespace App\models\varias;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class message extends Model
{
    use SoftDeletes;

    public $fillable = ['name','email','message','visto'];

    public function setStateAttribute($value)
    {
        $this->attributes['visto'] = $value == 'visto';
    }

    public function getStateAttribute()
    {
        if ($this->visto !== null) {
            return $this->visto ? 'visto' : 'inactive';
        }
    }
}
