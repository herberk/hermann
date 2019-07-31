<?php

namespace App\models\empresas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class socio extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'rut',
        'name',
        'fono',
        'email',
        'rep_legal',
        'porcen',
        'apopago',
        'apopend',
        'aporte',
        'notas',
        'softDeletes'
    ];

    public function empresas() {
        return $this->belongsTo('App\modal\empresas\empresa','empresa_id');
    }

    public function getnotasAttribute($notas)
    {
        return $this->attributes['notas'] = strip_tags($notas,"");
    }
  /* public function getapopagoAttribute($apopago)
    {
        return $this->attributes['apopago'] = number_format($apopago, 0);
    }
    public function getapopendAttribute($apopend)
    {
        return $this->attributes['apopend'] = number_format($apopend, 0);
    }
    public function getaporteAttribute($aporte)
    {
        return $this->attributes['aporte'] = number_format($aporte, 0);
    }*/
}
