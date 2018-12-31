<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;

use App\Http\Resources\Jobs as JobResource;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Jobs = Jobs::all();
        return JobResource::collection($Jobs);
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
        $Jobs = new Jobs;
        $Jobs->employers_id = $request->input('employers_id');
        $Jobs->company_name = $request->input('company_name');
        $Jobs->job_title = $request->input('job_title');
        $Jobs->education = $request->input('education');
        $Jobs->salary = $request->input('salary');
        $Jobs->office_hour = $request->input('office_hour');
        $Jobs->location = $request->input('location');
        $Jobs->job_responsibility = $request->input('job_responsibility');
        $Jobs->interview = $request->input('interview');
        $Jobs->interview_date = $request->input('interview_date');
        $Jobs->job_date = $request->input('job_date');
        $Jobs->job_type = $request->input('job_type');
        $Jobs->job_type = $request->input('category');
        if($Jobs->save()){
            return ['success' => true, 'Jobs' => $Jobs];
        }else{
            return ['success' => false, 'msg' => 'Fill Empty'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $jobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $jobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs)
    {
        $Jobs = Jobs::find($jobs);
        $Jobs->employers_id = $request->input('employers_id');
        $Jobs->company_name = $request->input('company_name');
        $Jobs->job_title = $request->input('job_title');
        $Jobs->education = $request->input('education');
        $Jobs->salary = $request->input('salary');
        $Jobs->office_hour = $request->input('office_hour');
        $Jobs->location = $request->input('location');
        $Jobs->job_responsibility = $request->input('job_responsibility');
        $Jobs->interview = $request->input('interview');
        $Jobs->interview_date = $request->input('interview_date');
        $Jobs->job_date = $request->input('job_date');
        $Jobs->job_type = $request->input('job_type');
        $Jobs->job_type = $request->input('category');
        if($Jobs->save()){
            return ['success' => true, 'Jobs' => $Jobs];
        }else{
            return ['success' => false, 'msg' => 'Fill Empty'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $jobs)
    {
        //
    }
}
