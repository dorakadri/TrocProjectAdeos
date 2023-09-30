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
                    <h3 class="text-white"> Edit Post</h3>
                  
                </div>
                </div>
            </div>
         
            <div class="col-sm-12 col-lg-12">
                <div class="card-body">
                  
                <form method="post" action="{{route('post.update', ['post' => $post])}}" enctype="multipart/form-data">
         @csrf 
        @method('put')
                    
                        <div class="form-group">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="title" value="{{$post->title}}" >
                        </div>
                     
                   
                            <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">description</label>
                            <input type="text" class="form-control" name="description" placeholder="description" value="{{$post->description}}" >
                        </div>
                      



                      

                         
                        
                    
                  
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                       
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