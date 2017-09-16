@extends('layouts.master')

@section('userName',  Auth::user()->name )

@section('deptName', 'Supervisor Department')

@section('pageContent')

	<h2>Vehicles List</h2>
  <div class="table-responsive">
    <table class="table table-hover table-bordered">
      <thead class="text-center">
        <tr >
          <th>Name</th>
          <th>Vehicle ID</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      @foreach($vehicles as $vehicle)
        <tr class="text-center">
          <td>{{$vehicle->type}}</td>
          <td>{{$vehicle->vehicle_ID}}</td>
          
          
          <td><a class="btn btn-sm btn-danger" href="{{route('delete.vehicle',['id'=>$vehicle->id])}}">Remove</a></td>
        </tr>
      @endforeach   
      </tbody>
    </table>
  </div>


@endsection

@section('sideBar')

              @include('supervisors.sidebar')

@endsection