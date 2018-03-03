<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //   return view("vendors.allvendors");
        $customers = Customer::all();
        return view("customers.allcustomers", ["customers"=>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("customers.addcustomer");
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
        //Initial split
        $first = str_split($request->get('firstname'));
        $last = str_split($request->get('lastname'));
        $current =$first[0].$last[0];

        if ($request->hasFile('bankcopy')) {
            //save to data base
            $bankimage =$current."-"."bankcopy "."-" .$request->file('bankcopy')->getClientOriginalName();
            //save to folder
            $request->file('bankcopy')->move(base_path().'/public/images/staff/bankcopy/', $bankimage);
        }
        else{
            $bankimage =Null;
        }


        if ($request->hasFile('dlcopy')) {
            //save to data base
            $dlimage =$current."-"."dlcopy "."-" .$request->file('dlcopy')->getClientOriginalName();
            //save to folder
            $request->file('dlcopy')->move(base_path().'/public/images/staff/dlcopy/', $dlimage);
        }
        else{
            $dlimage =Null;
        }


        if ($request->hasFile('aadharcopy')) {
            //save to data base
            $aadharimage =$current."-"."aadhar "."-" .$request->file('aadharcopy')->getClientOriginalName();
            //save to folder
            $request->file('aadharcopy')->move(base_path().'/public/images/staff/aadharcopy/', $aadharimage);
        }
        else{
            $aadharimage =Null;
        }


        if ($request->hasFile('pancardcopy')) {
            //save to data base
            $pancardimage =$current."-"."pancard "."-" .$request->file('pancardcopy')->getClientOriginalName();
            //save to folder
            $request->file('pancardcopy')->move(base_path().'/public/images/staff/pancardcopy/', $pancardimage);

        }
        else{
            $pancardimage =Null;
        }

        if ($request->hasFile('otherdocs')) {
            //save to data base
            $otherdocs =$current."-"."otherdocs "."-" .$request->file('otherdocs')->getClientOriginalName();
            //save to folder
            $request->file('otherdocs')->move(base_path().'/public/images/staff/otherdocs/', $otherdocs);

        }
        else{
            $otherdocs =Null;
        }



        $customer= new Customer(array(
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'phonenumber' => $request->get('phonenumber'),
            'altphonenumber'  => $request->get('altphonenumber'),
            'email'  => $request->get('email'),
            'dob'  => $request->get('dob'),
            'address'  => $request->get('address'),
            'locality'  => $request->get('locality'),
            'city'  => $request->get('city'),
            'state'  => $request->get('state'),
            'pincode'  => $request->get('pincode'),
            'dlcopy'  => $dlimage,
            'aadharcopy'  =>   $aadharimage,
            'pancardcopy'  => $pancardimage,
            'bankcopy'  =>$bankimage,
            'otherdocs'  =>$otherdocs,



        ));

        $customer->save();
        $request->session()->flash('message', 'Successfully added a new Customer!');
        $request->session()->flash('alert-success', 'success');
        return redirect("customers/".$customer->id);
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

        $customer= Customer::find($id);
        return view("customers.showcustomer", ["customer"=>$customer]);
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
        $customer= Customer::find($id);
        $customer->delete();
        $request->session()->flash('message', 'Successfully deleted the Customer!');
        $request->session()->flash('alert-danger', 'danger');
        return redirect('customers');
    }
}
