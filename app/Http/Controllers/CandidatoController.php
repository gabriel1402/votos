<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;
use App\Voto;

class CandidatoController extends Controller
{
    //
    public function create(){
        return view('create');
    }
    public function store(){
        $candidato = Candidato::create([
           'nombre'  => request('nombre')
        ]);
        
        return redirect()->home();
    }
    
    public function show(){
        $candidatos = Candidato::all();
        $votos = Voto::all();
        return view('index',compact('candidatos','votos'));
    }
}

