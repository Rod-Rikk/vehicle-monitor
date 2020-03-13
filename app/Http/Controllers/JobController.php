<?php

namespace App\Http\Controllers;

use App\Job;
use App\Customer;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs = Job::with('customer', 'vehicle')->where('job_done', '==', 0)->latest()->get();
        return view('admin.jobs', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function create()
    {
        //
        $customers = Customer::get();
        $vehicles = Vehicle::get();

        return view('admin.create-job', compact('customers', 'vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        // $job->job_done = request('job_done');


        $validatedData  = request()->validate([
            'customer_id' => ['required'],
            'description' => ['required', 'min:3'],
            'vehicle_id' => ['required'],
            'location' => ['required', 'min:3'],
            'job_done' => ['0'],
            'start_date' => ['required'],
            'end_date' => ['required'],
        ]);
        $job = new Job();
        $job->customer_id = $validatedData['customer_id'];
        $job->description = $validatedData['description'];
        $job->vehicle_id = $validatedData['vehicle_id'];
        $job->location = $validatedData['location'];
        $job->job_done = 0;
        $job->start_date = $validatedData['start_date'];
        $job->end_date = $validatedData['end_date'];

        $job->save();

        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $job = Job::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $job = Job::with('customer', 'vehicle')->findOrFail($id);

        $customers = Customer::all();

        $vehicles = Vehicle::all();

        return view('admin.edit-job', compact('job', 'customers', 'vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
        // dd($request);
        $validatedData  = request()->validate([
            'customer_id' => ['required'],
            'description' => ['required', 'min:3'],
            'vehicle_id' => ['required'],
            'location' => ['required', 'min:3'],
            'job_done' => [],
            'remarks' => [],
            'start_date' => ['required'],
            'end_date' => ['required'],

        ]);


        $job->customer_id = $validatedData['customer_id'];
        $job->description = $validatedData['description'];
        $job->vehicle_id = $validatedData['vehicle_id'];
        $job->location = $validatedData['location'];
        $job->job_done = isset($request->job_done);
        $job->remarks = $validatedData['remarks'];
        $job->start_date = $validatedData['start_date'];
        $job->end_date = $validatedData['end_date'];

        $job->save();

        return redirect('/jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
        $job->delete();

        return redirect('/jobs');
    }


    /**Custom Conrollers */
    public function markAsFinished(Job $job)
    {
    }



    public function getCustomers()
    {

        $customers = Customer::get();

        return response($customers);
    }

    public function getVehicles()
    {
        $vehicles = Vehicle::get();

        return response($vehicles);
    }

    /**Show the application data */
    public function dataAjax(Request $request)
    {
        $data = [];

        if ($request->has('q')) {
            $search = $request->q;
            $data = DB::table("customers")
                ->select("id", "name")
                ->where('name', 'LIKE', "%$search%")
                ->get();
        }

        return response()->json($data);
    }
}
