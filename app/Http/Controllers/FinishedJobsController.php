<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class FinishedJobsController extends Controller
{
    //

    public function index()
    {
        $finished_jobs = Job::with('customers', 'vehicles')->where('job_done', '==', 1)->latest()->get();

        return view('finished_jobs', compact('finished_jobs'));
    }
}
