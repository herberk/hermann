<?php

namespace App\Http\Controllers\tablas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tablas\giros;

use Maatwebsite\Excel\Excel;

class girosController extends Controller
{
    public function giros(Request $request){

         $giros = Giros::filterAndPaginate($request->get('name'),  $request->get('type'), $request->get('codigo'));
/*       $giros = Giros::with('girosbs')
           ->orderBy('girosbs_id',$request)
           ->paginate(10);
    dd($giros);*/
        $view = 'index';

        return view('tablas.giros.index',compact( 'giros','view'));
    }


    function export()
    {
       return view('shared._enconstrucion');
/*
        return Excel::download(new GirosExport, 'giros.xlsx');
*/
    }

}
