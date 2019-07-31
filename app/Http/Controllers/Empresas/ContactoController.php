<?php

namespace App\Http\Controllers\Empresas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\empresas\contacto;
use App\models\empresas\empresa;

class ContactoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function contactosQuery(Request $request){
         $empresas  = Empresa::with('contactos')->paginate(10);
          $contactos = contacto::with('empresas')
            ->orderBy('empresas_id','ASC',$request)
           ->paginate(10);
        return [
            'pagination' => [
                'total'         => $contactos->total(),
                'current_page'  => $contactos->currentPage(),
                'per_page'      => $contactos->perPage(),
                'last_page'     => $contactos->lastPage(),
                'from'          => $contactos->firstItem(),
                'to'            => $contactos->lastItem(),
            ],
            'empresas'  => $empresas,
            'contactos' => $contactos
        ];
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function trashed()
    {
        $empresas = empresa::onlyTrashed()->paginate();
        return view('empresas.index', [
            'empresas' => $empresas,
            'view' => 'trash',
        ]);
    }

    public function create(Request $request){

     $this->validate($request, [
            'name'   => 'required|max:50',
            'email'  => 'required|unique:contactos|email',
            'empresas_id'=> 'required'
        ]);

        $contactos = new contacto();
        $contactos->rut  =  $request->rut;
        $contactos->name =  $request->name;
        $contactos->email = $request->email;
        $contactos->fono =  $request->fono;
        $contactos->notas ='';
        $contactos->empresas_id =$request->empresas_id;
        $contactos->save();

        return response()->json([
            'contactos' => $contactos,
            'message' => 'Success'
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email'  => 'required|email',
//            'email'=>'required|unique:employees,email,'.$this->id.'|email',
            'empresas_id'=> 'required'
        ]);
        $contactos = contacto::find($request->id);
        $contactos->rut = request('rut');
        $contactos->name= request('name');
        $contactos->email = request('email');
        $contactos->fono = request('fono');
        $contactos->empresas_id = request('empresas_id');
        $contactos->save();

        return response()->json([
            'message' => 'Task updated successfully!'
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        contacto::find($id)->delete();
    }


    public function notasupdate(Request $request, $id){
        $contactos = contacto::find($request->id);
        $contactos->notas = request('notas');
        $contactos->save();

        return response()->json([
            'message' => 'Task updated successfully!'
        ], 200);
    }
}
