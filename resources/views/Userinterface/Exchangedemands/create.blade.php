@extends('components.layout')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">your exchange proposition </h4>
                    </div>
                </div>
                <div class="card-body">

                    <form action="{{ route('Exchanges.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="annonceid" value="{{ $annonce->id }}">
                      <input type="hidden" name="user_id" value="{{Auth::user()->id }}">
                        <ul class="d-flex flex-wrap justify-content-between list-inline m-0 p-0">

                            <li class="col-md-12 mb-3">
                                <label class="form-label" for="echangetype">Exchange type</label>
                                <select class="form-select me-3" name="echangetype" id="echangetype"
                                    aria-label="Default select example">
                                    <option disabled value="">Choose Type of exchange</option>
                                    <option value="ob_ob" {{ old('echangetype') == 'ob_ob' ? 'selected' : '' }}>exchange
                                        with an object </option>
                                    <option value="ob_serv" {{ old('echangetype') == 'ob_serv' ? 'selected' : '' }}>exchange
                                        with a Service</option>
                                    <option value="donate" {{ $annonce->echangetype->value !== 'donate' ? 'disabled' : '' }}  {{ old('echangetype') == 'donate' ? 'selected' : '' }}>Take it
                                    </option>
                                </select>

                                @error('echangetype')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </li>
                            <li class="col-md-12 mb-3 description-input ">
                                <label class="form-label">description</label>
                                <textarea type="text" name="description" class="form-control rounded  " placeholder="Write something here..."
                                    style="border: none">{{ old('description') }}</textarea>

                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </li>
                            <li class="col-md-12 mb-2 ">

                                <div class=" mb-3  image-input  ">
                                    <input type="file" name="picture" class="form-control " id="inputGroupFile02">
                                    @error('picture')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </li>

                        </ul>
                        <div class="d-flex gap-3">
                            <button class="btn btn-primary d-block w-100 mt-3">commit</button>

                            <a href="{{ route('Annonce.index') }}" class="btn btn-dark d-block w-100 mt-3">Back</a>

                        </div>
                    </form>


                </div>
            </div>
        </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">The Post</h4>
                            </div>
                        </div>
                        <x-Annonce-detail :annonce="$annonce" />
                    </div>
                </div>
            </div>
        @endsection
