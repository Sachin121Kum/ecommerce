<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function base(){

        return view ('frontend.home');
    }

    public function specialOffer(){

        return view ('frontend.specialoffer');
    }

    public function delivery(){

        return view ('frontend.delivery');
    }

    public function contact(){
        
        return view ('frontend.contact');
    }
}
