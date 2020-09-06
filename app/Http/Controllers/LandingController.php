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
    public function personal_accident(){
        return view('site.pages.personal.accident');
    }
    public function personal_family(){
        return view('site.pages.personal.family');
    }
    public function personal_travel(){
        return view('site.pages.personal.travel');
    }


    public function commercial_motor(){
        return view('site.pages.commercial.motor');
    }
    public function commercial_accident(){
        return view('site.pages.commercial.accident');
    }
    public function commercial_fire(){
        return view('site.pages.commercial.fire');
    }
    public function commercial_flood(){
        return view('site.pages.commercial.flood');
    }
    
    public function contacts(){
        return view('site.pages.contacts');
    }
}
