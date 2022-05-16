@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container pb-5" id="hub-central">
        <h1 class="text-center text-capitalize my-5" style="font-size: 80px; line-height: 0.75;">competition hub</h1>

        @can('update', \App\Hub::class)
            <p class="text-center"><a href="/hubs/create">Create New Hub</a></p>
        @endcan

        <div class="container" id="competition">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 pb-5">
                @foreach($hubs as $hub)
                    @if($hub->hubType == 'competition')
                        <div class="col-sm p-2">
                            <div class="card" style="max-width: 400px">
                                <a href="/hubs/{{ $hub->hubSlug }}">
                                    <img src="{{ asset('/storage/' . $hub->hubImage) }}" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <p class="card-title text-center" style="font-size: 2em;">{{ $hub->hubTitle }}</p>
                                    {{--                                <p class="card-text">{!! strip_tags(substr($hub->hubTitle, 0, 125)) . '...' !!}</p>--}}
                                </div>
                                @can('update', \App\Hub::class)
                                    <div class="card-footer">
                                        <div class="admin-controls d-flex justify-content-center align-items-center pb-2">
                                            <div><a href="/hubs/{{ $hub->id }}/edit">Edit Hub</a></div>
                                            <div>
                                                <form action="/hubs/{{ $hub->id }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf

                                                    <button class="btn btn-danger ml-4" type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
