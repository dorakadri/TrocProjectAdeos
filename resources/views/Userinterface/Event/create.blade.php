
@extends('components.layout')
@section('content')

      <div>
    <div class="position-relative">
    </div>
    <div id="content-page" class="content-page">
          <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <div class="container">

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
                    
                        <div class="form-group">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="title">
                        </div>
 
                        <div class="form-group">
                            <label class="form-label" for="description">description</label>
                            <input type="text" class="form-control" name="description" placeholder="description">
                        </div >
                        <div class="form-group">
                            <label class="form-label" for="location">location</label>
                            <input type="text" class="form-control" name="location" placeholder="location">
                        </div >
                        <div class="form-group">
                            <label class="form-label" for="start_time">start time</label>
                            <input type="datetime-local" class="form-control" name="start_time">
                        </div >
                        <div class="form-group">
                            <label class="form-label" for="end_time">end time</label>
                            <input type="datetime-local" class="form-control" name="end_time" >
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