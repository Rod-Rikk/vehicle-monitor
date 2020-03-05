<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Vehicle;

class APIController extends Controller
{
    //
    public function getCustomers()
    {

        $data = Customer::get();

        return response()->json($data);
    }

    public function getVehicles()
    {
        $data = Vehicle::get();
        
        return response()->json($data);
    }
}
