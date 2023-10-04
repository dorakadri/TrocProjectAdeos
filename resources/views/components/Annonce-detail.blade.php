@props(['annonce'])

<div class="card-body">
    <div class="image-block">

        @if (!empty($annonce->image))
            @if (str_starts_with($annonce->image, 'http') || str_starts_with($annonce->image, 'https://'))
                <img src="{{ $annonce->image }}" alt="blog-img" class="img-fluid rounded w-100" loading="lazy">
            @else
                <img src="{{ asset('storage/' . $annonce->image) }}" alt="blog-img"
                    class="img-fluid rounded w-100" loading="lazy">
            @endif
        @endif

    </div>
    <div class="blog-description mt-3">
        <h5 class="mb-3 pb-3 border-bottom">{{ $annonce->title }}</h5>
        <div class="blog-meta d-flex align-items-center mb-3 position-right-side flex-wrap">
            <div class="date me-4 d-flex align-items-center"><i
                    class="material-symbols-outlined pe-2 md-18 text-primary">calendar_month</i>{{ $annonce->created_at->diffForHumans() }}
            </div>
            <div class="date me-4 d-flex gap-2 align-items-center">

                <x-AnnonceTags :tags="$annonce->tags" />
            </div>

            @if ($annonce->taken)
                <div class="like me-4 d-flex align-items-center">
                    <span class="material-symbols-outlined  text-success ">
                        new_releases
                    </span>
                    <p class=" text-success   font-weight-bold">TAKEN</p>
                </div>
            @endif


        </div>
        <p>{{ $annonce->description }}</p>
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