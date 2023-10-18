@extends('components.layout')
@section('content')


    <div class="row">
        <div class="col-4">
            <div class="card card-block card-stretch card-height blog blog-detail">
    
            <x-Annonce-detail :annonce="$annonce" />
            </div>
        </div>  

        @include('Userinterface.Exchangedemands.index', ['exchanges' => $annonce->exchangesdemands])

               {{-- this will display when users want to view details of a post --}}
    {{--     <div class="col-lg-3">
            <div class="card">
         
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle avatar-130" src="{{ asset('images/pdf.jpg') }}"
                            alt="profile-img">
                        <h4 class="mt-2">Dorra KAdri</h4>
                        <a href="#" class="mb-3">@Dorra KAdri</a>
                        <div class=" me-4 d-flex align-items-center justify-content-center"><i
                                class="material-symbols-outlined pe-2 md-18 "> person_pin_circle</i>{{ $annonce->location }}
                        </div>

                        <p>Multidisciplinary photographer focused on travel and nature content</p>
                    </div>


                    <div class="d-flex justify-content-evenly">
                        <p class="mb-0">Tweets</p>
                        <p class="mb-0">Follower</p>
                        <p class="mb-0">Follow</p>
                    </div>
                    <div class="d-flex justify-content-evenly">
                        <h6 class="mb-0 fw-bold">847</h6>
                        <h6 class="mb-0 fw-bold">4.2k</h6>
                        <h6 class="mb-0 fw-bold">524</h6>
                    </div>
                </div>
            </div>
        </div>   --}}
        {{-- this will display in view detail of the owner of the post  --}} 
    
    </div>
@endsection
