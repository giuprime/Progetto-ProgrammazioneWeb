<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_categoria;
use App\Models\M_dipartimento;
use App\Models\M_locale;
use App\Models\M_segnalazione;
use App\Models\M_personale_docente;
use App\Models\M_utente;
use App\Http\Resources\ApiResource;

class ApiSegnalazioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = M_categoria::all();
        $dipa = M_dipartimento::all();
        $locale = M_locale::all();
        
        return ApiResource::collection([$cat, $dipa, $locale]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $segnalazione = new M_segnalazione();
    $utente = new M_utente();

    $verify_email = M_personale_docente::select('email')
    ->where('email', '=',$request->email)->first();

    if($verify_email == null )
    {

    $utente->nome = $request->nome;
    $utente->cognome = $request->cognome;
    $utente->email = $request->email;
    $utente->numero_di_telefono = $request->numero_di_telefono;
    $segnalazione->priorita = $request->priorita;
    $segnalazione->descrizione = $request->descrizione;
    $salva_utente = $utente->save() && $utente->addres()->save($segnalazione);

    }else{
        
    $id_docente = M_personale_docente::select('id')
    ->where('email', '=',$request->email )->first();
    $segnalazione->priorita = $request->priorita;
    $segnalazione->descrizione = $request->descrizione;
    $salva_utente = $id_docente->addpersonaledocente()->save($segnalazione);
    }

    $categoria = M_categoria::select('id') 
    ->where('classificazione', '=', $request->id_categoria)->first();
    
    $dipartimento = M_dipartimento::select('id') 
    ->where('nome', '=', $request->id_dipartimento)->first();


    $arr_locale = explode(' ',$request->id_locale);
    if(count($arr_locale) == 2){
        $aula = M_locale::select('id')
        ->where('tipologia', '=', $arr_locale[0], 'and')
        ->where('numero', '=', $arr_locale[1], 'and')
        ->where('id_dipartimento', '=', $dipartimento->id)->first();
    }else{
        $aula = M_locale::select('id')
        ->where('tipologia', '=', $arr_locale[0], 'and')
        ->where('classificazione', '=', $arr_locale[1], 'and')
        ->where('numero', '=', $arr_locale[2], 'and')
        ->where('id_dipartimento', '=', $dipartimento->id)->first();
    }
    
    if( $segnalazione->save() && 
        $salva_utente &&
        $categoria->addcategory()->save($segnalazione) &&
        $dipartimento->adddipartimento()->save($segnalazione) &&
        $aula->addlocale()->save($segnalazione)  )
    {
        return new ApiResource($segnalazione, $utente);
    }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $segnalazione = M_segnalazione::findOrFail($id);

        return new ApiResource($segnalazione);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $segnalazione = M_segnalazione::findOrFail($id);

        $utente = M_utente::findOrFail($id);

        $utente->nome = $request->nome;
        $utente->cognome = $request->cognome;
        $utente->email = $request->email;
        $utente->numero_di_telefono = $request->numero_di_telefono;


        $segnalazione->priorita = $request->priorita;
        $segnalazione->descrizione = $request->descrizione;
        $segnalazione->id_categoria = $request->id_categoria;
        $segnalazione->id_dipartimento = $request->id_dipartimento;
        $segnalazione->id_locale = $request->id_locale;
        

        if($segnalazione->save() && $utente->save())
        {
            return new ApiResource($segnalazione, $utente);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
