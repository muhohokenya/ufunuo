<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function company(){
        return view('company');
    }

    public function projects(){
        return view('projects');
    }

    public function services(){
        return view('services');
    }

    public function real_estate(){
        return view('real_estate');
    }

    public function hardware(){
        return view('hardware');
    }

    public function faq(){
        return view('faq');
    }

    public function contact(){
        return view('contact');
    }
}
