<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    //
    protected $fillable = ['candidato_id'];
    
    public function candidato(){
        return $this->belongsTo(Candidato::class);
    }
}
