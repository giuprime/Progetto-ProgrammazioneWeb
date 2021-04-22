<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_segnalazione;
use App\Models\M_tecnico;
use Illuminate\Support\Facades\Auth;



class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $id_tecnico = M_tecnico::select('id')
        ->where('email', '=', Auth::user()->email )->first();
        
        $list_problemi = M_segnalazione::All()
        ->where('id_tecnico', '=', $id_tecnico->id);
     
        return view('dashboard', ['list_problemi'=>$list_problemi, 'layout'=>'index']);
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
        //mostra tutti i problemi in cui id_tecnico = a session
        $id_tecnico = M_tecnico::select('id')
        ->where('email', '=', Auth::user()->email )->first();
        $list_problemi = M_segnalazione::All()
        ->where('id_tecnico', '=', $id_tecnico->id);


        //mostra il problema 
        $problema = M_segnalazione::find($id);
 
        return view('dashboard', ['list_problemi'=>$list_problemi,'problema'=>$problema, 'layout'=>'edit']);

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
        $problema = M_segnalazione::find($id);
        $problema->stato = $request->input('stato');
        $problema->save();
        return redirect('/user/dashboard')->with('status', 'Stato Aggiornato!');;
  
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
