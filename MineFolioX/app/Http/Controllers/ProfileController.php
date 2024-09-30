<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view ('pages.Profile.index');
    }

    public function show(){
        return view('pages.Profile.show');
    }

    public function form() {
        return view('pages.Profile.form');
    }
}
