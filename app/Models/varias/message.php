<?php

namespace App\models\varias;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class message extends Model
{
    use SoftDeletes;

    public $fillable = ['name','email','message','active'];

    public function setStateAttribute($value)
    {
        $this->attributes['active'] = $value == 'active';
    }

    public function getStateAttribute()
    {
        if ($this->active !== null) {
            return $this->active ? 'active' : 'inactive';
        }
    }

   public function cuenta(){
    $count = message::where('active', 1)->count();
    return $count;
   }
}
