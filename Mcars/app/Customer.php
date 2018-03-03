<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'firstname','lastname', 'phonenumber','altphonenumber','email','dob','address','locality','city','state','pincode','salary','doj','dlcopy','aadharcopy','pancardcopy','bankcopy','otherdocs'

    ];

    protected $table = 'customers';

    function bookings(){
        return $this->hasMany("App\Bookings");
    }

}
