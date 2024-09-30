<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show(){
        return view ('pages.Explore.detail');
    }

    public function index (){
        return view('pages.Explore.index');
    }
}
