
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
                    <h3 class="text-white"> Edit Community</h3>
                  
                </div>
                </div>
            </div>
         
            <div class="col-sm-12 col-lg-12">
                <div class="card-body">
                  
                <form action="{{ route('Community.update' , $community->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
                    
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="name" 
                            value="{{$community->name}}">
                        </div>
                        <div class="form-group">

                        <div class="form-group">
                            <label class="form-label" for="description">description</label>
                            <input type="text" class="form-control" name="description" placeholder="description"
                            value="{{$community->description}}">
                        </div >

                        <div class="form-group">
                        <label class="form-label" for="image">Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
  
                        </div>
 
                            
                          
                    
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