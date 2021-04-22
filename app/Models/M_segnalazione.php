<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_segnalazione extends Model
{
    use HasFactory;
    protected $table="problema";
    /*public $timestamps = true;*/

    protected $fillable = [
      'id',
      'priorita',
      'descrizione',
      'id_utente',
      'id_tecnico',
      'id_docente',
      'id_dipartimento',
      'id_locale',
      'id_categoria',
      'stato'
    ];
  

    public function id_utente(){
      return $this->belongsTo('App\Models\M_utente', 'id_utente', 'id');
    }
    public function id_tecnico(){
      return $this->belongsTo('App\Models\M_tecnico', 'id_tecnico', 'id');
    }
    public function id_docente(){
      return $this->belongsTo('App\Models\M_personale_docente', 'id_docente', 'id');
    }
    public function id_dipartimento(){
      return $this->belongsTo('App\Models\M_dipartimento', 'id_dipartimento', 'id');
    }
    public function id_locale(){
      return $this->belongsTo('App\Models\M_locale', 'id_locale', 'id');
    }
    public function id_categoria(){
      return $this->belongsTo('App\Models\M_categoria', 'id_categoria', 'id');
    }

}

?>