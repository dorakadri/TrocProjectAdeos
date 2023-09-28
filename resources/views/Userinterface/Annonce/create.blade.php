<div
id="post-modal-data"
class="card card-block card-stretch "
  >
<div class="card-header d-flex justify-content-between">
<div class="header-title">
 <h4 class="card-title">Create Post</h4>
</div>
</div>
<div class="card-body">
<div class="d-flex align-items-center">
 <div class="user-img">
   <img
     src="images/pdf.jpg"
     alt="userimg"
     class="avatar-60 rounded-circle"
     loading="lazy"
   />
 </div>
 <div
   class="post-text ms-3 w-100"
   data-bs-toggle="modal"
   data-bs-target="#post-modal"

 >
   <input
     type="text"
     class="form-control rounded"
     placeholder="Write something here..."
     style="border: none"
   />
 </div>
</div>

</div>

<div class="modal " id="post-modal"  data-bs-backdrop="static">
    <div class="modal-dialog modal-fullscreen-sm-down">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
          <a href="javascript:void(0);" class="lh-1" data-bs-dismiss="modal">
            <span class="material-symbols-outlined">close</span>
          </a>
        </div>
        <div class="modal-body">
          <form action="{{ route('Annonce.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex  gap-5">
              <div class="user-img">
                <img src="images/pdf.jpg" alt="userimg" class="avatar-40 rounded-circle  img-fluid" loading="lazy" />
              </div>
              <div class="w-100" >
              <textarea type="text" name="description"   class="form-control rounded " placeholder="Write something here..." style="border: none">{{ old('description') }}</textarea>
              @error('description')
                <p class="text-danger">{{$message}}</p>
                    
                @enderror
              </div>
            </div>
            <hr />
            <div class="form-group row mb-3">
              <label class="col-sm-2 mb-0">Title:</label>
              <div class="col-sm-8">
                <input class="form-control" name="title" value="{{ old('title') }}"  placeholder="Give your Post a Title" />
                @error('title')
                           <p class="text-danger">{{$message}}</p>
                               
                           @enderror
              </div>
            </div>
            <ul class="d-flex flex-wrap justify-content-between list-inline m-0 p-0">
                <li class="col-md-12 mb-2">
                 
                        <div class="input-group mb-3">
                            <input type="file" name="imageannonce"   class="form-control" id="inputGroupFile02">
                           
                          </div>
                  
                  </li>
              <li class="col-md-5 mb-3">
                <label class="form-label" for="exchangeType">Exchange type</label>
                <select class="form-select me-3" name="exchangeType" aria-label="Default select example">
                  <option disabled value="">Choose Type of exchange</option>
                  <option value="ob_ob" {{ old('exchangeType') == 'ob_ob' ? 'selected' : '' }}>Object against Object</option>
                  <option value="ob_serv" {{ old('exchangeType') == 'ob_serv' ? 'selected' : '' }}>Object against Service</option>
                  <option value="donate" {{ old('exchangeType') == 'donate' ? 'selected' : '' }}>Donation</option>
              </select>
              
                @error('echangetype')
                <p class="text-danger">{{$message}}</p>
                    
                @enderror
              </li>
              <li class="col-md-5 mb-3">
                <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
                <input type="text"  class="form-control rounded ml-3" name="tags"  value="{{old('tags')}}" placeholder="Example: Wood, Table, etc" />
                @error('tags')
                <p class="text-danger">{{$message}}</p>
                    
                @enderror
              </li>
            </ul>
            <button  class="btn btn-primary d-block w-100 mt-3">Post</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



