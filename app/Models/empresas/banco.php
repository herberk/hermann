<?php

namespace App\models\empresas;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class banco extends Model
{

    use LogsActivity;
    protected $fillable = [
        'name',
        'ctacte',
        'firman',
        'montoLin',
        'empresas_id',
    ];
    protected static $logAttributes = ['name', 'ctacte', 'firman'];
    protected static $logName =  'Empresas-Banco';

    public function empresas()
    {
        return $this->belongsTo('App\models\empresas\empresa');
    }
}
