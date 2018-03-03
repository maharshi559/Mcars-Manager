<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Booking extends Model
{
//    //
//    protected $fillable = [
//        'firstname','lastname', 'phonenumber','altphonenumber','email','dob','address','locality','city','state','pincode','dlcopy','aadharcopy','pancardcopy','bankcopy','otherdocs'
//
//    ];
//
//    protected $table = 'vendors';
//


    public function search($dateFrom , $dateTo)
    {
        $cars = DB::table('cars')
                   ->leftJoin('bookings', function($join) {
                       $join->on('cars.id', '=', 'bookings.carId');
                   })
            ->where('carstatus', 'Available')->get();


        return $cars;
    }
    protected $table = 'bookings';

    function customer(){
        return $this->belongsTo("App\Customer");
    }

    function car(){
        return $this->belongsTo("App\Car");
    }
}
