<?php

namespace App\models\Tablas;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Tipo extends Model
{
    use LogsActivity;

    protected $table = 'tipos';
    protected $fillable = ['name'];

    protected static $logAttributes = ['name'];
    protected static $logName = 'Tablas-Tipos';

    public function atributos()
    {
        return $this->hasMany(Atributo::class);
    }
}
