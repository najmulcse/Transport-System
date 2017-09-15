@extends('layouts.master')

@section('userName',  Auth::user()->name )

@section('deptName', 'Admin')

@section('pageContent')

	<h2>Add Memeber</h2>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
   <form  class="form-horizontal " role="form" method="POST" action="{{route('store.member')}}" >
        {{ csrf_field() }}

          <dir>
            @if(session('msg'))
                <div class="alert alert-danger">
                  {{session('msg')}}
                </div>
            @endif
          </dir>
           <div class="form-group @if($errors->has('department')) has-error @endif">

            <label for="department" class="col-sm-4 col-form-label">Department</label>
             <div class="dropdown col-sm-8">

                 <select class="btn btn-md form-control" name="department" >
                    <option value="" selected="">SELECT DEPARTMENT</option>
                    <option value="1" >Admin</option>
                    <option value="3">Oli Department</option>
                    <option value="4">Machinary Department</option>
                    <option value="5">Supervisor </option>
                    
                </select>
                {!!$errors->first('room','<span class="help-block">:message</span>')!!}
            </div>
            </div>
         
      <div class="form-group row">
            <label for="username" class="col-sm-4 col-form-label">Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="name" placeholder=" Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-sm-4 col-form-label">Employee ID</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="employee_id" placeholder="Employee ID">
            </div>
        </div>
        
          <div class="form-group row">
            <label class="col-sm-4"></label>
             <div class="col-sm-8 ">
              <button type="submit"  class="btn btn-primary form-control">Add Memeber</button>
          </div>
      </div>
    </form>
    </div>
  </div>

@endsection

@section('sideBar')

  <div class="menu_section">
    <h3>Issue</h3>
    <ul class="nav side-menu">
      <li><a href="{{route('all.member')}}"><i class="fa fa-globe"></i> All Member </a></li>
      <li><a href="index.html"><i class="fa fa-list-alt "></i> Solved Issue </a></li>
      <li><a href="index.html"><i class="fa fa-list-alt "></i> Pending Issue </a></li>
      <li><a href="{{route('add.member')}}"><i class="fa fa-plus"></i> Add New Member </a></li>
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