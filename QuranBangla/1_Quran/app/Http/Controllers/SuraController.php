<?php

namespace App\Http\Controllers;

use App\Sura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suras = DB::table('suras')->orderBy('id')->get();

        return view('sura.index', ['suras' => $suras]);
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
     * @param  \App\Sura  $sura
     * @return \Illuminate\Http\Response
     */
    public function show(Sura $sura)
    {
        $sura = DB::table('suras')->find($sura->id);

        $sura_text = DB::table('bn_bengali')->where('sura', $sura->id)->get();
        return view('sura.read', ['sura' => $sura, 'sura_text' => $sura_text]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sura  $sura
     * @return \Illuminate\Http\Response
     */
    public function edit(Sura $sura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sura  $sura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sura $sura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sura  $sura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sura $sura)
    {
        //
    }
}
