@extends('layouts.master')

@section('userName',  Auth::user()->name )

@section('deptName', 'Supervisor Department')

@section('pageContent')

	<h2>Assign Vehicle </h2>

<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
   <form  class="form-horizontal " role="form" method="POST" action="{{route('store.assign.vehicle')}}" >
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
         
        
      <div class="form-group @if($errors->has('vehicle_type')) has-error @endif">

            <label for="vehicle_id" class="col-sm-4 col-form-label">Vehicle ID</label>
             <div class="dropdown col-sm-8">

                 <select class="btn btn-md form-control" name="vehicle_id" >
                    <option value="" selected="">SELECT VEHICLE ID</option>
                    
                      @if(count($vehicles)>0)
                          @foreach($vehicles as $vehicle)
                                <option value="{{$vehicle->vehicle_ID}}">{{$vehicle->vehicle_ID}}</option>
                          @endforeach
                      @endif
                </select>
                {!!$errors->first('vehicle_id','<span class="help-block">:message</span>')!!}
            </div>
            </div>

            <div class="form-group @if($errors->has('driver_id')) has-error @endif">

            <label for="driver_id" class="col-sm-4 col-form-label">Driver ID</label>
             <div class="dropdown col-sm-8">

                 <select class="btn btn-md form-control" name="driver_id" >
                    <option value="" selected="">SELECT DRIVER ID</option>
                    
                      @if(count($employees)>0)
                          @foreach($employees as $employee)
                              @if($employee->isDriver())
                                <option value="{{$employee->employee_id}}">{{$employee->employee_id}}</option>
                               @endif 
                          @endforeach
                      @endif
                </select>
                {!!$errors->first('driver_id','<span class="help-block">:message</span>')!!}
            </div>
            </div>
        <div class="form-group @if($errors->has('helper_id')) has-error @endif">

            <label for="helper_id" class="col-sm-4 col-form-label">Helper ID</label>
             <div class="dropdown col-sm-8">

                 <select class="btn btn-md form-control" name="helper_id" >
                    <option value="" selected="">SELECT HELPER ID</option>
                    
                      @if(count($employees)>0)
                          @foreach($employees as $employee)
                              @if($employee->isHelper())
                                <option value="{{$employee->employee_id}}">{{$employee->employee_id}}</option>
                               @endif 
                          @endforeach
                      @endif
                </select>
                {!!$errors->first('helper_id','<span class="help-block">:message</span>')!!}
            </div>
            </div>
        

        <div class="form-group @if($errors->has('route')) has-error @endif">

            <label for="route" class="col-sm-4 col-form-label">Route Name</label>
             <div class="dropdown col-sm-8">

                 <select class="btn btn-md form-control" name="route" >
                    <option value="" selected="">SELECT ROUTE</option>
                    
                      @if(count($routes)>0)
                          @foreach($routes as $route)
                                <option value="{{$route->id}}">{{$route->name}}</option>
                          @endforeach
                      @endif
                </select>
                {!!$errors->first('route','<span class="help-block">:message</span>')!!}
            </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                  <label class="col-form-label">Time</label>
                </div>
                <div class="col-sm-8">
                   <div class="form-group multiple-form-group row" data-max=8>
                      
                      
                      <div class="form-group input-group">

                       <select class="btn btn-md form-control" name="multiple[]" >
                          <option value="" selected="">SELECT TIME</option>
                          
                            @if(count($times)>0)
                                @foreach($times as $time)
                                      <option value="{{$time->time}}">{{$time->time}}</option>
                                @endforeach
                            @endif
                      </select>
                      {!!$errors->first('route','<span class="help-block">:message</span>')!!}
                         
                          <span class="input-group-btn"><button type="button" class="btn btn-default btn-add">+
                         </button></span>
                    </div>
                  </div>
                </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4"></label>
             <div class="col-sm-8 ">
              <button type="submit"  class="btn btn-primary form-control">Save</button>
          </div>
      </div>
    </form>
    </div>
  </div>

  
@endsection

@section('sideBar')

              @include('supervisors.sidebar')

@endsection