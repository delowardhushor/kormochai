<?php

namespace App\Http\Controllers;

use App\Jobs;
use App\Employers;
use App\Employees;
use App\Cats;
use App\Locations;
use App\Educatives;
use App\Clients;
use App\Partners;
use App\Clicats;
use App\Parcats;
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
        $Jobs = new Jobs;
        $Jobs->employers_id = $request->input('employers_id');
        $Jobs->company_name = $request->input('company_name');
        $Jobs->job_title = $request->input('job_title');
        $Jobs->education = $request->input('education');
        $Jobs->salary = $request->input('salary');
        $Jobs->salary_type = $request->input('salary_type');
        $Jobs->office_hour = $request->input('office_hour');
        $Jobs->location = $request->input('location');
        $Jobs->job_responsibility = $request->input('job_responsibility');
        $Jobs->interview = $request->input('interview');
        $Jobs->interview_date = $request->input('interview_date');
        $Jobs->job_date = $request->input('job_date');
        $Jobs->job_type = $request->input('job_type');
        $Jobs->category = $request->input('category');

        $Jobs->name = $request->input('name');
        $Jobs->mobile = $request->input('mobile');
        $Jobs->area = $request->input('area');
        $Jobs->thana = $request->input('thana');
        $Jobs->zila = $request->input('zila');
        $Jobs->house = $request->input('house');
        $Jobs->salary_date = $request->input('salary_date');
        $Jobs->employee_number = $request->input('employee_number');

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
    public function show($jobs)
    {
        $Job = JObs::find($jobs);
        return view('jobdetails')->with(compact("Job"));
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
    public function update(Request $request)
    {
        $Jobs = Jobs::find($request->input('id'));
        // $Jobs->employers_id = $request->input('employers_id');
        // $Jobs->company_name = $request->input('company_name');
        // $Jobs->job_title = $request->input('job_title');
        // $Jobs->education = $request->input('education');
        // $Jobs->salary = $request->input('salary');
        // $Jobs->salary_type = $request->input('salary_type');
        // $Jobs->office_hour = $request->input('office_hour');
        // $Jobs->location = $request->input('location');
        // $Jobs->job_responsibility = $request->input('job_responsibility');
        // $Jobs->interview = $request->input('interview');
        // $Jobs->interview_date = $request->input('interview_date');
        // $Jobs->job_date = $request->input('job_date');
        // $Jobs->job_type = $request->input('job_type');
        // $Jobs->category = $request->input('category');
        $Jobs->admin_salary = $request->input('admin_salary');
        $Jobs->save();
        return redirect()->route('home');
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

    public function intervalJob(Request $request)
    {
        $myJobs = [];
        $Jobs = Jobs::all()->where('active', '=', 1);
        $Cats = Cats::all();
        $clicats = Clicats::all();
        $parcats = Parcats::all();
        $Locations = Locations::all();
        $Educatives = Educatives::orderBy('id', 'desc')->get();
        if($request->id){
            if($request->usertype == 'employees'){
                $myJobs = Employees::find($request->id)->jobs;
            }elseif($request->usertype == 'employers'){
                $myJobs = Employers::find($request->id)->jobs->where('active', '=', '1');
            }elseif($request->usertype == 'clients'){
                $myJobs = Clients::find($request->id)->services;
            }elseif($request->usertype == 'partners'){
                $myJobs = Partners::find($request->id)->services;
            }

            //$myJobs = $request->usertype == 'employees' ? Employees::find($request->id)->jobs : Employers::find($request->id)->jobs;
        }
        return ['success' => true, 'jobs' => $Jobs, 'myJobs' => $myJobs, 'cats' => $Cats , 'clicats' => $clicats , 'parcats' => $parcats , 'locations' => $Locations, 'educatives' => $Educatives];
    }
}
