@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default shadow">
                <div class="panel-heading box">Event Calendar</div>
                <div class="panel-body">
                  <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('customscripts')


  {{-- fullCalendar scripts --}}
  <link rel='stylesheet' href='{{asset('css/fullcalendar.css')}}'/>
  <script src='{{asset('js/jquery.min.js')}}'></script>
  <script src='{{asset('js/moment.min.js')}}'></script>
  <script src='{{asset('js/fullcalendar.js')}}'></script>

<script type='text/javascript'>
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
    // put your options and callbacks here
        events: [
        @foreach($events as $event)
        {
            title  : '{{$event->title}}',
            start  : '{{$event->start_date}}',
            url: '{{url('/event/'.$event->id)}}',
            color: '#243A84',
        },
        @endforeach
    ]

    })

});

</script>
@endsection