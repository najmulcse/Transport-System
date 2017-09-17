@extends('layouts.master')

@section('userName',  Auth::user()->name )

@section('deptName', 'Supervisor Department')

@section('pageContent')

	<h2>Vehicles List</h2>
  @if(count($routines)>0)
  <div class="table-responsive">
    <table class="table table-hover table-bordered">
      <thead class="text-center">
        <tr >
          <th>Vehicle Name</th>
          <th>Vehicle ID</th>
          <th>Route</th>
          <th>Time Schedules</th>
          <th>Driver Name</th>
          <th>Helper Name</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      @foreach($routines as $routine)
        <tr class="text-center">
          <td>{{$routine->vehicle->type}}</td>
          <td>{{$routine->vehicle->vehicle_ID}}</td>
          <td>{{$routine->route->name}}</td>
          <td> 
          @foreach($routine->schedules as $s)
            {{$s->time}} ,
          @endforeach
          </td>
          <td>{{$routine->driver->name}}</td>
          <td>{{$routine->helper->name}}</td>

          
          <td><a class="btn btn-sm btn-danger" href="">Remove</a></td>
        </tr>
      @endforeach   
      </tbody>
    </table>
  </div>
  @else 
  <h3>Empty</h3>
  @endif


@endsection

@section('sideBar')

              @include('supervisors.sidebar')

@endsection