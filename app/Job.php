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
        return $this->hasOne('App\Customer');
    }
}
