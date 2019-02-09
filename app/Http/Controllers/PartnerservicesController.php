<?php

namespace App\Http\Controllers;

use App\Partnerservices;
use Illuminate\Http\Request;

class PartnerservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partnerservices = Partnerservices::orderBy('id', 'desc')->paginate(50);
        return view('partnerservices')->with(compact("partnerservices"));
    }

    public function print($id){
        $partnerservices = Partnerservices::find($id);
        return view('print.service')->with(compact("partnerservices"));
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
        $partnerservices = new Partnerservices;
        $partnerservices->partners_id = $request->input('partners_id');
        $partnerservices->name = $request->input('name');
        $partnerservices->phone = $request->input('phone');
        $partnerservices->company_name = $request->input('company_name');
        //$partnerservices->service = $request->input('service');
        $partnerservices->per_area = $request->input('per_area');
        $partnerservices->per_thana = $request->input('per_thana');
        $partnerservices->per_district = $request->input('per_district');
        $partnerservices->per_house = $request->input('per_house');
        $partnerservices->pre_area = $request->input('pre_area');
        $partnerservices->pre_thana = $request->input('pre_thana');
        $partnerservices->pre_district = $request->input('pre_district');
        $partnerservices->pre_house = $request->input('pre_house');
        $partnerservices->profession = $request->input('profession');
        $partnerservices->save();
        return ['success' => true];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partnerservices  $partnerservices
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partnerservices = Partnerservices::find($id);
        return view('servicedetails')->with(compact("partnerservices"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partnerservices  $partnerservices
     * @return \Illuminate\Http\Response
     */
    public function edit(Partnerservices $partnerservices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partnerservices  $partnerservices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partnerservices $partnerservices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partnerservices  $partnerservices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partnerservices $partnerservices)
    {
        //
    }
}
