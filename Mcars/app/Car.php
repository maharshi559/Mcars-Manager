<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //

    protected $fillable = [
        'brand','carname','carnumber','model','year','color','fueltype','seatcap','enginenumber','chasisnumber','insstart','inssend','pollutionexp','vendorname','carimage','custprice','vendprice','carstatus'
         ,'pollutioncopy','insurancecopy','rccopy','frontpic','dsidepic','psidepic','backpic'
    ];

    protected $table = 'cars';

    function bookings(){
        return $this->hasMany("App\Bookings");
    }
}
