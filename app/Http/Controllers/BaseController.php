<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function base(){
        return view ('frontend.home');
    }
}
