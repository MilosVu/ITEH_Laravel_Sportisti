<?php

namespace App\Http\Controllers;

use App\Http\Resources\SportistiCollection;
use App\Models\Medalja;
use App\Models\Sport;
use App\Models\Sportista;
use App\Models\Zemlja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SportistaController extends Controller
{
    public function all()
    {
        if (auth()->user() == "") {
            return view("login");
        }

        $sportisti = Sportista::with(["medalje"])->get();
        $zemlje = Zemlja::all();
        $sportovi = Sport::all();


        return view('sportisti', ['sportisti' => new SportistiCollection($sportisti), 'zemlje' => $zemlje, 'sportovi' => $sportovi]);
    }


    public function index()
    {
        $sportisti = Sportista::all();
        $sportisti = Sportista::with(["medalje"])->get();;

        return $sportisti;
    }

    
    public function delete( $id )
    {
        $sportista = Sportista::find($id);
        $sportista->delete();
        return redirect('/sportisti');
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $sportista = Sportista::create($input);
        return redirect('/sportisti');
    }


    public function edit( $id ){
        $sportista = Sportista::find($id);

        $zemlje = Zemlja::all();
        $sportovi = Sport::all();
        return view('sportista',['sportista' => $sportista, 'zemlje' => $zemlje, 'sportovi' => $sportovi ]);
    }


    public function update(Request $request, $id)
    {
        $sportista = Sportista::find($id);
        $input = $request->all();
        $sportista->update($input);

        return redirect('/sportisti');
    }


    public function view_reprezentacije(){
        $sportisti = Sportista::all();
        $zemlje = Zemlja::all();

        return view('reprezentacije',['sportisti'=>$sportisti, 'zemlje'=>$zemlje]);
    }


    public function reprezentacije( $id_zemlje ){

        $sportisti = Sportista::with(["sport"])->get();

        $reprezentacija = [];

        foreach ($sportisti as $sportista) {
            if($sportista->zemlja->id == $id_zemlje)
                array_push( $reprezentacija, $sportista);
        }

        return response()->json(["reprezentacija" => $reprezentacija]);
    }

}
