<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function admin(){

    	return view('pages.admin_dashboard');
    }



    public function supervisor(){

    	return view('pages.supervisor_dashboard');
    }




    public function oilDept(){

    	return view('pages.oilDept_dashboard');
    }




    public function mechanicalDept(){

    	return view('pages.mechanicalDept_dashboard');
    }




    public function driver(){

    	return view('pages.driver_dashboard');
    }



    public function oilDeptCreateIssue(){

        return view('pages.oilDept_create_issue');
    }


}
