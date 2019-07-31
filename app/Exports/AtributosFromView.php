<?php

namespace App\Exports;

use App\Models\tablas\Atributo;
use App\models\Tablas\Tipo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;


class AtributosFromView implements  FromView

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('Exports.Atributoexport', [
            'atributos' =>Atributo::with('Tipos')->get()
        ]);
    }



}
