<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_personale_docente extends Model
{
    use HasFactory;

    protected $table="personale_docente";
    /*public $timestamps = true;*/

    protected $fillable = [
      'id',
      'nome',
      'cognome',
      'email',
      'numero_di_telefono',
      'id_locale'
    ];

    public function addpersonaledocente(){
      return $this->hasOne('App\Models\M_segnalazione', 'id_docente', 'id');
  } 
}
