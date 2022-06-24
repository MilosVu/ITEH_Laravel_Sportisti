<?php

namespace App\Http\Controllers;

use App\Models\Medalja;
use Illuminate\Http\Request;

class MedaljaController extends Controller
{
    public function find( $sportista_id ){
        $medalje = Medalja::all();

        $arr = [];

        foreach ($medalje as $m){

            if( $m->sporitsta_id == $sportista_id){
                array_push( $arr, $m);
            }
        }

        return $arr;
    }

    public function all()
    {
        $medalje = Medalja::all();
        return $medalje;
    }
}
