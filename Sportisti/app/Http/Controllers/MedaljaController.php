<?php

namespace App\Http\Controllers;

use App\Models\Medalja;
use App\Models\Sport;
use App\Models\Sportista;
use App\Models\Zemlja;
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

    public function edit( $id ){
        $sportista = Sportista::find($id);

        $zemlje = Zemlja::all();
        $sportovi = Sport::all();
        return view('medalja',['sportista' => $sportista, 'zemlje' => $zemlje, 'sportovi' => $sportovi ]);
    }

    public function create(Request $request)
    {
        // return response()->json($request);
        $input = $request->all();
        $medalja = Medalja::create(["sportista_id" => $request->sportista_id, "takmicenje" => $request->takmicenje, "godina" => $request->godina]);
        return redirect('/sportisti');
    }


}
