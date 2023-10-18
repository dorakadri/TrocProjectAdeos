@props(['annonce'])

<div class="col-sm-12">
    <div class="card card-block card-stretch card-height">
        <div class="card-body">
            <div class="user-post-data">
                <div class="d-flex justify-content-between">
                    <div class="me-3">
                        <img class="avatar-40 rounded-circle" src="images/pdf.jpg" alt="" loading="lazy">
                    </div>
                    <div class="w-100">
                        <div class="d-flex  justify-content-between">

                            <div class="">
                                <h5 class="mb-0 d-inline-block">Dorra Kadri</h5>

                                <p class="mb-0 text-primary">{{ $annonce->created_at->diffForHumans() }}</p>

                            </div>

                            <div class="card-post-toolbar">
                                <div class="dropdown">
                                    <span class="dropdown-toggle material-symbols-outlined" id="postdata-5"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        role="button">
                                        more_horiz
                                    </span>
                                    <div class="dropdown-menu m-0 p-0" aria-labelledby="postdata-5">
                                        <a class="dropdown-item p-3" href="{{ route('Annonce.edit', $annonce->id) }}">
                                            <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                    save
                                                </span>
                                                <div class="data ms-2">
                                                    <h6>Edit Post</h6>
                                                    <p class="mb-0">Edit your post</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item p-3" href="{{ route('Annonce.show', $annonce->id) }}">
                                            <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                    info
                                                </span>
                                                <div class="data ms-2">
                                                    <h6>Show details</h6>
                                                    <p class="mb-0">Show detailed information</p>
                                                </div>
                                            </div>
                                        </a>
                                        <form action="{{ route('Annonce.destroy', $annonce->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="dropdown-item p-3" type="submit">
                                                <div class="d-flex align-items-top">
                                                    <span class="material-symbols-outlined">
                                                        cancel
                                                    </span>
                                                    <div class="data ms-2">
                                                        <h6>Delete post</h6>
                                                        <p class="mb-0">Delete your post</p>
                                                    </div>
                                                </div>
                                            </button>
                                        </form>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                @if ($annonce->taken)
                    <div class="d-flex gap-1">
                        <span class="material-symbols-outlined  text-success ">
                            new_releases
                        </span>
                        <p class=" text-success   font-weight-bold">TAKEN</p>
                    </div>
                @endif
                <div class=" me-4 d-flex align-items-center pb-1 "><i class="material-symbols-outlined pe-2 md-18 ">
                        person_pin_circle</i>{{ $annonce->location }}</div>
                <h4>{{ $annonce->title }}</h4>
                <p>{{ $annonce->description }}</p>
            </div>

            <div class="comment-area my-3">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="like-block position-relative d-flex align-items-center">
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
            <div class="comment-area my-3">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="like-block position-relative d-flex align-items-center">
                        <div class="d-flex align-items-center gap-2">

                            <x-AnnonceTags :tags="$annonce->tags" />
                        </div>

                    </div>
                </div>

            </div>
            <div class="user-post">
                <a href="javascript:void(0);">
                    @if (!empty($annonce->image))
                        @if (str_starts_with($annonce->image, 'http') || str_starts_with($annonce->image, 'https://'))
                            <img src="{{ $annonce->image }}" alt="post-image" class="img-fluid rounded w-100"
                                loading="lazy">
                        @else
                            <img src="{{ asset('storage/' . $annonce->image) }}" alt="post-image"
                                class="img-fluid rounded w-100" loading="lazy">
                        @endif
                    @endif
   
                </a>
                <a type="button" href="/Exchange/createbyid/{{ $annonce->id }}"
                    class="btn btn-primary d-block mt-3 w-100">Exchange</a>

                 

            </div>


        </div>
    </div>
</div>
