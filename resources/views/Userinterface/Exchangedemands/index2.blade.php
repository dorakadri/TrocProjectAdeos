@extends('components.layout')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white">My Demands</h3>

                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">

            </div>
            <div class="card-body flex">

                <div class="table-responsive">
                    <table id="datatable" class="table  table-bordered">
                        <thead>
                            <tr>
                                <th>post </th>
                                <th>Echange Type</th>
                                <th>Status</th>
                                <th>Received At</th>
                                <th>picture i exchanged</th>
                                <th> action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($exchanges as $exchange)
                                <tr>
                                    <td>
                                        <a href="/seedetail/{{ $exchange->annonce_id }}" class="iq-icons-list d-flex align-items-center">
                                            <i class="material-symbols-outlined me-1">info</i>
                                        </a>
                              

                                    </td>

                                    <td>
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


                                    </td>
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

                                    <td class="w-25">
                                           
                                        <img src="{{ asset('storage/' . $exchange->picture) }}" alt="img"
                                            class=" w-100">

                                    </td>

                                    <td class="w-25">
                                        <form action="{{ route('Exchanges.destroy', $exchange->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-primary d-block mt-3 w-100 {{ $exchange->status !== 'accepted' ? '' : 'disabled' }}">Decline
                                                this demand</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
