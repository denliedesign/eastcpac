@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container pb-5" id="hub-central">
        <h1 class="text-center text-capitalize my-5" style="font-size: 80px; line-height: 0.75;">hub central</h1>

        @can('update', \App\Hub::class)
            <p class="text-center"><a href="/hubs/create">Create New Hub</a></p>
        @endcan

        <div class="row mb-5">
            <div class="col-sm">
                <a href="/recital-hub" style="text-decoration: none;">
                    <img src="/images/hub-recital.jpg" alt="" class="img-fluid rounded shadow">
                    <h2 class="text-center mt-3 font-weight-bold text-capitalize m-2" style="color: #12a9b0;">recital</h2>
                </a>
            </div>
            <div class="col-sm">
                <a href="/competition-hub" style="text-decoration: none;">
                    <img src="/images/hub-competition.jpg" alt="" class="img-fluid rounded shadow">
                    <h2 class="text-center mt-3 font-weight-bold text-capitalize m-2" style="color: #12a9b0;">competition</h2>
                </a>
            </div>
        </div>
    </div>

@endsection
