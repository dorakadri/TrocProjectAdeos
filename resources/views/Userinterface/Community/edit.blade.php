
@extends('components.layout')
@section('content')

     
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
                            <input type="text" class="form-control"value="{{$community->name}}" name="name"  >
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                                    
                                @enderror  
                        </div>
                        <div class="form-group">

                        <div class="form-group">
                            <label class="form-label" for="description">description</label>
                            <textarea type="text" name="description" value="{{$community->description}}"  class="form-control rounded " rows="5" >{{$community->description}}</textarea>
                            @error('description')
                                <p class="text-danger">{{$message}}</p>
                                    
                                @enderror                      
                        </div >
                                 @if($community->image)
                                  
                                 <div class="col-sm-12 d-flex   justify-content-center">

                                 <div class="col-sm-10  mt-2  ">
                                    <div class="card position-relative border-1 inner-page-bg"  style="height: 150px;">
                                       <img src="{{ asset('storage/' . $community->image) }}" class="img-fluid  w-100  " style="  object-fit: cover;" alt="group-bg" loading="lazy">

                                    </div>
                                </div>
                          
 
                                </div>
 
                                @else

                          
                                    
                              
                                <div class="nav nav-pills nav-fill stepwizard-row "   role="tablist"  style="cursor: default; ">
                                     
                                    <a class="nav-link btn" style="cursor: default; "  >
                                        <i class="material-symbols-outlined bg-soft-success text-success">photo_camera</i><span>No photo</span>
                                    </a>
                                    
                                </div>
                         
                                   
                                 
                                    @endif
                       

                        <div class="form-group">
                        <label class="form-label" for="imagecomu">Image</label>
                        <input type="file" class="form-control" name="imagecomu" accept="image/*">
                        </div>
  
                        </div>
 
                            
                          
                    
                        <button type="submit" class="btn btn-primary">Save</button>
                       
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