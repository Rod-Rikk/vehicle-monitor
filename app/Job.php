<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable = [
        'customer_name','description','vehicle_code','location','start_date','end_date'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }

    public function vehicle(){
        return $this->belongsTo(Vehicle::class,'vehicle_id','id');
    }
}
