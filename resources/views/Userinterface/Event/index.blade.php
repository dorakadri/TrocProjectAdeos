
@extends('components.layout')
@section('content')

<div class="row ">

<!-- @if(count($events) == 0)
                <div class=" d-flex  flex-column justify-content-center  align-items-center" style="height: 30rem; ">
                  <h3>No events here yet! Be the first to create one</h3>
                  <a href="{{route('Event.create')}}" class="btn btn-primary  mt-4 ">
                    Create event
                     </a>  

                </div>
                @endif -->
@foreach($events as $key => $event)

      
<div class="col-lg-6 mb-4" >

<x-Event-card  :event="$event" :isGoing="$isGoing" :key="$key" :participants="$participants"  />
</div>

  @endforeach
  


</div>


   

@endsection