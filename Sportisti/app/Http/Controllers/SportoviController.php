<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportoviController extends Controller
{
    public function all()
    {
        $sportovi = Sport::all();

        return view('sportovi', ['sportovi' => $sportovi]);
    }


    public function create( Request $request ){
        $input = $request->all();
        $sport = Sport::create($input);
        return redirect('/sportovi');
    }


    public function edit( $id ){
        $sport = Sport::find($id);
        return view('sport',['sport'=>$sport]);
    }


    public function update( Request $request, $id ){
        $sport = Sport::find($id);
        $input = $request->all();
        $sport->update($input);
        
        return redirect('/sportovi');
    }

}
