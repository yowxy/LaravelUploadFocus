<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index(){
        echo 'Halo ini controller';
    }

    function world(){
        echo 'ini adalah controller';
    }
}
