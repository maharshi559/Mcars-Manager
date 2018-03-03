<?php

namespace App\Http\Controllers;

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

    }


    public function search(Request $request)
    {
        $dateFrom =$request->from;
        $dateFrom=$this->dateFormat($dateFrom);
        $dateTo = $request->to;
        $dateTo=$this->dateFormat($dateTo);
        $bookingSearch = new Booking();
        $cars= $bookingSearch->search($dateFrom,$dateTo);



        return view("bookings.addbooking", ["cars"=>$cars]);

    }



    public function dateFormat($date){
            $dateFromsplit=explode(',',$date);
            $datesplit=explode('/',$dateFromsplit[0]);
            $datesplit=array_reverse($datesplit);
            $date=implode('-',$datesplit);
            $dateTime=$date." ".$dateFromsplit[1];
            return $dateTime;

      }

    public function addcustomer(Request $request)
    {
//        $dateFrom =$request->from;
//        $dateTo = $request->to;
//
//        $bookingSearch = new Booking();
//        $cars= $bookingSearch->search($dateFrom,$dateTo);
//
        $customers = Customer::all();

        return view("bookings.addcusttobooking", ["customers"=>$customers]);

    }


    public function addstaff(Request $request)
    {
//        $dateFrom =$request->from;
//        $dateTo = $request->to;
//
//        $bookingSearch = new Booking();
//        $cars= $bookingSearch->search($dateFrom,$dateTo);
//
        $staff = Staff::all();

        return view("bookings.bookingstaff", ["staff"=>$staff]);

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
