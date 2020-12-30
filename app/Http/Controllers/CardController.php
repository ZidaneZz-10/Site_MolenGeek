<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards=Card::all();
        return view('admin.cards.cards',compact('cards'));
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
        $card = new Card;
        $card->image = $request->file('image')->hashName();
        $card->titre = $request->titre;
        $card->description = $request->description;
        $card->save();
        $request->file('image')->storePublicly('images', 'public');
        return redirect('/card');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card=Card::find($id);
        return view('admin.cards.edit',compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Card::find($id);
        $update->image = $request->file('image')->hashName();
        $update->titre=$request->titre;
        $update->description=$request->description;
        $update->save();
        $request->file('image')->storePublicly('images', 'public');
        Storage::disk('public')->delete('images/' . $update->photo);
        return redirect('/card');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Card::find($id);
        Storage::disk('public')->delete('images/' . $delete->image);
        $delete->delete();
        return redirect()->back();
    }
}
