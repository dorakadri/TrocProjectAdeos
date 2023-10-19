@extends('admin.components.layout')
@section('contentadmin')

<div class ="container  container-fluide" >
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
                    <h3 class="text-white text-center mt-5"  > Add Association</h3>
                  
                </div>
                </div>
            </div>
         
            <div class="col-sm-12 col-lg-12">
                
                <div class="card-body">
                  
                <form method="post" action="{{route('associations.update', ['association' => $association])}}" enctype="multipart/form-data">
         @csrf 
        @method('put')
                    
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="name" value="{{$association->name}}" >
                        </div>
                        <div class="form-group">
                                <label class="form-label" for="logo">Logo</label>
                                <input type="file" class="form-control" name="logo" accept="image/*">
                            </div>
                      
                            <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">description</label>
                            <input type="text" class="form-control" name="description" placeholder="description" value="{{$association->description}}" >
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
 
</div>



    @endsection