<?php


namespace App\Http\ViewComposers;

use App\Models\Tablas\{ Atributo, Tipo, Regiones, Comunas, Ciudades};
Use App\models\empresas\empresa;
Use App\models\archivos\directorio;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;


class MakeModelForm
{
    public function compose(View $view)
    {
        $makeForm = Request::only('region_id', 'comuna_id','ciudad_id','tipo_id','arti_id','empre_id','dir_id','otro');

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

        $atri_com = array();
        if ($makeForm['tipo_id'] = null) {
            $atri_com = atributo::where('tipos_id', $makeForm['tipo_id'])
                ->orderBy('name', 'DESC')
                ->pluck('name', 'id')
                ->toArray();
        }

        $emp_com = empresa::orderBy('name_corto', 'ASC')
            ->pluck('name_corto', 'id')
            ->toArray();

        $dir_com = array();
        if ($makeForm['dir_id'] = null) {
            $dir_com = directorio::where('empresas_id', $makeForm['dir_id'])
                ->orderBy('name', 'DESC')
                ->pluck('name', 'id')
                ->toArray();
        }

        $view->with(compact('makeForm','reg_com','com_com','ciu_com','tipo_com','atri_com','art', 'emp_com', 'dir_com'));

    }
}

