<?php

namespace App\models\empresas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class contacto extends Model
{
    use SoftDeletes;

    protected $table = 'contactos';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'rut',
        'name',
        'email',
        'fono',
        'notas',
        'empresas_id',
        'softDeletes'
    ];

    public function empresas() {
        return $this->belongsTo('App\models\empresas\empresa');
    }
}
