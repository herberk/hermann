<?php

namespace App\Http\Controllers;

use App\models\empresas\empresa;

use App\Models\varias\setting;
use Illuminate\Support\Facades\DB;
use Kamaln7\Toastr\Facades\Toastr;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $envs = [
            ['name' => 'PHP version',       'value' => 'PHP/'.PHP_VERSION],
            ['name' => 'Laravel version',   'value' => app()->version()],
            ['name' => 'CGI'   ,            'value' => php_sapi_name()],
            ['name' => 'Uname',             'value' => php_uname()],
            ['name' => 'Server',            'value' => array_get($_SERVER, 'SERVER_SOFTWARE')],
            ['name' => 'Cache driver',      'value' => config('cache.default')],
            ['name' => 'Session driver',    'value' => config('session.driver')],
            ['name' => 'Queue driver',      'value' => config('queue.default')],
            ['name' => 'Timezone',          'value' => config('app.timezone')],
            ['name' => 'Locale',            'value' => config('app.locale')],
            ['name' => 'Env',               'value' => config('app.env')],
            ['name' => 'URL',               'value' => config('app.url')],
        ];
        $companies = empresa::orderBy('name_corto','ASC')->get();
        $json = file_get_contents(base_path('composer.json'));
        $dependen = json_decode($json, true)['require'];
//       dd($dependen,$envs );
        return view('home',compact('envs','companies','dependen'));
    }

    public function selectstore( $id){
//       si no hay registros en la tabla no los guarda, pues no encuentra. hay que arreglar
        $Setting= \App\models\varias\Setting::findOrFail(1);
        $Setting->name = 'company';
        $Setting->val = DB::table('empresas')->where('id',$id)->value('name_corto');
        $Setting->type = 'string';
        $Setting->save();
        $Setting=Setting::findOrFail(2);
        $Setting->name = 'id_empresa';
        $Setting->val = $id;
        $Setting->type = 'int';
        $Setting->save();

        $message='La empresa '.$Setting->company.' fue seleccionada';
        $title = "";
        Toastr::success($message, $title);
        return redirect()->route("home");
    }

}
