@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                


                    {{Form::open(['method' => 'POST', 'action' => 'VolunteerController@create'])}}
                  <div class="form-group">
       
                    {{Form::label('name', 'Name:')}}
                    {{Form::text('Name', null, ['class' => 'form-control', 'placeholder' => 'Volunteer'])}}
                   </div>
                  <div class="form-group" style="float:right">
                    {{Form::submit('Volunteer', ['class' => 'bluebtn'])}}        
                  </div>
                    {{Form::close()}} 


                </div>
            </div>
        </div>
    </div>
</div>
@endsection