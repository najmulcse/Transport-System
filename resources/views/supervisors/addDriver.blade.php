@extends('layouts.master')

@section('userName',  Auth::user()->name )

@section('deptName', 'Supervisor Department')

@section('pageContent')

  <h2>Add Driver/Helper</h2>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
   <form  class="form-horizontal " role="form" method="POST" action="{{route('store.driver')}}" >
        {{ csrf_field() }}

          <dir>
            
            @if(session('msg') && session('status') ==1)
                <div class="alert alert-success text-center">
                  {{session('msg')}}
                </div>
             @elseif(session('msg') && session('status') ==0)
                <div class="alert alert-danger text-center">
                  {{session('msg')}}
                </div>
            @endif
        
          </dir>
           <div class="form-group @if($errors->has('designation')) has-error @endif">

            <label for="designation" class="col-sm-4 col-form-label">Designation</label>
             <div class="dropdown col-sm-8">

                 <select class="btn btn-md form-control" name="designation" >
                    <option value="" selected="">SELECT TYPE</option>
                    <option value="2" >Driver</option>
                    <option value="6">Helper</option>
                   
                </select>
                {!!$errors->first('designation','<span class="help-block">:message</span>')!!}
            </div>
            </div>
         
      <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label">Name</label>
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

             @include('supervisors.sidebar')
@endsection