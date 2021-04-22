<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_direttore extends Model
{
    use HasFactory;
    protected $table="direttore";
    /*public $timestamps = true;*/

    protected $fillable = [
      'id',
      'nome',
      'cognome',
      'email',
      'numero_di_telefono',
      'inizio_mandato',
      'fine_mandato'
    ];
   
}
