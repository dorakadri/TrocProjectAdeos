
@extends('components.layout')
@section('content')

  
 
  <div class="row">
            <div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white"> Edit Event</h3>
                  
                </div>
                </div>
            </div>
         
            <div class="col-sm-12 col-lg-12">
                <div class="card-body ">
                  
                <form action="{{ route('Event.update' , $event->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
                <div class="row  d-flex">
                   <div  class=" col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="title"
                            value="{{$event->title}}">
                            @error('title')
                            <p class="text-danger">{{$message}}</p>
                                
                            @enderror
                        </div>
 
                        <div class="form-group">
                            <label class="form-label" for="description">description</label>
                            <textarea type="text" class="form-control" rows='5' name="description" placeholder="description"
                            value="{{$event->description}}">{{ $event->description}}</textarea>
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                                
                            @enderror
                        </div >
                        <div class="form-group">
                            <label class="form-label" for="location">location</label>
                            <input type="text" class="form-control" name="location" placeholder="location"
                            value="{{$event->location}}">
                            @error('location')
                            <p class="text-danger">{{$message}}</p>
                                
                            @enderror
                        </div >
                        <div class="form-group">
                            <label class="form-label" for="start_time">start time</label>
                            <input type="datetime-local" class="form-control" name="start_time"
                            value="{{$event->start_time}}">
                            @error('start_time')
                            <p class="text-danger">{{$message}}</p>
                                
                            @enderror
                        </div >
                        <div class="form-group">
                            <label class="form-label" for="end_time">end time</label>
                            <input type="datetime-local" class="form-control" name="end_time" 
                            value="{{$event->end_time}}">
                            @error('end_time')
                            <p class="text-danger">{{$message}}</p>
                                
                            @enderror
                        </div >            

                                
                       

                        <div class="form-group">
                            <label class="form-label" for="image">Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>

                   
                        <input type="hidden" name="community_id" value="{{ $communityId }}">

 

                          
                    
                    </div>
                    <div class=" col-lg-6  " style="margin-top:7rem;">
                          @if($event->image)   
                                                <div   style="height: 20rem; ">
                                                    <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid  w-100  " style="  object-fit: cover; height: 20rem; " alt="group-bg" loading="lazy">
            
                                                </div>                            
  
                                 @else
                               
                                 <div class="nav nav-pills nav-fill stepwizard-row "   role="tablist"  style="cursor: default;   height: 20rem; ;">
                                      
                                     <a class="nav-link btn   "  style="cursor: default; padding-top: 6rem;"  >
                                         <i class="material-symbols-outlined bg-soft-success text-success">photo_camera</i>
                                         <span>No photo</span>
                                     </a>
                                     
                                 </div>                         
                                    
                                  
                                @endif
                    </div>
                </div>
                   
                         
                       
                    </form>
                </div>
                </div>
            
            </div>
             </div>
            </div>
           </div>
     </div>
 </div>
       




    @endsection