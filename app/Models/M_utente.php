<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_utente extends Model
{
  use HasFactory;

  protected $table="utente";
  protected $fillable = [
    'id',
    'nome',
    'cognome',
    'email',
    'numero_di_telefono'
  ];

  
  public function addres(){
    return $this->HasMany('App\Models\M_segnalazione', 'id_utente', 'id');
  }
//qua prima c'era adderes ()  hasmany


}
?>