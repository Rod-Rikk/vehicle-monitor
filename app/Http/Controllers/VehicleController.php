<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Session;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vehicles = Vehicle::latest()->get();


        return view('admin.vehicles', compact('vehicles'));
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
        //

        $validatedData = request()->validate([
            'num_plate' => ['required', 'min:4'],
            'description' => ['required', 'min:5'],
            'cha_num' => ['required'],
            'model' => [],
            'code' => ['required']
        ]);

        Vehicle::create($validatedData);

        // $data->num_plate = $validatedData['num_plate'];
        // $data->description = $validatedData['description'];
        // $data->cha_num = $validatedData['cha_num'];
        // $data->model = $validatedData['model'];
        // $data->code = $validatedData['code'];
        // $data->save();

        return redirect('/vehicles')->with('success','Vehicle created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vehicle = Vehicle::find($id);


        return view('admin.edit-vehicle', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
        $validatedData = request()->validate([
            'num_plate' => ['required', 'min:4'],
            'description' => ['required', 'min:5'],
            'cha_num' => ['required'],
            'model' => [],
            'code' => ['required']
        ]);

        $vehicle->num_plate = $validatedData['num_plate'];
        $vehicle->description = $validatedData['description'];
        $vehicle->cha_num = $validatedData['cha_num'];
        $vehicle->model = $validatedData['model'];
        $vehicle->code = $validatedData['code'];

        $vehicle->save();

        return redirect('/vehicles')->with('success','Vehicle updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
        $vehicle->delete();

        return redirect('/vehicles')->with('success','Vehicle successfully deleted');
    }
}
