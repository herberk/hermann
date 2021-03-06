<?php

namespace App\models\empresas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Spatie\Activitylog\Traits\LogsActivity;

class empresa extends Model
{
    use SoftDeletes, LogsActivity;

    protected $table = 'empresas';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'rut',
        'name',
        'name_corto',
        'tipo',
        'codigo',
        'actividad',
        'direccion',
        'region',
        'comuna',
        'ciudad',
        'codpostal',
        'email',
        'fono',
        'segmento',
        'fe_inicio',
        'tipo_tri',
        'logo',
        'capital',
        'notas',
        'softDeletes'
    ];


    protected static $logAttributes = ['name', 'rut','name_corto'];
    protected static $logName = 'Empresas-Empresa';

    public function contactos()
    {
        return $this->hasMany('App\models\empresas\contacto' , 'empresas_id');
    }

    public function bancos()
    {
        return $this->hasMany('App\models\empresas\banco' , 'empresas_id');
    }

    public function socios()
    {
        return $this->hasMany('App\models\empresas\socio', 'empresas_id');
    }

    public function juradas()
    {
        return $this->belongsToMany(jurada::class, 'empresa_juradas')->withPivot('id','estado','arti_id','folio');
    }

    Public function directorios()
    {
        return $this->hasMany('App\models\archivos\directorio','empresas_id');
    }


    Public static function filterAndPaginate($name,$type)
    {
        return User::name($name)
            ->type($type)
            ->orderBy('id')
            ->paginate(15);
    }
    public function scopeName($query, $name)
    {
        if (trim($name) !="")
        {
            $query->where('name',"LIKE", "%$name%");
        }
    }
    public function scopeType($query, $type)
    {
        $types = config('options.types');

        if ($type != ""&& isset($types[$type]))
        {
            $query->where('type',$type);
        }
    }

//     public function getfe_inicioAttribute($fe_inicio)
//    {
//        return Carbon::parse($fe_inicio)->format('d-m-Y');
//
//    }
//    public function getcodpostalAttribute($codpostal)
//    {
//        return $this->attributes['codpostal'] = number_format($codpostal, 0);
//    }

  /*  public function getcapitalAttribute($capital)
    {
        return $this->attributes['capital'] =  number_format($capital, 0);
    }*/
    public function getnotasAttribute($notas)
    {
        return $this->attributes['notas'] = strip_tags($notas,"");
    }


}
