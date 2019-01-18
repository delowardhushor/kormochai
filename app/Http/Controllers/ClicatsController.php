<?php

namespace App\Http\Controllers;

use App\Clicats;
use Illuminate\Http\Request;

class ClicatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clicats = Clicats::all();
        return view('clicats')->with(compact('clicats'));
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
        $clicats = new Clicats;
        $clicats->cat = $request->input('cat');
        $clicats->question = "[]";
        $clicats->save();
        return redirect()->route('clicats.index')->with('success', 'Category Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clicats  $clicats
     * @return \Illuminate\Http\Response
     */
    public function show(Clicats $clicats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clicats  $clicats
     * @return \Illuminate\Http\Response
     */
    public function edit(Clicats $clicats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clicats  $clicats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clicats $clicats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clicats  $clicats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $clicats = Clicats::find($request->input('id'));
        $clicats->delete();
        return redirect()->route('clicats.index')->with('success', 'Category Deleted'); 
    }
}
