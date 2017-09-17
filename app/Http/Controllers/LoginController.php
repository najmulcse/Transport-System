<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){

    	// return $request->all();

    	// if(attempt())

    	if(Auth::attempt([

    		'email' => $request->email,
    		'password' => $request->password,

    	])){

    		if(Auth::user()->isAdmin())
            {
                return redirect()->route('user.admin');
            }
            else if(Auth::user()->isSupervisor())
            {
                return redirect()->route('user.supervisor');
            }
            else if(Auth::user()->isDriver() || Auth::user()->isHelper())
            {
                return redirect()->route('user.driver');
            }
            else if(Auth::user()->isOil())
            {
                return redirect()->route('user.oilDept');
            }
            else if(Auth::user()->isMechanical())
            {
                return redirect()->route('user.mechanicalDept');
            }


    		// if($user->status == 'admin')
    		// 	return redirect()->route('user.admin');
    		// else if($user->status == 'human resource department')
    		// 	return redirect()->route('user.humanResourceDept');
    		// else if($user->status == 'oil department')
    		// 	return redirect()->route('user.oilDept');
    		// else if($user->status == 'mechanical department')
    		// 	return redirect()->route('user.mechanicalDept');
    		// else if($user->status == 'driver')
    		// 	return redirect()->route('user.driver');

    		return redirect()->route('home');
    	}

    	return redirect()->back();
    }
}
