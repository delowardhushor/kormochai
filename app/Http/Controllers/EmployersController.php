<?php

namespace App\Http\Controllers;

use App\Employers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $Employers = Employers::where("phone", "=", $request->input('phone'))->first();
        if($Employers == ''){
            $Employers = new Employers;
            $Employers->phone = $request->input('phone');
            $Employers->password = Hash::make($request->input('phone'));
            $Employers->refer_code = substr(number_format(time() * rand(),0,'',''),0,6);
            $Employers->save();

            if($request->input('refer_code')){
                $refer_Employers = Employers::where('refer_code' , '=', $request->input('refer_code'))->first();
                if($refer_Employers){
                    $refer_Employers->referred = $refer_Employers->referred + 1;
                    $refer_Employers->save();
                }
            }

            return ['success' => true, 'data' => $Employers];
        }else{
            return ['success' => false, 'msg' => 'Phone Number Used'];
        }
    }

    public function login(Request $request)
    {
        $Employers = Employers::where("phone", "=", $request->input('phone'))->first();
        if($Employers == ''){
            return ['success' => false, 'msg' => 'Invalid Information'];
        }elseif(Hash::check($request->input('password'), $Employers->password) == true){
            return ['success' => true, 'data' => $Employers];
        }else{
            return ['success' => false, 'msg' => 'Invalid Information'];
        }
    }

    public function exist(Request $request)
    {
        $Employers = Employers::where("phone", "=", $request->input('phone'))->first();
        if($Employers == ''){
            return ['success' => false];
        }else{
            return ['success' => true];
        }
    }

    public function cngpass(Request $request){
        $Employers = Employers::where("phone", "=", $request->input('phone'))->first();
        if($Employers == ''){
           return "Are You Hacker"; 
        }else{
            $Employers->password = Hash::make($request->input('password'));
            $Employers->save();
            return ['success' => true, 'data' => $Employers];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employers  $employers
     * @return \Illuminate\Http\Response
     */
    public function show(Employers $employers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employers  $employers
     * @return \Illuminate\Http\Response
     */
    public function edit(Employers $employers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employers  $employers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employers $employers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employers  $employers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employers $employers)
    {
        //
    }
}
