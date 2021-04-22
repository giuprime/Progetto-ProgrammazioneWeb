<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_categoria extends Model
{
    use HasFactory;

    protected $table = "categoria";

    protected $fillable = [
        'id',
        'classificazione'
    ];
    
    public function addcategory(){
        return $this->hasOne('App\Models\M_segnalazione', 'id_categoria', 'id');
    
    }   
}
?>