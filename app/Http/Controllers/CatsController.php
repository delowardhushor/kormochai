<?php

namespace App\Http\Controllers;

use App\Cats;
use Illuminate\Http\Request;

class CatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Cats::all();
        return view('cats')->with(compact('cats'));
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
        $cats = new Cats;
        $cats->cat = $request->input('cats');
        $cats->save();
        return redirect()->route('cats.index')->with('success', 'Category Added'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cats  $cats
     * @return \Illuminate\Http\Response
     */
    public function show(Cats $cats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cats  $cats
     * @return \Illuminate\Http\Response
     */
    public function edit(Cats $cats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cats  $cats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cats $cats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cats  $cats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cats = Cats::find($request->input('id'));
        $cats->delete();
        return redirect()->route('cats.index')->with('success', 'Category Deleted'); 
    }
}
