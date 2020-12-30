<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\User;
use App\Models\Etat;
use Illuminate\Http\Request;
use App\Mail\MailRefus;
use App\Mail\MailAccepter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Inscription::all();
        return view('pages.adminInscription',compact('datas'));
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
        $newEntry = new Inscription;
        $etat = Etat::all();
        $newEntry->nom = $request->nom;
        $newEntry->prenom = $request->prenom;
        $newEntry->email = $request->email;
        $newEntry->etat_id = $etat[0]->id;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $accepter = new User;
        $etat = Etat::all();
        $inscrit = Inscription::find($id);
        Mail::to($inscrit->email)->send(new MailAccepter($id));
        $accepter->name = $inscrit->nom;
        $accepter->email = $inscrit->email;
        $accepter->etat_id = $etat[1]->id;
        $accepter->password = Hash::make($inscrit->email); 
        $accepter->save();
        $inscrit->delete();
        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteDemande = Inscription::find($id);
        Mail::to($deleteDemande->email)->send(new MailRefus());
        $deleteDemande->delete();
        return redirect()->back();
    }
}
