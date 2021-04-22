<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_segnalazione;


class MappaController extends Controller
{
    public function index()
    {
        $mappa = M_segnalazione::all();

        $dipa1 = M_segnalazione::all()
        ->where('id_dipartimento', '=', 1 )->count();
        $dipa2 = M_segnalazione::all()
            ->where('id_dipartimento', '=', 2 )->count();
        $dipa3 = M_segnalazione::all()
        ->where('id_dipartimento', '=', 3 )->count();
        $dipa4 = M_segnalazione::all()
        ->where('id_dipartimento', '=', 4 )->count();
        $dipa5 = M_segnalazione::all()
            ->where('id_dipartimento', '=', 5 )->count();
        $dipa6 = M_segnalazione::all()
        ->where('id_dipartimento', '=', 6 )->count(); 
        $dipa7 = M_segnalazione::all()
        ->where('id_dipartimento', '=', 7 )->count();
        $dipa8 = M_segnalazione::all()
            ->where('id_dipartimento', '=', 8 )->count();
        $dipa9 = M_segnalazione::all()
        ->where('id_dipartimento', '=', 9 )->count();
        $dipa10 = M_segnalazione::all()
        ->where('id_dipartimento', '=', 10 )->count();
        $dipa11 = M_segnalazione::all()
            ->where('id_dipartimento', '=', 11 )->count();
        $dipa12 = M_segnalazione::all()
        ->where('id_dipartimento', '=', 12 )->count();

       
        return view('mappa', compact('dipa1', 'dipa2', 'dipa3', 'dipa4','dipa5', 'dipa6','dipa7', 'dipa8','dipa9', 'dipa10', 'dipa11', 'dipa12'));
    }
}
