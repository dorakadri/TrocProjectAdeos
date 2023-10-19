@extends('components.layout')
@section('content')

    <div class="card w-100">
        <div class="card-header d-flex justify-content-between">
           <div class="header-title">
            <h4 class="card-title">Demands</h4>
            <form class="me-2 position-relative searchbox ">
                <div class="form-group mb-0">
                    <input type="email" class="form-control search-input w-100"  name="searchex" id="exampleInputEmail1"
                        placeholder="Search">
                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                </div>
            </form>
     
           </div>
        </div>
        <div class="card-body">
         
            <div class="table-responsive ">
                <table class="table">
                    <thead>
                        <tr>
                            <th >User Name</th>
                            <th >Echange Type</th>
                            <th >Status</th>
                            <th >Received At</th>
                            <th >picture i exchanged</th>
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

                            <td> 
                                <img src="{{ asset('storage/' . $exchange->picture) }}" alt="img" class="h-30 w-50">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
     </div>
  

@endsection