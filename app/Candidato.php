<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    //
    protected $fillable = ['nombre'];
    
    public function votos(){
        return $this->hasMany(Voto::class);
    }
        
}
