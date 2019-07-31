<?php

namespace App\Http\Controllers\Empresas;

use App\Models\empresas\Capital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CapitalController extends Controller
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
        return "hola";
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Capital  $capital
     * @return \Illuminate\Http\Response
     */
    public function show(Capital $capital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Capital  $capital
     * @return \Illuminate\Http\Response
     */
    public function edit(Capital $capital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Capital  $capital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Capital $capital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Capital  $capital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Capital $capital)
    {
        //
    }
}
