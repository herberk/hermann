<?php

namespace App\Http\Controllers;

use App\models\varias\message;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function getContact()
    {
        return view('landing.contact');
    }


    public function postContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message'=>'required'
        ]);
        message::create($request->all());
        $notification = array(
            'message' => 'Gracias! Su mensaje se guardo. Le respondere pronto',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function vermensage(){
        $messages = message::query()
//            ->withCount('message')
            ->orderBy('created_at')
            ->get();

        return view('varias.mensajes', [
            'messages' => $messages,
            'view' => 'index',
        ]);

    }
}
