<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $fillable = [
        'firstname','lastname', 'phonenumber','altphonenumber','email','dob','address','locality','city','state','pincode','salary','doj','type','dlcopy','aadharcopy','pancardcopy','bankcopy','otherdocs'

    ];

    protected $table = 'staff';


}
