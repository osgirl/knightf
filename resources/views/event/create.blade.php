

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default shadow">
                <div class="panel-heading box">Add Event</div>
                <div class="panel-body">
                {{Form::open(['method' => 'POST', 'action' => 'EventController@store'])}}
                  <div class="form-group">
                    {{Form::label('title', 'Title:')}}
                    {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Title'])}}
                   </div>
                   <div class="form-group">
                    {{Form::label('start_date', 'Date:')}}
                  {{ Form::text('start_date', null, ['class' => 'form-control', 'id' => 'datepicker', 'placeholder' => 'yyyy-mm-dd']) }}

                  </div>

                  <div class="form-group">
                   {{Form::label('body', 'Body:')}}
                   {{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Body'])}}
                  </div>
                  <div class="form-group" style="float:right">
                    {{Form::submit('Create', ['class' => 'bluebtn'])}}        
                  </div>
                    {{Form::close()}} 
                   <a style='float:right' href="{{url('/')}}"><button class="blackbtn">Cancel</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('customscripts')
{{-- Scripts for datepicker --}}
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
  $(function() {
      $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
  });
  </script>
@endsection