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

    public function addqus(Request $request){
        $parcats = Parcats::find($request->input('id'));
        $questions = json_decode($parcats->question, true);
        $addarray = array("qus"=>$request->input('question'), "ans"=> "");
        array_push($questions, $addarray);
        $parcats->question = json_encode($questions);
        $parcats->save();
        return view('parcatsdetails')->with(compact('parcats'));
    }

    public function delqus(Request $request){
        $parcats = Parcats::find($request->input('id'));
        $questions = json_decode($parcats->question, true);
        array_splice($questions, $request->input('index'), 1);
        $parcats->question = json_encode($questions);
        $parcats->save();
        return view('parcatsdetails')->with(compact('parcats'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parcats  $parcats
     * @return \Illuminate\Http\Response
     */
    public function show($parcats)
    {
        $parcats = Parcats::find($parcats);
        return view('parcatsdetails')->with(compact('parcats'));
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
