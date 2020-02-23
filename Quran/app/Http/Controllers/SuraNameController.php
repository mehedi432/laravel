<?php

namespace App\Http\Controllers;

use App\Sura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SuraNameController extends Controller
{
    //
    public function index()
    {
        # code...
        $sura_names = Sura::all('sura_name');

        return $sura_names;
    }
}
