@extends('layouts.master')

@section('userName',  Auth::user()->name )

@section('deptName', 'Supervisor Department')

@section('pageContent')

	<h2>Add Time</h2>

<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
   <form  class="form-inline " role="form" method="post" action="{{route('store.time')}}" >
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
            <label for="time" class="col-sm-4 col-form-label">TIME</label>
            <div class="col-sm-8">
              <input type="number" step=".01" class="form-control" name="time" placeholder=" TIME">
            </div>
        </div>
         <div class="form-group @if($errors->has('time')) has-error @endif">

            <label for="type" class="col-sm-4 col-form-label"></label>
             <div class="dropdown col-sm-8">

                 <select class="btn btn-md form-control" name="type" >
                    <option value="" selected="">SELECT ONE</option>
                    <option value="AM" >AM</option>
                    <option value="PM">PM</option>
                    
                    
                </select>
                {!!$errors->first('type','<span class="help-block">:message</span>')!!}
            </div>
            </div>
         
      
        
          <div class="form-group row">
            <label class="col-sm-4"></label>
             <div class="col-sm-8 ">
              <button type="submit"  class="btn btn-primary form-control">Add Time</button>
          </div>
      </div>
    </form>
    </div>
  </div>


@endsection

@section('sideBar')

              @include('supervisors.sidebar')

@endsection