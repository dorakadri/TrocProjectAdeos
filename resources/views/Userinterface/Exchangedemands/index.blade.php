
    <div class="col-8 ">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                <h4 class="card-title">Demands</h4>
                <form class="me-2 position-relative searchbox ">
                    <div class="form-group mb-0">
                        <input type="email" class="form-control search-input w-100" id="exampleInputEmail1"
                            placeholder="Search">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                    </div>
                </form>
         
               </div>
            </div>
            <div class="card-body">
             
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">User Name</th>
                                <th scope="col">Echange Type</th>
                                <th scope="col">Status</th>
                                <th scope="col">Received At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($exchanges as $exchange)
                            <tr>
                                <td>{{ $exchange->user_id }}</td>
                              
                                <td>  <div class="d-flex align-items-center gap-2">
                                    <button type="button" class="btn d-inline-flex mb-3 me-1 btn-danger">
                                        @if ($exchange->echangetype->value === 'ob_ob')
                                            Object <-> Object
                                            @elseif ($exchange->echangetype->value === 'donate')
                                                Donate
                                            @elseif ($exchange->echangetype->value === 'ob_serv')
                                                Object <-> Service
                                                @else
                                                    {{ $annonce->echangetype->value }}
                                        @endif
                                    </button>
                        
                        
                                </div></td>
                                <td>
                                    @if ($exchange->status === 'pending')
                                        <span class="badge bg-warning mt-2">{{ $exchange->status }}</span>
                                    @elseif ($exchange->status === 'accepted')
                                        <span class="badge bg-success mt-2">{{ $exchange->status }}</span>
                                    @else
                                        <span class="badge bg-danger mt-2">{{ $exchange->status }}</span>
                                    @endif
                                </td>
                                
                                <td> {{ $exchange->created_at->diffForHumans() }}</td>
                                <td>   <a href="{{ route('Exchanges.show', $exchange->id) }}" type="button" class="btn btn-primary" >
                                    View more
                                    </a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
         </div>
      
    </div>
  