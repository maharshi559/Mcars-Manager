<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    protected $fillable = [
        'firstname','lastname', 'phonenumber','altphonenumber','email','address','locality','city','state','pincode','dlcopy','aadharcopy','pancardcopy','bankcopy'

    ];

    protected $table = 'vendors';


}
