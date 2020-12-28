<?php

namespace App\Http\Controllers;

use App\Models\Banniere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BanniereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bannieres=Banniere::all();
        return view('admin.banniere.banniere',compact('bannieres'));
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
     * @param  \App\Models\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function show(Banniere $banniere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banniere=Banniere::find($id);
        return view('admin.banniere.edit',compact('banniere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Banniere::find($id);
        $update->image = $request->file('image')->hashName();
        $update->save();
        $request->file('image')->storePublicly('images', 'public');
        Storage::disk('public')->delete('images/' . $update->photo);
        return redirect('/banniere');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banniere $banniere)
    {
        //
    }
}
