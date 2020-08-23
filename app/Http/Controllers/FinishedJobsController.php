<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FinishedJobsController extends Controller
{
    //

    public function index()
    {
        $jobs = Job::with('customer', 'vehicle')->where('job_done', '=', 1)->latest()->get();


        return view('admin.finished-jobs', compact('jobs'));
    }

    public function show($id)
    {
        $job = Job::with('customer', 'vehicle')->findOrFail($id);
        $current_date = Carbon::now()->toDateString();
        $endDate = Carbon::parse($job->end_date);

        if ($current_date < $job->end_date) {
            $elapsed = $endDate->diffForHumans(Carbon::now());
            $status = 'upcoming';
        } elseif ($current_date == $job->end_date) {
            $elapsed = $endDate->diffForHumans(Carbon::now());
            $status = 'current';
        } else {
            $elapsed = $endDate->diffForHumans(Carbon::now());
            $status = 'past';
        }


        //$timeTo = Event::where('EventTime', '>=', Carbon::now()->toDateString())->get();
        return view('admin.job-details', compact('job', 'status', 'elapsed'));
    }


    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();

        return redirect('/finished-jobs')->with('success','Job successfully deleted');
    }
}
