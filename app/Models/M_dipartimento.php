<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_dipartimento extends Model
{
    use HasFactory;

    protected $table = "dipartimento";

    protected $fillable = [
    'id',
    'nome',
    'CAP',
    'numero_civico',
    'via',
    'citta',
    'provincia',
    'id_direttore'
    ];

    public function adddipartimento(){
        return $this->hasOne('App\Models\M_segnalazione', 'id_dipartimento', 'id');
    } 

    /*public function numero(){
        $dipartimenti = M_dipartimento::all();
        foreach($dipartimenti as $dipa){
            return M_segnalazione::where('id_dipartimento', '=', $dipa->id)->count();
        };
    }*/
}
