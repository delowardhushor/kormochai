<?php

namespace App\Http\Controllers;

use App\Partners;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;


class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partners::paginate(50);
        return view('partners')->with(compact('partners'));
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

    public function login(Request $request)
    {
        $Partners = Partners::where("phone", "=", $request->input('phone'))->first();
        if($Partners == ''){
            return ['success' => false, 'msg' => 'Invalid Information'];
        }
        elseif($Partners !== '' && Hash::check($request->input('password'), $Partners->password) === true){
            return ['success' => true, 'data' => $Partners];
        }else{
            return ['success' => false, 'msg' => 'Invalid Information'];
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Partners = Partners::where("phone", "=", $request->input('phone'))->first();
        if($Partners == ''){
            $Partners = new Partners;
            $Partners->phone = $request->input('phone');
            $Partners->password = Hash::make($request->input('password'));
            $Partners->refer_code = substr(number_format(time() * rand(),0,'',''),0,6);
            $Partners->save();
            
            if($request->input('refer_code')){
                $refer_Partners = Partners::where('refer_code' , '=', $request->input('refer_code'))->first();
                if($refer_Partners){
                    $refer_Partners->referred = $refer_Partners->referred + 1;
                    $refer_Partners->save();
                }
            }
            return ['success' => true, 'data' => $Partners];
        }else{
            return ['success' => false, 'msg' => 'Phone Number Used'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function show(Partners $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function edit(Partners $partners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partners $partners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partners $partners)
    {
        //
    }
}
