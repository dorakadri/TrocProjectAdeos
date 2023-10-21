@props(['event', 'isGoing', 'key' , 'participants'])


<div class="card card-transparent card-block card-stretch card-height blog-grid blog-single"
          style="height: 20rem;background:#edf7ff">
            <div class="card-body p-0 position-relative">
               <div class="image-block">
                  @if($event->image)

                  <img src="{{asset('storage/' . $event->image)}}" class="img-fluid rounded w-100" alt="event-img"  style="height: 20rem; object-fit: cover;">
                  @else



                  <img src="{{asset('images/community/36.jpg')}}" class="img-fluid rounded w-100" alt="event-img"  style="height: 20rem; object-fit: cover;">
                  @endif               
               </div>
               <!-- <div class="blog-description p-3" style="bottom: 0; margin: 0; background: #ffffffe0;border-radius: 0rem;"> -->

               <div class="blog-description p-3" >
               <div class="date"><strong> {{ date('M d H:i', strtotime($event->start_time)) }} - {{ date('M d H:i', strtotime($event->end_time)) }}
                                 </strong>
                                 
               </div>
               <h5 class="mb-2"   style="text-overflow: ellipsis;  overflow: hidden;    white-space: nowrap;">{{$event->description}}</h5>
                  <div class="d-flex align-items-center justify-content-between position-right-side">
                  @if($isGoing[$key])
                  <a href="{{ route('notParticipate', ['eventId' => $event->id]) }}"
                            class="btn smallbutton bg-soft-success"  style="width: 7rem"
                            onmouseover="this.innerHTML = 'Can\'t Go'; this.classList.add('bg-soft-warning'); this.classList.remove('bg-soft-success');"
                            onmouseout="this.innerHTML = 'Going'; this.classList.remove('bg-soft-warning'); this.classList.add('bg-soft-success');">
                            Going
                            </a>    
                        @else
                         <a href="{{ route('participateInEvent', ['eventId' => $event->id] ) }}" class="btn bg-soft-dark smallbutton" style="width: 7rem" >  Partticipate</a>
                         @endif
                      <div class="comment d-flex align-items-center"> {{$participants[$key] }} goings</div>
                  </div>
               </div>
            </div>
         </div>

      </div>