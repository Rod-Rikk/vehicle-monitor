<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view('home');
    }

    public function adminIndex()
    {
        $total_jobs = DB::table('jobs')->count();
        $customers = DB::table('customers')->count();
        $vehicles = DB::table('vehicles')->count();

        $recent_jobs = Job::with('customer', 'vehicle')->where('job_done', '=', 1)->latest()->take(5)->get();

        $total_current_jobs = DB::table('jobs')->where('job_done', '=', 0)->count();

        $total_finished_jobs = DB::table('jobs')->where('job_done', '=', 1)->count();

        return view('admin.index', compact('total_jobs', 'customers', 'vehicles', 'recent_jobs', 'total_current_jobs', 'total_finished_jobs'));
    }
}
