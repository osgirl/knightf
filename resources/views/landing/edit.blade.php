@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default shadow">
                <div class="panel-heading box">Landing Page Content</div>
                <div class="panel-body">
            {{Form::model($landing, ['method' => 'PATCH', 'action' => ['LandingController@update', $landing->id]])}}
                  <div class="form-group">
                    {{Form::label('title', 'Title:')}}
                    {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Title'])}}
                   </div>
                  <div class="form-group">
                   {{Form::label('body', 'Body:')}}
                   {{Form::textarea('body', null, ['class' => 'form-control'])}}
                  </div>
                  <div class="form-group" style="float:right">
                    {{Form::submit('Update', ['class' => 'bluebtn'])}}        
                  </div>
                    {{Form::close()}} 
                   <a style='float:right' href="{{url('/')}}"><button class="blackbtn">Cancel</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- @section('customscripts')
    @include('_include.froala.froala-js')
    @include('_include.froala.froala-options')
    @include('_include.froala.froala-css')
@endsection --}}