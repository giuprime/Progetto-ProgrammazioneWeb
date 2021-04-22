<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_segnalazione;
use App\Models\M_utente;
use App\Models\M_categoria;
use App\Models\M_dipartimento;
use App\Models\M_locale;
use App\Models\M_personale_docente;


class SegnalazioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = M_categoria::select('id','classificazione')->get();
        $dipa = M_dipartimento::select('id','nome')->get();
        $locale = M_locale::select('tipologia', 'classificazione','numero')->distinct()->get();
      
        return view('welcome', compact('dipa','cat','locale'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fillable = M_segnalazione::all();
        return view('welcome', ['inserisci'=>$fillable, 'layout'=>'create']);
        
        $fillable1 = M_utente::all();
        return view('welcome', ['inserisci'=>$fillable1, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $segnlazione = new M_segnalazione;
        $utente = new M_utente;

        $cat = $request->get('classificazione');
        $id_categoria = M_categoria::find($cat);

        $dipa = $request->get('dipartimento');
        $id_dipartimento = M_dipartimento::find($dipa);
    
        $arr_locale = explode(' ',$request->get('locale'));
        if(count($arr_locale) == 2){
            $id_locale = M_locale::select('id')
            ->where('tipologia', '=', $arr_locale[0], 'and')
            ->where('numero', '=', $arr_locale[1], 'and')
            ->where('id_dipartimento', '=', $id_dipartimento->id)->first();
        }else{
            $id_locale = M_locale::select('id')
            ->where('tipologia', '=', $arr_locale[0], 'and')
            ->where('classificazione', '=', $arr_locale[1], 'and')
            ->where('numero', '=', $arr_locale[2], 'and')
            ->where('id_dipartimento', '=', $id_dipartimento->id)->first();
        }

        $segnlazione-> priorita = $request->input('priorita');
        $segnlazione-> descrizione = $request->input('descrizione');
        $segnlazione->save();


        $verify_email = M_personale_docente::select('email')
        ->where('email', '=',$request->get('email') )->first();

        if($verify_email == null ){
            
        $utente-> nome = $request->input('nome'); 
        $utente-> cognome = $request->input('cognome'); 
        $utente-> email = $request->input('email'); 
        $utente-> numero_di_telefono = $request->input('numero_di_telefono');
        
        $utente->save();
        $utente->addres()->save($segnlazione);

        }else{
            $id_docente = M_personale_docente::select('id')
            ->where('email', '=',$request->get('email') )->first();
            $id_docente->addpersonaledocente()->save($segnlazione);
        }
     
        $id_categoria->addcategory()->save($segnlazione);
        $id_dipartimento->adddipartimento()->save($segnlazione);
        $id_locale->addlocale()->save($segnlazione);

        return redirect('/')->with('status', 'Segnalazione Aggiunta! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   
    }
}


?>