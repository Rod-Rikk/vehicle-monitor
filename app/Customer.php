<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'name', 'address', 'email', 'phone'
    ];

    public function jobs()
    {
        return $this->hasMany('App\Job');
    }
}
