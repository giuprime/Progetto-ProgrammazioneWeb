<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_segnalazione;
use App\Models\M_utente;
use App\Models\M_tecnico;
use Illuminate\Support\Facades\Auth;


class DirettoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $problemi = M_segnalazione::All()
        ->where('id_dipartimento', '=', Auth::user()->id)
        //se si vuole mostrare solo quelli assegnati
        ->where('id_tecnico', '=', null);

        return view('admin.dashboard', ['problemi'=>$problemi, 'layout'=>'index']);
    
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tecnico = M_tecnico::all()
        ->where('id_dipartimento', '=', Auth::user()->id);
        $problema = M_segnalazione::find($id);
        $problemi = M_segnalazione::All()
        ->where('id_dipartimento', '=', Auth::user()->id)
        ->where('id_tecnico', '=', null);

        return view('admin.dashboard', ['problema'=>$problema,'problemi'=>$problemi,'tecnico'=>$tecnico, 'layout'=>'edit']);

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
        $conta_problemi = M_segnalazione::all()
        ->where('id_dipartimento', '=', Auth::user()->id )
        ->where('id_tecnico', '=', $request->input('id_tecnico') )->count();
        if($conta_problemi < 5 ){

            $problema = M_segnalazione::find($id);
            $problema->id_tecnico = $request->input('id_tecnico');
            $problema->save();
            return redirect('/admin/dashboard');

        }else{
        
            $nome_tecnico = M_tecnico::select('nome', 'cognome' )
            ->where('id', '=', $request->input('id_tecnico'))->first();
            return redirect('/admin/dashboard/edit/' .$id)->with('status', '' .$nome_tecnico->nome .' ' .$nome_tecnico->cognome .'  è troppo Occupato! Assegna un altro tecnico!');
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
