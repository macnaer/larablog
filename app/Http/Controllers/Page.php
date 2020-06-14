<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function teachers ( ){
        return view('pages.teachers');
    }
}
