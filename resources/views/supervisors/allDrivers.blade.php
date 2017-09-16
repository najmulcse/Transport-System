@extends('layouts.master')

@section('userName',  Auth::user()->name )

@section('deptName', 'Supervisor Department')

@section('pageContent')

	<h2>Member List</h2>
  <div class="table-responsive">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th>Employee ID</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      @foreach($drivers as $driver)
        <tr class="text-center">
          <td>{{$driver->employee_id}}</td>
          <td>{{$driver->name}}</td>
          <td>{{$driver->type->name}}</td> 
          <td><a class="btn btn-sm btn-danger" href="{{route('delete.driver',['id'=>$driver->id])}}">Remove</a></td>
        </tr>
      @endforeach   
      </tbody>
    </table>
  </div>

@endsection

@section('sideBar')

             @include('supervisors.sidebar')
@endsection