<?php

namespace App\Http\Controllers;

use App\Sura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suras = DB::table('suras')->orderBy('id')->get();
        return view('sura.sura_ar', ['suras' => $suras]);
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
        // $sura = DB::table('suras')->find($sura->id);
        $sura_arab = DB::table('quranar')->find($sura->id);
        dd($sura_arab);
        $sura_text_arab = DB::table('quranar')->where('SuraIdAr', $sura)->get();

        // dd($sura_text_arab);

        return view('sura.read', ['sura' => $sura, 'sura_text_arab' => $sura_text_arab]);
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
