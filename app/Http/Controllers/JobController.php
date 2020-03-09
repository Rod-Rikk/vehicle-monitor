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
        $jobs = Job::latest()->get();

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

        return view('admin.create-job',compact('customers','vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validatedData  = request()->validate([
            'customer_name' => ['required'],
            'description' => ['required', 'min:3'],
            'vehicle_code' => ['required'],
            'location' => ['required', 'min:3'],
            'job_done' => ['0'],
            'start_date' => ['required', 'min:1000-01-01', 'max:3000-12-31'],
            'end_date' => ['required', 'min:1000-01-01', 'max:3000-12-31'],
        ]);

        Job::create($validatedData);

        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
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
    }


    /**Custom Conrollers */
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
