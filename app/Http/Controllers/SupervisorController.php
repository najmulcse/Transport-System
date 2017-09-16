<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\User;
use App\Time;
use App\Route;
use App\Routine;
class SupervisorController extends Controller
{
   public function __construct()
    {
    	$this->middleware('auth');
    }
    public function addVehicle(){

    	return view('supervisors.addVehicle');
    }
    public function storeVehicle(Request $request){
    	$roles = [
    		'vehicle_type' 			=> 'required',
    		'vehicle_id'			=> 'required',
    		
    		];
    		$this->validate($request, $roles);
    		if(Vehicle::where('vehicle_id',$request->vehicle_id)->exists())
    		{
    			return back()->with('msg','Vehicle already added')
    						->with('status',0);
    		}
    		$vehicle = new Vehicle;
    		$vehicle->vehicle_ID   = $request->vehicle_id;
    		$vehicle->type = $request->vehicle_type;
    		$vehicle->save();

    		return back()->with('msg','Vehicle successfully added')
    					->with('status',1);


    }

    public function allVehicles(){
	    	$vehicles = Vehicle::all();
	    	return view('supervisors.allVehicles',compact('vehicles'));
    }

    public function deleteVehicle($id)
    {
    	Vehicle::findOrFail($id)->delete();
    	return back()->with('msg','Successfully deleted');
    }


    public function addDriver(){

    	return view('supervisors.addDriver');
    }

    public function storeDriver(Request $request)
    {


    		$roles = [
    		'name' 			=> 'required',
    		'email'			=> 'required',
    		'password'  	=> 'required',
    		'designation'	=> 'required',
    		'employee_id'	=> 'required'


    		];

    		$this->validate($request, $roles);

    		if(User::where('employee_id',$request->employee_id)->exists())
    		{
    			return back()->with('msg','Employee already existed')
    						->with('status',0);
    		}
    		else{
    		$user = new User;
    		$user->name 		= $request->name;
    		$user->email 	 	= $request->email;
    		$user->password  	= bcrypt($request->password);
    		$user->employee_id	= $request->employee_id;
    		$user->usertype_id	= $request->designation;
    		$user->save();
    		return back()->with('msg','Successfully Added')
    					 ->with('status',1);
    		}

    }

    public function allDrivers()
    {
    	 $drivers = User::where('usertype_id',2)
    					->orWhere('usertype_id',6)
    					->get();
    	return view('supervisors.allDrivers',compact('drivers'));
    }



    public function deleteDriver($id)
    {
    	User::findOrFail($id)->delete();
    	return back()->with('msg','Successfully deleted');
    }


//Time and road 


    public function addTime()
    {
    	return view('supervisors.addTime');
    }


	public function storeTime(Request $request){
    	$roles = [
    		'type' 			=> 'required',
    		'time'			=> 'required',
    		
    		];
    		$this->validate($request, $roles);
    		$time = $request->time.' '.$request->type;
    		
    		if(Time::where('time',$time)->exists())
    		{
    			return back()->with('msg','Time already existed')
    						->with('status',0);
    		}
    		$timeObj = new Time;
        	$timeObj->time = $time;
    		$timeObj->save();

    		return back()->with('msg','Time successfully added')
    					 ->with('status',1);


    }
    public function showTimesAndRoute()
    {
    	$times  = Time::all();
    	$routes = ROute::all();
    	return view('supervisors.allTimeRoutes',compact('times','routes'));
    }

    public function deleteTime($id)
    {
    	Time::findOrFail($id)->delete();
    	return back()->with('msg','Successfully deleted');
    }

    public function addRoute()
    {
    	return view('supervisors.addRoute');
    }

    public function storeRoute(Request $request){
    	$roles = [
    		'route' 			=> 'required',
    		
    		];
    		$this->validate($request, $roles);
    		
    		if(Route::where('name',$request->route)->exists())
    		{
    			return back()->with('msg','Route already existed')
    						->with('status',0);
    		}
    		
    		$route =  new Route;
    		$route->name = $request->route;
    		$route->save();
       		return back()->with('msg','Route successfully added')
       					 ->with('status',1);


    }
    public function deleteRoute($id)
    {
    	Route::findOrFail($id)->delete();
    	return back()->with('msg','Successfully deleted');
    }




    //assign vehicles

    public function assignVehicle(){

        $vehicles = Vehicle::all();
        $times    = Time::all();
        $routes   = Route::all();
        //$routines = Routine::all();
        $employees = User::all();
        return view('supervisors.assignVehicleToDriver',compact('vehicles','times','routes','employees'));
    }

    public function storeAssignVehicle(Request $request)
    {
        $roles = [
            'vehicle_id'          => 'required',
            'driver_id'           => 'required',
            'helper_id'           => 'required',
            'route'               => 'required',
            ];

            $this->validate($request, $roles);

            if(Routine::where('vehicle_id',$request->vehicle_id)->exists())
            {
                return back()->with('msg','Vehicle already assigned')
                            ->with('status',0);
            }elseif(Routine::where('driver_id',$request->driver_id)->exists())
            {
                return back()->with('msg','Driver already assigned')
                            ->with('status',0);
            }elseif(Routine::where('helper_id',$request->helper_id)->exists())
            {
                return back()->with('msg','Helper already assigned')
                            ->with('status',0);
            }
            else
            {
                $routine = new Routine;
                $routine->driver_id  = $request->driver_id;
                $routine->helper_id  = $request->helper_id;
                $routine->vehicle_id = $request->vehicle_id;
                $routine->route_id   = $request->route;
                $routine->save();

                if($routine){
                    return back()->with('msg','Successfully added')
                                ->with('status',1);
                    }
                    
            }

            return back();                            ;
    }
}
