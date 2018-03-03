<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    protected $fillable = [
        'firstname','lastname', 'phonenumber','altphonenumber','email','dob','address','locality','city','state','pincode','dlcopy','aadharcopy','pancardcopy','bankcopy','otherdocs'

    ];

    protected $table = 'vendors';


}
