@extends('components.layout')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>User information</h3>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        @if ($owner->profile_photo_path!==null)
                            <img class="img-fluid rounded-circle avatar-130"
                                src="{{ asset('storage/' . $owner->profile_photo_path) }}" alt="profile-img">
                        @else
                            <img class="img-fluid rounded-circle avatar-130" src="{{asset('images/logo.png')}}"  alt="profile-img">
                        @endif
                        <h4 class="mt-2">{{ $owner->username }}</h4>
                        <a href="#" class="mb-3">{{ $owner->phone }}</a>
                        <div class=" me-4 d-flex align-items-center justify-content-center"><i
                                class="material-symbols-outlined pe-2 md-18 "> person_pin_circle</i>tounis
                        </div>
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
            <div class="card">
                <div class="card-header">
                    <h3>object information</h3>

                </div>
                <div class="card-body">
                    <div class="image-block">

                        @if (!empty($annonce->image))
                            @if (str_starts_with($annonce->image, 'http') || str_starts_with($annonce->image, 'https://'))
                                <img src="{{ $annonce->image }}" alt="blog-img" class="img-fluid rounded w-100"
                                    loading="lazy">
                            @else
                                <img src="{{ asset('storage/' . $annonce->image) }}" alt="blog-img"
                                    class="img-fluid rounded w-100" loading="lazy">
                            @endif
                        @endif

                    </div>
                    <div class="blog-description mt-3">
                        <h5 class="mb-3 pb-3 border-bottom">{{ $annonce->description }}</h5>
                        <div class="blog-meta d-flex align-items-center mb-3 position-right-side flex-wrap">
                            <div class="date me-4 d-flex align-items-center"><i
                                    class="material-symbols-outlined pe-2 md-18 text-primary">calendar_month</i>{{ $annonce->created_at->diffForHumans() }}
                            </div>



                        </div>



                        @if ($annonce->status === 'pending')
                            <span class="badge bg-warning my-2  "
                                href="?status={{ $annonce->status }}">{{ $annonce->status }}</span>
                        @elseif ($annonce->status === 'accepted')
                            <span class="badge bg-success my-2"
                                href="?status={{ $annonce->status }}">{{ $annonce->status }}</span>
                        @else
                            <span class="badge bg-danger my-2"
                                href="?status={{ $annonce->status }}">{{ $annonce->status }}</span>
                        @endif
                        <div class="d-flex align-items-center gap-2">
                            <button type="button" class="btn d-inline-flex mb-3 me-1 btn-danger">
                                @if ($annonce->echangetype->value === 'ob_ob')
                                    Object <-> Object
                                    @elseif ($annonce->echangetype->value === 'donate')
                                        Donate
                                    @elseif ($annonce->echangetype->value === 'ob_serv')
                                        Object <-> Service
                                        @else
                                      {{ $annonce->echangetype->value }}
                                @endif
                            </button>


                        </div>

                    </div>
                </div>
            </div>
          

        </div>

    </div>
    </div>

@endsection
