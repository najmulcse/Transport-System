<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }
    public function addMember(){

    	return view('admins.addmember');
    }
    public function storeMember(request $request){

    		$roles = [
    		'name' 			=> 'required',
    		'email'			=> 'required',
    		'password'  	=> 'required',
    		'department'	=> 'required',
    		'employee_id'	=> 'required'


    		];

    		$this->validate($request, $roles);
    		if(User::where('employee_id',$request->employee_id)->exists())
    		{
    			return back()->with('msg','Employee already existed');
    		}
    		else{
    		$user = new User;
    		$user->name 		= $request->name;
    		$user->email 	 	= $request->email;
    		$user->password  	= bcrypt($request->password);
    		$user->employee_id	= $request->employee_id;
    		$user->usertype_id	= $request->department;
    		$user->save();
    		return back()->with('msg','Successfully Added');
    		}

    }

    public function memberList(){

    	$members = User::all();
    	return view('admins.allmember',compact('members'));
    }

    public function deleteMember($id)
    {
    	User::findOrFail($id)->delete();
    	return back()->with('msg','Successfully deleted');
    }
}
