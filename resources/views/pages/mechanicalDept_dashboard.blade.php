@extends('layouts.master')

@section('userName',  Auth::user()->name )

@section('deptName', 'Mechanical Department')

@section('pageContent')

	<h2>This is testing</h2>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

@endsection

@section('sideBar')

              <div class="menu_section">
                <h3>Issue</h3>
                <ul class="nav side-menu">
                  <li><a href="index.html"><i class="fa fa-globe"></i> All Issue </a></li>
                  <li><a href="index.html"><i class="fa fa-list-alt "></i> Solved Issue </a></li>
                  <li><a href="index.html"><i class="fa fa-list-alt "></i> Pending Issue </a></li>
                  <li><a href="index.html"><i class="fa fa-plus"></i> Add New Issue </a></li>
                </ul>
              </div>


              <div class="menu_section">
                <h3>Request</h3>
                <ul class="nav side-menu">
                  <li><a href="index.html"><i class="fa fa-globe"></i> All Request </a></li>
                  <li><a href="index.html"><i class="fa fa-list-alt "></i> Solved Request </a></li>
                  <li><a href="index.html"><i class="fa fa-list-alt "></i> Pending Request </a></li>
                  <li><a href="index.html"><i class="fa fa-plus"></i> Add New Request </a></li>
                </ul>
              </div>

            </div>

@endsection