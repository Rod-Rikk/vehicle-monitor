<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

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
        // $vehicles = Vehicle::latest()->get();
        $vehicles = Vehicle::all();

        // return view('vehicles.vehicles',compact('vehicles'));

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

        $validatedData = $request->validate([
            'num_plate' => ['required', 'min:4'],
            'description' => ['required', 'min:5'],
            'cha_num' => ['required'],
            'model' => [],
            'code' => ['required']
        ]);

        // $num_plate = $request['num_plate'];
        // $description = $request['description'];
        // $cha_num = $request['cha_num'];
        // $model = $request['model'];
        // $code = $request['code'];

        $data = new Vehicle();
        // $data->num_plate = $num_plate;

        // $data->description = $description;

        // $data->cha_num = $cha_num;

        // $data->model = $model;

        // $data->code = $code;

        // $data->save();


        $data->num_plate = $validatedData['num_plate'];
        $data->description = $validatedData['description'];
        $data->cha_num = $validatedData['cha_num'];
        $data->model = $validatedData['model'];
        $data->code = $validatedData['code'];
        $data->save();

        return redirect('/vehicles');
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
    public function edit(Vehicle $vehicle)
    {
        //
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
    }

   
}
