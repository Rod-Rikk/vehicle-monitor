<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class FinishedJobsController extends Controller
{
    //

    public function index()
    {
        $jobs = Job::with('customer', 'vehicle')->where('job_done', '=', 1)->latest()->get();


        return view('admin.finished-jobs', compact('jobs'));
    }

    public function show(Job $job){
        return view('admin.finished-jobs',compact('job'));
    }

    public function edit(Job $job){
        return view('admin.edit-finished-job',compact('job'));
    }

    public function update(Request $request, Job $job){

    }

    public function delete(Request $request, Job $job) {
        $job->delete();

        return redirect('admin.finished_jobs');
    }


}
