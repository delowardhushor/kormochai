<?php

namespace App\Http\Controllers;

use App\Educatives;
use Illuminate\Http\Request;

class EducativesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educatives = Educatives::all();
        return view('educatives')->with(compact('educatives'));
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
        $this->validate($request, ['thumble' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',]);

        $file = $request->file('thumble');

        $name = substr(number_format(time() * rand(),0,'',''),0,6).".".$file->getClientOriginalExtension();

        $file->move('img/', $name);

        $edu = new Educatives;

        $edu->title = $request->input('title');
        $edu->thumble = $name;
        $edu->link = $request->input('link');
        $edu->save();
        return redirect()->route('educatives.index')->with('success', 'Educatives Added'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Educatives  $educatives
     * @return \Illuminate\Http\Response
     */
    public function show(Educatives $educatives)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Educatives  $educatives
     * @return \Illuminate\Http\Response
     */
    public function edit(Educatives $educatives)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Educatives  $educatives
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Educatives $educatives)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Educatives  $educatives
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $educatives = Educatives::find($request->input('id'));
        unlink('img/'.$educatives->thumble);
        $educatives->delete();
        return redirect()->route('educatives.index')->with('success', 'Educatives Deleted');
    }
}
