<?php

namespace App\Http\Controllers;

use App\Parcats;
use Illuminate\Http\Request;

class ParcatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcats = Parcats::all();
        return view('parcats')->with(compact('parcats'));
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
        $parcats = new Parcats;
        $parcats->cat = $request->input('cat');
        $parcats->question = "[]";
        $parcats->save();
        return redirect()->route('parcats.index')->with('success', 'Category Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parcats  $parcats
     * @return \Illuminate\Http\Response
     */
    public function show(Parcats $parcats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parcats  $parcats
     * @return \Illuminate\Http\Response
     */
    public function edit(Parcats $parcats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parcats  $parcats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parcats $parcats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parcats  $parcats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $parcats = Parcats::find($request->input('id'));
        $parcats->delete();
        return redirect()->route('parcats.index')->with('success', 'Category Deleted'); 
    }
}
