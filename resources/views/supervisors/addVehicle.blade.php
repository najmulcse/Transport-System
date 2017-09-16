@extends('layouts.master')

@section('userName',  Auth::user()->name )

@section('deptName', 'Supervisor Department')

@section('pageContent')

	<h2>Add Vehicle</h2>

<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
   <form  class="form-horizontal " role="form" method="POST" action="{{route('store.vehicle')}}" >
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
           <div class="form-group @if($errors->has('vehicle_type')) has-error @endif">

            <label for="vehicle_type" class="col-sm-4 col-form-label">Vehicle Type</label>
             <div class="dropdown col-sm-8">

                 <select class="btn btn-md form-control" name="vehicle_type" >
                    <option value="" selected="">SELECT VEHICLE</option>
                    <option value="BUS" >BUS</option>
                    <option value="MICRO BUS">MICRO BUS</option>
                    <option value="AMBULANCE">AMBULANCE</option>
                    <option value="OTHER">OTHER</option>
                    
                </select>
                {!!$errors->first('vehicle_type','<span class="help-block">:message</span>')!!}
            </div>
            </div>
         
      <div class="form-group row">
            <label for="vehicle_id" class="col-sm-4 col-form-label">Vehicle ID</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="vehicle_id" placeholder=" Vehicle ID">
            </div>
        </div>
        
          <div class="form-group row">
            <label class="col-sm-4"></label>
             <div class="col-sm-8 ">
              <button type="submit"  class="btn btn-primary form-control">Add Vehicle</button>
          </div>
      </div>
    </form>
    </div>
  </div>


@endsection

@section('sideBar')

              @include('supervisors.sidebar')

@endsection