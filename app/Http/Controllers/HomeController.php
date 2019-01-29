<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\Http\Resources\Jobs as JobResource;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Jobs = JobResource::collection(Jobs::where('active', '=', 1)->orderBy('id', 'desc')->paginate(50));
        return view('home')->with(compact("Jobs"));
    }

    public function pendingjob()
    {
        $Jobs = JobResource::collection(Jobs::where('active', '=', 0)->orderBy('id', 'desc')->paginate(50));
        return view('home')->with(compact("Jobs"));
    }
}
