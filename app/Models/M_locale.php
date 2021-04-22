<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_locale extends Model
{
    use HasFactory;
    protected $table="locale";
    /*public $timestamps = true;*/

    protected $fillable = [
      'id',
      'tipologia',
      'classificazione',
      'numero',
      'id_dipartimento'
    ];

    public function addlocale(){
      return $this->hasOne('App\Models\M_segnalazione', 'id_locale', 'id');
  } 

}
