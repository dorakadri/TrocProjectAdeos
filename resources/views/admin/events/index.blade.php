@extends('admin.components.layout')
@section('contentadmin')


    @if (count($events)==0)
     
                           <div class=" d-flex  flex-column justify-content-center  align-items-center" style="height: 15rem; ">
                                 <h3>It looks like there are no events here yet! </h3>
                                 

                              </div>
                        @endif         
                        <div class=" col-lg-12 col-md-12 row ">
                        @foreach($events as $key => $event)
                        
                            <div class="col-lg-4 col-md-6 mt-4 mb-4" >
                              <div class="card z-index-2 ">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                  <div class="bg-gradient-primary shadow-info border-radius-lg  ">
                                                
                                      @if($event->image)

                                          <img src="{{asset('storage/' . $event->image)}}" class="img-fluid rounded w-100" alt="event-img"  style="height: 10rem; object-fit: cover;">
                                          @else



                                          <img src="{{asset('images/community/36.jpg')}}" class="img-fluid rounded w-100" alt="event-img"  style="height: 20rem; object-fit: cover;">
                                          @endif 
                                  
                                  </div>
                                </div>
                                <div class="card-body"  style="height: 17rem">
                                <div class="d-flex  mb-2">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm"> {{ date('M d H:i', strtotime($event->start_time)) }} - {{ date('M d H:i', strtotime($event->end_time)) }} </p>
                                  </div>
                                  <h6 class="mb-0 ">{{$event->title}}</h6>
                                  <hr class="dark horizontal">

                                  
                                  <p class="text-sm ">{{$event->description}}</p>
                                  
                                </div>
                              </div>
                            </div>
                            
                         

                                                    
                        @endforeach
                        </div>
@endsection