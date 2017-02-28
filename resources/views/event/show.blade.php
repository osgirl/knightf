@extends('layouts.app')
@section('content')
<div class="container">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading box">{{$event->title}}</div>
                <div class="panel-body">



                  <div class="col-md-8">
                    {{$event->body}}
                   </div>
                   <div class="col-md-4"> 
                   <h3 style="margin-top: 0">Volunteers</h3>
                   <ol>
                    @foreach($event->volunteers as $vol)
                       <li>{{$vol->name}}</li>
                    @endforeach
                    </ol>
                  </div>





               <div class="row">
                  <div class="col-md-8 col-md-offset-2" style="margin-top: 3em">
                    {{Form::open(['method' => 'POST', 'action' => 'VolunteerController@store'])}}
                      <div class="form-group">
                        {{ Form::hidden('event_id', $event->id) }}
                        {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name'])}}
                      </div>
                      <div class="form-group text-center">
                        {{Form::submit('Volunteer', ['class' => 'bluebtn'])}}        
                      </div>
                    {{Form::close()}} 
                  </div>
                  </div>




                                       </div> 
                </div>
            </div>
        </div>

</div>
@endsection