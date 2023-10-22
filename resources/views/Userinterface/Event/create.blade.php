
@extends('components.layout')
@section('content')

    

  <div class="row">
            <div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white"> Create Event</h3>
                  
                </div>
                </div>
            </div>
         
            <div class="col-sm-12 col-lg-12">
                <div class="card-body">
                  
                <form method="post" action="{{route('Event.store')}}"  enctype="multipart/form-data">
         @csrf 
        @method('post')
                        <div class=" row d-flex">
                            <div class="form-group col-6">
                                <label class="form-label" for="start_time">Start Date</label>
                                <input type="datetime-local" class="form-control"value="{{old('start_time')}}" name="start_time">
                                @error('start_time')
                                <p class="text-danger">{{$message}}</p>
                        
                                    @enderror
                            </div >
                            <div class="form-group col-6">
                                <label class="form-label" for="end_date">End Date</label>
                                <input type="datetime-local" class="form-control" value="{{old('end_date')}}" name="end_date" >
                                @error('end_date')
                                <p class="text-danger">{{$message}}</p>
                        
                                    @enderror
                            </div >
                        </div>
                    
                        <div class="form-group">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control"value="{{old('title')}}" name="title" placeholder="title">
                             @error('title')
                            <p class="text-danger">{{$message}}</p>
                                    
                                @enderror  
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description">Description</label>
                            <textarea type="text" name="description"   class="form-control rounded " rows="5" >{{ old('description') }}</textarea>
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                                    
                                @enderror
                        </div >
                        <div class="form-group">
                            <label class="form-label" for="location">Location</label>
                            <input type="text" class="form-control" name="location" value="{{old('location')}}"  placeholder="location">
                            @error('location')
                            <p class="text-danger">{{$message}}</p>
                     
                                @enderror
                        </div >
                        

                      

                        <div class="form-group">
                        <label class="form-label" for="image">Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                        <input type="hidden" name="community_id" value="{{ $communityId }}">
 
                        
                    
                        <button type="submit" class="btn btn-primary">Create</button>
                       
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