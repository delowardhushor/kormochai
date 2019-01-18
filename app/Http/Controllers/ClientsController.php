<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::paginate(50);
        return view('clients')->with(compact('clients'));
    }

    public function login(Request $request)
    {
        $Clients = Clients::where("phone", "=", $request->input('phone'))->first();
        if($Clients == ''){
            return ['success' => false, 'msg' => 'Invalid Information'];
        }
        elseif($Clients !== '' && Hash::check($request->input('password'), $Clients->password) === true){
            return ['success' => true, 'data' => $Clients];
        }else{
            return ['success' => false, 'msg' => 'Invalid Information'];
        }
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
        $Clients = Clients::where("phone", "=", $request->input('phone'))->first();
        if($Clients == ''){
            $Clients = new Clients;
            $Clients->phone = $request->input('phone');
            $Clients->password = Hash::make($request->input('password'));
            $Clients->refer_code = substr(number_format(time() * rand(),0,'',''),0,6);
            $Clients->save();
            
            if($request->input('refer_code')){
                $refer_Clients = Clients::where('refer_code' , '=', $request->input('refer_code'))->first();
                if($refer_Clients){
                    $refer_Clients->referred = $refer_Clients->referred + 1;
                    $refer_Clients->save();
                }
            }
            return ['success' => true, 'data' => $Clients];
        }else{
            return ['success' => false, 'msg' => 'Phone Number Used'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(Clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clients $clients)
    {
        //
    }
}
