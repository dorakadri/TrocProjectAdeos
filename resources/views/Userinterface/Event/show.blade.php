

@extends('components.layout')
@section('content')

<div class="row ">
      <div class="col-lg-12"  style="width: 70%;   ">
            <div class="card">
            <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Event details</h4>
                  </div>
                  
               </div>
               <div class="card-body">

               <div class="modal-dialog modal-dialog-centered" role="document"  >

                       
                           <div class="modal-content">
                               
                              <div class="modal-body mt-5">
                                   
                                       <div class="image-block">
                                       @if($event->image)
                                       <img src="{{asset('storage/' . $event->image)}}" class="img-fluid rounded w-100" alt="blog-img" loading="lazy"
                                          style="height: 15rem; object-fit: cover;"> 
                                                 @else

                                                <img src="{{asset('images/community/36.jpg')}}" class="img-fluid rounded w-100" alt="blog-img" loading="lazy"
                                          style="height: 15rem; object-fit: cover;"> 

                                                 @endif  
                                          
                                       </div>
                                       <div class="blog-description mt-3">
                                        <div class="d-flex justify-content-between">
                                        <h5 class=" mb-1 pb-3 border-bottom">{{$event->title}}</h5>

                                        <button type="button" class="btn  btn-soft-primary rounded-pill mb-3 me-1"
                                          onclick="window.location.href='{{ route('Community.show',$event->community->id) }}'">{{$event->community->name}}</button>
                                        </div>
                                           
                                         
                                          <div class="blog-meta d-flex justify-content-between align-items-center mb-3 position-right-side flex-wrap">
                                             <div class="d-flex ">
                                             <div class="date me-4 d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">calendar_month</i>{{ date('M d H:i', strtotime($event->start_time)) }}  </div>
                                             <div class="date me-4 d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">calendar_month</i>{{ date('M d H:i', strtotime($event->end_time)) }}</div>

                                             </div>
                  
                                             <div class="comments me-4 d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">
                                                group
                                                </i>{{$participants }}  going
                                             </div>
                                              
                                          </div>
                                          <p>{{$event->description}}</p>

                                          <div class="d-flex align-items-center justify-content-between position-right-side">
                                            @if($isGoing)
                                            <a href="{{ route('notParticipate', ['eventId' => $event->id]) }}"
                                                        class="btn smallbutton bg-soft-success"  style="width: 7rem"
                                                        onmouseover="this.innerHTML = 'Can\'t Go'; this.classList.add('bg-soft-warning'); this.classList.remove('bg-soft-success');"
                                                        onmouseout="this.innerHTML = 'Going'; this.classList.remove('bg-soft-warning'); this.classList.add('bg-soft-success');">
                                                        Going
                                                        </a>    
                                                    @else
                                                    <a href="{{ route('participateInEvent', ['eventId' => $event->id] ) }}" class="btn bg-soft-dark smallbutton" style="width: 7rem" >  Partticipate</a>
                                                    @endif
                                                    </div>
                                        </div>
                                   
                              </div>
                              
                           </div>
                        </div>
               </div>
            </div>
      </div>
</div>

                

@endsection

         
 
    