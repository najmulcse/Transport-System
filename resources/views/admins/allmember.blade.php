@extends('layouts.master')

@section('userName',  Auth::user()->name )

@section('deptName', 'Admin')

@section('pageContent')

	<h2>Member List</h2>
  <div class="table-responsive">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th>Employee ID</th>
          <th>Name</th>
          <th>Department</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      @foreach($members as $member)
        <tr>
          <td>{{$member->employee_id}}</td>
          <td>{{$member->name}}</td>
          <td>{{$member->type->name}}</td>
          @if($member->id !=1)
          <td><a class="btn btn-sm btn-danger" href="{{route('delete.member',['id'=>$member->id])}}">Remove</a></td>
          @endif
        </tr>
      @endforeach   
      </tbody>
    </table>
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