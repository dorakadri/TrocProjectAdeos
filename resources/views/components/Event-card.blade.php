@props(['event', 'isGoing', 'key' , 'participants'])


<div class="card card-transparent card-block card-stretch card-height blog-grid blog-single " data-bs-toggle="modal" data-bs-target="#eventModal_{{ $key }}"
          style="height: 20rem;background:#edf7ff"  >
            <div class="card-body p-0 position-relative">
               <div class="image-block">
                  @if($event->image)

                  <img src="{{asset('storage/' . $event->image)}}" class="img-fluid rounded w-100" alt="event-img"  style="height: 20rem; object-fit: cover;">
                  @else



                  <img src="{{asset('images/community/36.jpg')}}" class="img-fluid rounded w-100" alt="event-img"  style="height: 20rem; object-fit: cover;">
                  @endif               
               </div>
 
               <div class="blog-description p-3" >
                  <div class="date"><strong> {{ date('M d H:i', strtotime($event->start_time)) }} - {{ date('M d H:i', strtotime($event->end_time)) }}
                                    </strong>
                                    
                  </div>
                  <h5 class="mb-2"   style="text-overflow: ellipsis;  overflow: hidden;    white-space: nowrap;">{{$event->title}}</h5>
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

         <!-- Modal -->
   <div class="modal fade"id="eventModal_{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                          
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                 
                                 </button>
                              </div>
                              <div class="modal-body">
                                   
                                       <div class="image-block">
                                          <img src="{{asset('storage/' . $event->image)}}" class="img-fluid rounded w-100" alt="blog-img" loading="lazy"
                                          style="height: 15rem; object-fit: cover;">  
                                       </div>
                                       <div class="blog-description mt-3">
                                          <h5 class="mb-3 pb-3 border-bottom">{{$event->title}}</h5>
                                          <div class="blog-meta d-flex justify-content-between align-items-center mb-3 position-right-side flex-wrap">
                                             <div class="d-flex ">
                                             <div class="date me-4 d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">calendar_month</i>{{ date('M d H:i', strtotime($event->start_time)) }}  </div>
                                             <div class="date me-4 d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">calendar_month</i>{{ date('M d H:i', strtotime($event->end_time)) }}</div>

                                             </div>
                  
                                             <div class="comments me-4 d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">
                                                group
                                                </i>{{$participants[$key] }}  going
                                             </div>
                                              
                                          </div>
                                          <p>{{$event->description}}</p>
                                        </div>
                                   
                              </div>
                              
                           </div>
                        </div>
                     </div>

         
 
    