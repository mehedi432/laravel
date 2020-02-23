<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getHome()
    {
        # code...
        return view('home');
    }

    public function getContact()
    {
        # code...
        return view('contact');
    }

    public function getAbout()
    {
        # code...
        return view('about');
    }

    public function getLanding()
    {
        # code...
        return view('welcome');
    }
}
