<?php

namespace App\Http\Controllers;

use App\Models\demandePc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailPcAccepter;
use App\Mail\MailPcRefus;
use Illuminate\Support\Facades\Auth;


class DemandePcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = demandePc::all();
        return view('pages.adminPc',compact('datas'));
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
        $newEntry = new demandePc;
        $newEntry->raison = $request->raison;
        $newEntry->user_id = auth::user()->id;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\demandePc  $demandePc
     * @return \Illuminate\Http\Response
     */
    public function show(demandePc $demandePc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\demandePc  $demandePc
     * @return \Illuminate\Http\Response
     */
    public function edit(demandePc $demandePc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\demandePc  $demandePc
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $accepter = demandePc::find($id);
        Mail::to($accepter->pc->email)->send(new MailPcAccepter());
        $accepter->statut = 'obtenue'; 
        $accepter->save();
        return redirect()->back(); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\demandePc  $demandePc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteDemande = demandePc::find($id);
        Mail::to($deleteDemande->pc->email)->send(new MailPcRefus());
        $deleteDemande->delete();
        return redirect()->back();
    }
}
