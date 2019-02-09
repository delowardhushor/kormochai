<?php

namespace App\Http\Controllers;

use App\Clientservices;
use Illuminate\Http\Request;

class ClientservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientservices = Clientservices::orderBy('id', 'desc')->paginate(50);
        return view('clientservices')->with(compact("clientservices"));
    }

    public function print($id){
        $clientservices = Clientservices::find($id);
        return view('print.servicereq')->with(compact("clientservices"));
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
        $clientservices = new Clientservices;
        $clientservices->clients_id = $request->input('clients_id');
        $clientservices->name = $request->input('name');
        $clientservices->phone = $request->input('phone');
        $clientservices->service = $request->input('service');
        $clientservices->area = $request->input('area');
        $clientservices->thana = $request->input('thana');
        $clientservices->district = $request->input('district');
        $clientservices->house = $request->input('house');

        $clientservices->service_date = $request->input('service_date');
        $clientservices->min = $request->input('min');
        $clientservices->hour = $request->input('hour');
        $clientservices->ampm = $request->input('ampm');
        
        $clientservices->save();
        return ['success' => true];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientservices  $clientservices
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientservices = Clientservices::find($id);
        return view('servicerequestdetails')->with(compact("clientservices"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientservices  $clientservices
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientservices $clientservices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientservices  $clientservices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientservices $clientservices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientservices  $clientservices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientservices $clientservices)
    {
        //
    }
}
