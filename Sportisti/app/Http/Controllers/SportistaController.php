<?php

namespace App\Http\Controllers;

use App\Http\Resources\SportistiCollection;
use App\Models\Sportista;
use App\Models\Zemlja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SportistaController extends Controller
{
    public function all()
    {
        $sportisti = Sportista::all();
        $zemlje = Zemlja::all();

        return view('sportisti', ['sportisti' => new SportistiCollection($sportisti), 'zemlje' => $zemlje]);
    }


    public function index()
    {
        $sportisti = Sportista::all();
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
        return view('sportista',['sportista' => $sportista]);
    }


    // public function store(Request $request)
    // {

    //     $politician = Politician::create([
    //         'first_name' => $request->first_name,
    //         'last_name' => $request->last_name,
    //         'gender' => $request->gender,
    //         'political_party_id' => $request->political_party_id
    //     ]);

    //     return $politician;

    // }


    // public function show(Politician $politician)
    // {
    //     return new PoliticianResource($politician);
    // }

    // public function update(Request $request, $id)
    // {
    //     $politician = Politician::find($id);
    //     $input = $request->all();
    //     $politician->update($input);

    //     return $politician;
    // }

}
