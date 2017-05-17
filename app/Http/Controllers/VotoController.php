<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;
use App\Voto;

class VotoController extends Controller
{
    //
    public function create(){
        $candidatos = Candidato::all();
        return view('votos',compact('candidatos'));
    }
    
    public function store(){
        $voto = Voto::create([
           'candidato_id'  => request('candidato')
        ]);
        
        return redirect()->home();
    }
}
