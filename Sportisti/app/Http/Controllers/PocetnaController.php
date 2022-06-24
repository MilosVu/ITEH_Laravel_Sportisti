<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PocetnaController extends Controller
{
    public function pocetnaView()
    {
        if (auth()->user() == "") {
            return view("login");
        }
        else{
            return view('pocetna');
        }
    }
}
