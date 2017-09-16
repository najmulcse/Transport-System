@extends('layouts.master')

@section('userName',  Auth::user()->name )

@section('deptName', 'Supervisor Department')

@section('pageContent')

	<h2>Add Route</h2>

<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
   <form  class="form-horizontal " role="form" method="POST" action="{{route('store.route')}}" >
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
           
      <div class="form-group row">
            <label for="route" class="col-sm-4 col-form-label">Route Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="route" placeholder=" Route Name">
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