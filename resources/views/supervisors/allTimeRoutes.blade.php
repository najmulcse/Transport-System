@extends('layouts.master')

@section('userName',  Auth::user()->name )

@section('deptName', 'Supervisor Department')

@section('pageContent')

	<h2>Time List</h2>
  @if(count($times)>0)
      <div class="table-responsive">
        <table class="table table-hover table-bordered">
          <thead >
            <tr>
              <th>S.ID</th>
              <th>Time</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($times as $time)
              <tr class="text-center">
                <td>{{$time->id}}</td>
                <td>{{$time->time}}</td>
                 
                <td><a class="btn btn-sm btn-danger" href="{{route('delete.time',['id'=>$time->id])}}">Remove</a></td>
              </tr>
            @endforeach   
          </tbody>
        </table>
      </div>
  @else
      <h4>Empty</h4>
  @endif

  <hr>
<h2>Route List</h2>
  @if(count($routes)>0)
    <div class="table-responsive">
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>   
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach($routes as $route)
              <tr class="text-center">
                <td>{{$route->id}}</td>
                <td>{{$route->name}}</td>
                <td><a class="btn btn-sm btn-danger" href="{{route('delete.route',['id'=>$route->id])}}">Remove</a></td>
              </tr>
            @endforeach   
        </tbody>
      </table>
    </div>
  @else
   <h4>Empty</h4>
  @endif
@endsection

@section('sideBar')

             @include('supervisors.sidebar')
@endsection