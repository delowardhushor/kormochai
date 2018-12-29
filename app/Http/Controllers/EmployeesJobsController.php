<?php

namespace App\Http\Controllers;

use App\Employees_jobs;
use Illuminate\Http\Request;

use App\Jobs;
use App\Employees;

class EmployeesJobsController extends Controller
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
        $Jobs = Jobs::find($request->input('job_id'));
        $Employees = Employees::find($request->input('employees_id'));
        $Jobs->employees()->attach($Employees);

        return ['success' => true];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees_jobs  $employees_jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Employees_jobs $employees_jobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees_jobs  $employees_jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Employees_jobs $employees_jobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees_jobs  $employees_jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees_jobs $employees_jobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees_jobs  $employees_jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Jobs = Jobs::find($request->input('job_id'));
        $Employees = Employees::find($request->input('employees_id'));

        $Employees->jobs()->detach($Jobs);
        
        return 'Success';
    }
}
