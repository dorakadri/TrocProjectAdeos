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
       
         
            <div class="col-sm-12 col-lg-12">
                <div class="card-body">
                  
                    <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
         @csrf 
        @method('post')
        
               
                
      <div class="mb-6">
        <label for="image" class="inline-block text-lg mb-2">
        image
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />

        @error('image')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
               
       
                    
                        <div class="form-group">
                            <label class="form-label" for="title">title</label>
                            <input type="text" class="form-control" name="title" placeholder="title">
                        </div>
                            <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">description</label>
                            <input type="text" class="form-control" name="description" placeholder="description">
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