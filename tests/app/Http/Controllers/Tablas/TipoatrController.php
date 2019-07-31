<?php

namespace App\Http\Controllers\Tablas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Tablas\Tipo;
use App\models\Tablas\Atributo;
use Illuminate\Validation\Rule;
use App\Exports\AtributosExport;
use App\Exports\AtributosFromView;
use Maatwebsite\Excel\Facades\Excel;

class TipoatrController extends Controller
{
    public function hayatri(Request $request) {

        if (!$request->ajax()) {
            return redirect('/');
        }
        return [
            'elatributos' => Atributo::where('tipos_id', $request->tipo)
                ->get(),
        ];
    }

    public function atributo_Query(Request $request){

        $atributos = Atributo::with('Tipos')
            ->orderBy('tipos_id',$request)
            ->paginate(10);
            return [
                    'pagination' => [
                    'total'         => $atributos->total(),
                    'current_page'  => $atributos->currentPage(),
                    'per_page'      => $atributos->perPage(),
                    'last_page'     => $atributos->lastPage(),
                    'from'          => $atributos->firstItem(),
                     'to'           => $atributos->lastItem(),
                    ],
                'atributos' => $atributos
            ];
        }

    public function tipos_Query(Request $request)
    {
        if (!$request->ajax()) {
            return redirect('/');
        }

        return [
            'tipos' => Tipo::query()
   //          ->withCount('Atributos')
                ->orderBy('name')
                ->get(),
        ];
    }

    public function tipocreate(Request $request){
        $this->validate($request, [
            'name'   => 'required|max:25|unique:tipos',
        ]);
        $Tipos = new tipo();
        $Tipos->name=$request->name;
        $Tipos->save();

        return response()->json([
            'tipos' => $Tipos,
            'message' => 'Success'
        ], 200);
    }
    public function tipodelete($id)
    {
        Tipo::find($id)->delete();
    }

    public function tipoupdate(Request $request){
        $this->validate($request, [
            'name'   => 'required|max:25',
            Rule::unique('Tipo')->ignore($request->id),
        ]);
        $Tipos = Tipo::find($request->id);
        $Tipos->name = $request->name;
        $Tipos->save();
    }

    public function atributocreate(Request $request){
        $this->validate($request, [
            'name'   => 'required|max:25|unique:Atributos',
            'codigo' => 'max:10',
        ]);
        $Atributos = new atributo();
        $Atributos->name=$request->name;
        $Atributos->Tipos_id = $request->atributo;
        $Atributos->codigo =$request->codigo;
        $Atributos->save();

    }
    public function atributodelete($id)
    {
        Atributo::find($id)->delete();
    }

    public function atributoupdate(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|max:25',
            Rule::unique('Atributos')->ignore($request->id),
            'codigo' => 'max:10',
        ]);
        $Atributos = Atributo::find($request->id);
        $Atributos->name = request('name');
        $Atributos->Tipos_id = request('atributo');
        $Atributos->codigo = request('codigo');
        $Atributos->save();
        return response()->json([
            'atributos' => $Atributos,
            'message' => 'Success'
        ], 200);
    }

    public function Exports()
    {
        return Excel::download(new AtributosExport(), 'atributos.xlsx');
    }

}
