<?php


namespace App\Http\ViewComposers;
use App\models\Tablas\Atributo;
use App\models\Tablas\Tipo;
use App\models\Tablas\Regiones;
use App\models\Tablas\Comunas;
use App\models\Tablas\Ciudades;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;


class MakeModelForm
{
    public function compose(View $view)
    {
        $makeForm = Request::only('region_id', 'comuna_id','ciudad_id','tipo_id','atributo_id','empresaTipo_id','arti_id');

        $reg_com = regiones::orderBy('name', 'ASC')
            ->pluck('name', 'id')
            ->toArray();

        $com_com = array();
         if ($makeForm['region_id'] = null) {
            $com_com = Comunas::where('regiones_id', $makeForm['region_id'])
                ->orderBy('name', 'DESC')
                ->pluck('name', 'id')
                ->toArray();
        }

        $ciu_com = ciudades::orderBy('name', 'ASC')
            ->pluck('name', 'id')
            ->toArray();

        $tipo_com = tipo::orderBy('name', 'ASC')
            ->pluck('name', 'id')
            ->toArray();

      $tot = count($tipo_com);
        for($i = 1; $i <= $tot; $i++ ){
        $art[] = atributo::where('tipos_id',$i)
              ->orderBy('name', 'DESC')
              ->pluck('name', 'id')
              ->toArray();
      }
    // dd($art[1],$art[2]);

        $atri_com = array();
        if ($makeForm['tipo_id'] = null) {
            $atri_com = atributo::where('tipos_id', $makeForm['tipo_id'])
                ->orderBy('name', 'DESC')
                ->pluck('name', 'id')
                ->toArray();
        }




        $emp_atri = atributo::where('tipos_id', '6')
            ->pluck('name', 'id')
            ->toArray();


        $view->with(compact('makeForm','reg_com','com_com','ciu_com','tipo_com','atri_com','emp_atri','art'));

    }
}

