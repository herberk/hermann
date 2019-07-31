<?php

namespace App\models\Tablas;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Atributo extends Model
{

    use LogsActivity;

    protected $table = 'atributos';
    protected $fillable = [
        'name',
        'codigo',
        'tipos_id'
    ];

    protected static $logAttributes = ['name'];
    protected static $logName = 'Tablas-Atributos';

    public function tipos() {
        return $this->belongsTo('App\models\Tablas\Tipo');
    }
}
