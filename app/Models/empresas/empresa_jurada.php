<?php

namespace App\models\empresas;

use Illuminate\Database\Eloquent\Model;

class empresa_jurada extends Model
{

    protected $fillable = [
        'empresa_id',
        'jurada_id',
        'arti_id',
        'estado',
        'folio'
    ];

}
