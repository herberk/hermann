<?php

namespace App\Http\Controllers\Empresas;

use Faker\Provider\DateTime;
use App\Exports\EmpresasExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEmpresasRequest;
use App\Http\Requests\EditEmpresasRequest;
use App\Models\empresas\{
    empresa, contacto, jurada, socio };
use Illuminate\Support\Facades\DB;
use Kamaln7\Toastr\Facades\Toastr;
use Maatwebsite\Excel\Facades\Excel;

class empresaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $empresas = empresa::query()
       ->with('juradas')
        ->orderBy('name_corto','ASC')
        ->get();
        return view('empresas.index', [
            'view' => 'index',
            'empresas' => $empresas,
        ]);
    }

    public function trashed(){
        $empresas = empresa::onlyTrashed()->paginate();
        return view('empresas.index', [
            'empresas' => $empresas,
            'view' => 'trash',
        ]);
    }

    public function create() {
         $empresas = new empresa;
         $view ='new';
         $capital ='0';
        return view('empresas.new',compact('empresas','Atributos','Ciudades','Regiones', 'Comunas','contactos','capital','view'));
    }

    public function storempresa(CreateEmpresasRequest $request){
        $empresas = new empresa();
        $empresas->rut = ltrim($request->rut, "0");
        $empresas->name = $request->name;
        $empresas->name_corto = $request->name_corto;
        $empresas->arti_id = $request->arti_id;
        $empresas->tipo =  DB::table('atributos')->where('id',$request->arti_id)->value('name');
        $empresas->actividad = $request->actividad;
        $empresas->direccion = $request->direccion;
        $empresas->region_id = $request->region_id;
        $empresas->region = DB::table('regiones')->where('id',$request->region_id)->value('name');
        $empresas->comuna_id = $request->comuna_id;
        $empresas->comuna = DB::table('comunas')->where('id',$request->comuna_id)->value('name');
        $empresas->ciudad_id = $request->ciudad_id;
        $empresas->ciudad =  DB::table('ciudades')->where('id',$request->ciudad_id)->value('name');
        $empresas->codpostal = $request->codpostal;
        $empresas->email = $request->email;
        $empresas->fono = $request->fono;
        $empresas->fe_inicio = DATE_FORMAT( date_create($request->fe_inicio),"Y/m/d H:i:s");
        $empresas->tipo_tri = $request->tipo_tri;
        $empresas->segmento = $request->segmento;
        $empresas->codigo = $request->codigo;
        $empresas->giro = $request->giro;
        $empresas->logo = 'default_logo.jpg';
        $empresas->capital = str_replace(',','',$request->capital);
        $empresas->notario=$request->notario;
        $empresas->fe_notario = DATE_FORMAT( date_create($request->fe_notario),"Y/m/d H:i:s");
        $empresas->repertorio=$request->repertorio;
        $empresas->nro_edicion=$request->nro_edicion;
        $empresas->fe_diario = DATE_FORMAT( date_create($request->fe_diario),"Y/m/d H:i:s");
        $empresas->reg_comercio=$request->reg_comercio;
        $empresas->save();
        $message='La Empresa '.$empresas->name.' fue Guardada';
        $title = "";
        Toastr::success($message, $title);
        return redirect()->route("empresaindex");
    }

    public function show($id){
        $empresas = empresa::findOrFail($id);
        return view('empresas.show', compact('empresas'));
    }


    public function edit($id){
        $capital = $this->suma($id);
        $contactos = Contacto::where('empresas_id',($id))->get();
        $empresas = empresa::findOrFail($id);
        $view ='edit';
        return view('empresas.edit', compact('empresas','view','contactos','capital'));
    }
      public function suma($id){
          $capital = Socio::where('empresas_id',($id))->sum('aporte');
          $empresas=empresa::findOrFail($id);
          $empresas->capital = str_replace(',','',$capital);
          $empresas->save();
          return $capital;
      }


    public function update(EditEmpresasRequest $request, $id){
        $emprsas=empresa::findOrFail($id);
        $emprsas->name = $request->name;
        $emprsas->name_corto = $request->name_corto;
        $emprsas->arti_id = $request->arti_id;
        $emprsas->tipo = DB::table('atributos')->where('id',$request->arti_id)->value('name');
        $emprsas->actividad = $request->actividad;
        $emprsas->direccion = $request->direccion;
        $emprsas->region_id = $request->region_id;
        $emprsas->region = DB::table('regiones')->where('id',$request->region_id)->value('name');
        $emprsas->comuna_id = $request->comuna_id;
        $emprsas->comuna = DB::table('comunas')->where('id',$request->comuna_id)->value('name');
        $emprsas->ciudad_id = $request->ciudad_id;
        $emprsas->ciudad = DB::table('ciudades')->where('id',$request->ciudad_id)->value('name');
        $emprsas->codpostal = str_replace(',','',$request->codpostal);
        $emprsas->email = $request->email;
        $emprsas->fono = $request->fono;
        $emprsas->fe_inicio = DATE_FORMAT( date_create($request->fe_inicio),"Y/m/d H:i:s");   //$request->fe_inicio;
        $emprsas->tipo_tri = $request->tipo_tri;
        $emprsas->segmento = $request->segmento;
        $emprsas->codigo = $request->codigo;
        $emprsas->giro = $request->giro;
        $emprsas->notario=$request->notario;
        $emprsas->fe_notario= DATE_FORMAT( date_create($request->fe_notario),"Y/m/d H:i:s");   //$request->fe_notario;
        $emprsas->repertorio=$request->repertorio;
        $emprsas->nro_edicion=$request->nro_edicion;
        $emprsas->fe_diario= DATE_FORMAT( date_create($request->fe_diario),"Y/m/d H:i:s");  //$request->fe_diario;
        $emprsas->reg_comercio=$request->reg_comercio;
        $emprsas->notas = $request->editor1;
        $emprsas->save();
        $message='La Empresa '.$emprsas->name.' fue Modificada';
        $title = "";
        Toastr::success($message, $title);
        return redirect()->route("empresaindex");
//      $emprsas->rut no se cambia al editar. capital y logo tienen un proceso distinto);
    }

    public function shownotas($id){
        $empresas = empresa::findOrFail($id);
        $view = 'nota';
        return view('empresas.note', compact('empresas','view'));
    }


    public function updatenota(Request $request, $id) {
        $emprsas=empresa::findOrFail($id);
        $emprsas->notas = $request->editor1;
        $emprsas->save();
        $message='La Nota de '.$emprsas->name.' fue Modificada';
        $title = "";
        Toastr::success($message, $title);
       return redirect()->route("empresaindex");

    }


    public function trash(Empresa $empresa)
    {
        $empresa->delete();
//        $empresa->profile()->delete();
        $message='El Usuario '.$empresa->name.' fue Borrado   '." <a href='empresas/restore/$empresa->id'> Click aqui </a> " .  'Para restaurar';
        $title ="";
        Toastr::success($message, $title);
        return redirect()->route('empresaindex');   //->with("deleted" , $user );
    }

    public function restore( $id )
    {
       /* //Indicamos que la busqueda se haga en los registros eliminados con withTrashed
        $user = User::withTrashed()->where('id', '=', $id)->first();
        //Restauramos el registro
        $user->restore();
        $userprofile = UserProfile::withTrashed()->where('id', '=', $id)->first();
        $userprofile->restore();
        $title = "";
        $message='El Usuario '.$user->name.' fue restaurado';
        Toastr::success($message, $title);
        return redirect()->route('users.index');*/
    }

    public function logo($id){
        $empresas=empresa::findOrFail($id);
        $view = 'logo';
        return view('empresas.note', compact('empresas','view'));

    }
    public function update_logo($id, Request $request){
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2024',
        ]);
        $empresas=empresa::findOrFail($id);
        $logoName = $empresas->id.'_logo'.time().'.'.request()->logo->getClientOriginalExtension();
        $request->logo->storeAs('logos',$logoName);
        $empresas->logo = $logoName;
        $empresas->save();
        $title = "";
        $message='Has subido exitosamente el logo.';
        Toastr::success($message, $title);
        return redirect()->route("empresaindex");
    }

    public function selecjurada($id){
        $empresas = empresa::findOrFail($id);
        $juradas = jurada::orderBy('nro_dj','ASC')->get();
        $view = 'seljurada';
        return view('empresas.note', compact('empresas','juradas', 'view'));
    }

    public function update_seljurada(Request $request, $id)
    {
        $emprsas = empresa::findOrFail($id);
        if ($request->juradas != null) {
            $emprsas->juradas()->sync($request->juradas ?: ['estado','arti_id']);
        }
        $message = 'La Declaracion Jurada de ' . $emprsas->name . ' fue Modificada';
        $title = "";
        Toastr::success($message, $title);
        return redirect()->route("empresaindex");
    }
    function export()
    {
        return Excel::download(new EmpresasExport, 'empresas.xlsx');
    }
}
