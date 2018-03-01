<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vendor;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
     //   return view("vendors.allvendors");
        $vendors = Vendor::all();
        return view("vendors.allvendors", ["vendors"=>$vendors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view("vendors.addvendor");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Initial split
        $first = str_split($request->get('firstname'));
        $last = str_split($request->get('lastname'));
        $current =$first[0].$last[0];

        if ($request->hasFile('bankcopy')) {
           //save to data base
            $bankimage =$current."-"."bankcopy "."-" .$request->file('bankcopy')->getClientOriginalName();
            //save to folder
            $request->file('bankcopy')->move(base_path().'/public/images/vendors/bankcopy/', $bankimage);
        }
        else{
            $bankimage =Null;
        }


        if ($request->hasFile('dlcopy')) {
            //save to data base
            $dlimage =$current."-"."dlcopy "."-" .$request->file('dlcopy')->getClientOriginalName();
            //save to folder
            $request->file('dlcopy')->move(base_path().'/public/images/vendors/bankcopy/', $dlimage);
        }
        else{
            $dlimage =Null;
        }


        if ($request->hasFile('aadharcopy')) {
            //save to data base
            $aadharimage =$current."-"."aadhar "."-" .$request->file('aadharcopy')->getClientOriginalName();
            //save to folder
            $request->file('aadharcopy')->move(base_path().'/public/images/vendors/aadharcopy/', $aadharimage);
        }
        else{
            $aadharimage =Null;
        }


        if ($request->hasFile('pancardcopy')) {
            //save to data base
            $pancardimage =$current."-"."pancard "."-" .$request->file('pancardcopy')->getClientOriginalName();
            //save to folder
            $request->file('pancardcopy')->move(base_path().'/public/images/vendors/pancardcopy/', $pancardimage);

        }
        else{
            $pancardimage =Null;
        }



        $vendor = new Vendor(array(
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'phonenumber' => $request->get('phonenumber'),
            'altphonenumber'  => $request->get('altphonenumber'),
            'email'  => $request->get('email'),
            'address'  => $request->get('address'),
            'locality'  => $request->get('locality'),
            'city'  => $request->get('city'),
            'state'  => $request->get('state'),
            'pincode'  => $request->get('pincode'),
            'dlcopy'  => $dlimage,
            'aadharcopy'  =>   $aadharimage,
            'pancardcopy'  => $pancardimage,
            'bankcopy'  =>$bankimage,


        ));

        $vendor->save();
        $request->session()->flash('message', 'Successfully Added a vendor!');
        $request->session()->flash('alert-success', 'success');
        return redirect("vendors/".$vendor->id);
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

        $vendor= Vendor::find($id);
        return view("vendors.showvendor", ["vendor"=>$vendor]);
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


    public function destroy(Request $request, $id)
    {
        $vendor= Vendor::find($id);
        $vendor->delete();
        $request->session()->flash('message', 'Successfully deleted the Vendor!');
        $request->session()->flash('alert-danger', 'danger');
        return redirect('vendors');
    }



}
