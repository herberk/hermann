<?php

namespace App\Http\Controllers\tablas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Tablas\Comunas;
use App\models\Tablas\Regiones;
use App\models\Tablas\Ciudades;
use Illuminate\Validation\Rule;

class locacionesController extends Controller
{
    public function locaciones_Query(Request $request){

        $comunas = Comunas::with('regiones')
            ->paginate(15);
        $regiones = Regiones::orderBY('name')->get();

        return [
            'pagination' => [
                'total'         => $comunas->total(),
                'current_page'  => $comunas->currentPage(),
                'per_page'      => $comunas->perPage(),
                'last_page'     => $comunas->lastPage(),
                'from'          => $comunas->firstItem(),
                'to'            => $comunas->lastItem(),
            ],
            'comunas'   => $comunas,
            'regiones'  => $regiones,
        ];
    }
//  para mostrar comunas de la Region
  public function hayComunas(Request $request) {
        if (!$request->ajax()) {
            return redirect('/');
        }
        return [
            'elcomunas' => Comunas::where('regiones_id', $request->tipo)
                ->orderBy('name')
                ->get(),
        ];
    }

    public function ciudadQuery(Request $request){

        $ciudades = Ciudades::orderBY('name')->paginate(5);
        return [
            'Bpagination' => [
                'total'         => $ciudades->total(),
                'current_page'  => $ciudades->currentPage(),
                'per_page'      => $ciudades->perPage(),
                'last_page'     => $ciudades->lastPage(),
                'from'          => $ciudades->firstItem(),
                'to'            => $ciudades->lastItem(),
            ],
            'ciudades' => $ciudades
        ];
    }

    public function create(Request $request){
        $this->validate($request, [
            'name'   => 'required|max:25|unique:ciudades',
            'codigo' => 'max:5',
        ]);
        $ciudades=new Ciudades();
        $ciudades->name=$request->name;
        $ciudades->codigo =$request->codigo;
        $ciudades->save();

        return response()->json([
            'ciudades' => $ciudades,
            'message' => 'Success'
        ], 200);
    }

    public function destroy($id)
    {
        Ciudades::find($id)->delete();
    }

    public function update(Request $request, $id )
    {
        $this->validate($request, [
            'name' => 'required|max:25',
            Rule::unique('ciudades')->ignore($request->id),
            'codigo' => 'max:5',
        ]);
        $ciudades = Ciudades::find($request->id);
        $ciudades->name= request('name');
        $ciudades->codigo = request('codigo');
        $ciudades->save();

        return response()->json([
            'message' => 'Task updated successfully!'
        ], 200);

    }
}
