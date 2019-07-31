<?php

namespace App\Http\Controllers\Empresas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\empresas\banco;
use App\Models\empresas\empresa;
use Kamaln7\Toastr\Facades\Toastr;

class BancoController extends Controller
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
    public function index(Request $request)
    {
        $empresas  = Empresa::with('bancos')->paginate(10);
        $bancos = banco::with('empresas')
           ->orderBy('empresas_id','ASC',$request)
            ->paginate(10);
       return view('empresas.bancos.indexbancos',compact('bancos','empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required|max:50',
            'ctacte'  => 'required|unique:bancos',
            'empre_id'=> 'required'
        ]);

      // banco::create($request->all());
        $bancos = new banco();
        $bancos->name = $request->name;
        $bancos->ctacte = $request->ctacte;
        $bancos->firman = $request->persona1.'  '.$request->persona2;
        $bancos->montoLin = $request->linea;
        $bancos->empresas_id = $request->empre_id;
        $bancos->save();
        $message='El '.$request->name.' fue Guardado';
        $title = "";
        Toastr::success($message, $title);
        return redirect()->route("bancosindex");

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
