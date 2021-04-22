<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_tecnico extends Model
{
    use HasFactory;

    protected $table="tecnico";
    protected $fillable = [
      'id',
      'nome',
      'cognome',
      'email',
      'numero_di_telefono',
      'inizio_contratto',
      'fine_contratto',
      'specializzazione',
      'id_dipartimento'
    ];
}


