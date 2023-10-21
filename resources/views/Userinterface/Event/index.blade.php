
@extends('components.layout')
@section('content')

<div class="row ">
@foreach($events as $key => $event)

      
<div class="col-lg-6 mb-4" >

<x-Event-card  :event="$event" :isGoing="$isGoing" :key="$key" :participants="$participants" />


  @endforeach
  

</div>
</div>

@endsection