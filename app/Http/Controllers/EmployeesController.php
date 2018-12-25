<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;


class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "hello";
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
        $Employees = Employees::where("phone", "=", $request->input('phone'))->first();
        if($Employees == ''){
            $Employees = new Employees;
            $Employees->phone = $request->input('phone');
            $Employees->password = Hash::make($request->input('phone'));
            $Employees->refer_code = substr(number_format(time() * rand(),0,'',''),0,6);
            $Employees->save();
            
            if($request->input('refer_code')){
                $refer_Employees = Employees::where('refer_code' , '=', $request->input('refer_code'))->first();
                if($refer_Employees){
                    $refer_Employees->referred = $refer_Employees->referred + 1;
                    $refer_Employees->save();
                }
            }

            return ['success' => true, 'Employees' => $Employees];
        }else{
            return ['success' => false, 'msg' => 'Phone Number Used'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(Employees $employees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employees)
    {
        $Employees = Employees::find($request->input('id'));
        $Employees->name = $request->name;
        $Employees->age = $request->age;
        $Employees->gender = $request->gender;
        $Employees->education = $request->education;
        $Employees->address = $request->address;
        $Employees->area = $request->area;
        $Employees->post = $request->post;
        $Employees->thana = $request->thana;
        $Employees->district = $request->district;
        $Employees->save();
        return ['success' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
