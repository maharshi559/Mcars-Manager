<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Car;
use App\Vendor;

class CarsController extends Controller
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

        $cars = Car::all();

        return view("cars.allcars", ["cars"=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendors = Vendor::all();
        return view("cars.addcar", ["vendors"=>$vendors]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $current =now();

        if ($request->hasFile('carimage')) {

            $this->validate($request, [
                'carimage' => 'mimes:jpeg,bmp,png', //only allow this type extension file.
            ]);


            //save to data base
            $carimage =$request->file('carimage')->getClientOriginalName();
            //save to folder
            $request->file('carimage')->move(base_path().'/public/images/cars/thumbnails/', $carimage);
        }
        else{
            $carimage ="default-car.png";
        }

        if ($request->hasFile('pollutioncopy')) {
            //save to data base
            $pollutionimage =$current."-"."pollutioncopy "."-" .$request->file('pollutioncopy')->getClientOriginalName();
            //save to folder
            $request->file('pollutioncopy')->move(base_path().'/public/images/cars/pollutioncopy/', $pollutionimage);
        }
        else{
            $pollutionimage =Null;
        }


        if ($request->hasFile('insurancecopy')) {
            //save to data base
            $insuranceimage =$current."-"."insurancecopy "."-" .$request->file('insurancecopy')->getClientOriginalName();
            //save to folder
            $request->file('insurancecopy')->move(base_path().'/public/images/cars/insurancecopy/', $insuranceimage);
        }
        else{
            $insuranceimage =Null;
        }

        if ($request->hasFile('rccopy')) {
            //save to data base
            $rcimage =$current."-"."rccopy "."-" .$request->file('rccopy')->getClientOriginalName();
            //save to folder
            $request->file('rccopy')->move(base_path().'/public/images/cars/rccopy/', $rcimage);
        }
        else{
            $rcimage =Null;
        }

        if ($request->hasFile('frontpic')) {
            //save to data base
            $frontimage =$current."-"."frontpic "."-" .$request->file('frontpic')->getClientOriginalName();
            //save to folder
            $request->file('frontpic')->move(base_path().'/public/images/cars/frontpic/', $frontimage);
        }
        else{
            $frontimage =Null;
        }

        if ($request->hasFile('dsidepic')) {
            //save to data base
            $dimage =$current."-"."dsidepic "."-" .$request->file('dsidepic')->getClientOriginalName();
            //save to folder
            $request->file('dsidepic')->move(base_path().'/public/images/cars/dsidepic/', $dimage);
        }
        else{
            $dimage =Null;
        }

        if ($request->hasFile('psidepic')) {
            //save to data base
            $pimage =$current."-"."psidepic "."-" .$request->file('psidepic')->getClientOriginalName();
            //save to folder
            $request->file('psidepic')->move(base_path().'/public/images/cars/psidepic/', $pimage);
        }
        else{
            $pimage =Null;
        }

        if ($request->hasFile('backpic')) {
            //save to data base
            $backimage =$current."-"."frontpic "."-" .$request->file('backpic')->getClientOriginalName();
            //save to folder
            $request->file('backpic')->move(base_path().'/public/images/cars/backpic/', $backimage);
        }
        else{
            $frontimage =Null;
        }



        $car = new Car(array(
              'brand' => $request->get('brand'),
              'carname' => $request->get('carname'),
              'carnumber'  => $request->get('carnumber'),
              'model'  => $request->get('model'),
              'year'  => $request->get('year'),
              'color'  => $request->get('color'),
              'fueltype'  => $request->get('fueltype'),
              'seatcap'  => $request->get('seatcap'),
              'enginenumber'  => $request->get('enginenumber'),
              'chasisnumber'  => $request->get('chasisnumber'),
              'insstart'  => $request->get('insstart'),
              'inssend'  => $request->get('inssend'),
              'pollutionexp'  => $request->get('pollutionexp'),
              'vendorname'  => $request->get('vendorname'),
              'carimage'  => $carimage,
              'custprice'  => $request->get('custprice'),
              'vendprice'  => $request->get('vendprice'),
              'pollutioncopy'  => $pollutionimage,
              'insurancecopy'  => $insuranceimage,
              'rccopy'  => $rcimage,
              'frontpic'  => $frontimage,
              'dsidepic'  => $dimage,
              'psidepic'  => $pimage,
              'backpic'  => $backimage,

                         
                                        
            ));

            $car->save();



   
        

        return redirect("cars/".$car->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        $car= Car::find($id);
        return view("cars.showcar", ["car"=>$car]);

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
