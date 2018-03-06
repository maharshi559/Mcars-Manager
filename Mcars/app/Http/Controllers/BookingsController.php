<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Booking;
use App\Customer;
use App\Staff;


class BookingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
        return view("bookings.allbookings");
    }


    public function search(Request $request)
    {
        $dateFrom =$request->from;
        $dateFrom=$this->dateFormat($dateFrom);
        $dateTo = $request->to;
        $dateTo=$this->dateFormat($dateTo);
        $bookingSearch = new Booking();
        $cars= $bookingSearch->search($dateFrom,$dateTo);

         $dates =["from"=>$dateFrom,"to"=>$dateTo];
        return view("bookings.addbooking", ["cars"=>$cars,"date"=>$dates]);

    }



    public function dateFormat($date){
            $dateFromsplit=explode(',',$date);
            $datesplit=explode('/',$dateFromsplit[0]);
            $datesplit=array_reverse($datesplit);
            $date=implode('-',$datesplit);
           // $dateTime=$date." ".$dateFromsplit[1];
            //return $dateTime;

      }

    public function addcustomer(Request $request)
    {

        $date =$this->search($request);
        $customers = Customer::all();
        $staff =Staff::all();

        $data=["firstname"=>"","lastname"=>"","phonenumber"=>"","altphonenumber"=>"","email"=>"","dob"=>"","address"=>"","locality"=>"","city"=>"","state"=>"","pincode"=>""];

        return view("bookings.addcusttobooking", ["customers"=>$customers,"staff"=>$staff,"data"=>$data]);

    }


    public function addstaff(Request $request)
    {
        $customers = Customer::all();

        $custID= $request->vendorname;
        $data = Customer::find($custID);
        $staff =Staff::all();
        return view("bookings.addcusttobooking", ["customers"=>$customers,"staff"=>$staff,"data"=>$data ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cars=[];
        return view("bookings.addbooking", ["cars"=>$cars]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view("bookings.showbooking");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
