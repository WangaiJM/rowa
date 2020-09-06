<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('site.pages.index');
    }
    public function about(){
        return view('site.pages.about');
    }

    public function personal_motor(){
        return view('site.pages.personal.motor');
    }
    public function personal_travel(){
        return view('site.pages.personal.travel');
    }
    public function health(){
        return view('site.pages.personal.health');
    }



    public function commercial_motor(){
        return view('site.pages.commercial.motor');
    }
    public function wiba(){
        return view('site.pages.commercial.wiba');
    }
    
    public function contacts(){
        return view('site.pages.contacts');
    }
}
