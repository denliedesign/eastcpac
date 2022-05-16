@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="py-5">
        <div class="container pb-5">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('/storage/' . $hub->hubImage) }}" alt="" class="img-fluid" style="max-width: 400px; height: auto;">
            </div>
            <h3 class="text-center mt-3 font-staat txt-purple" style="font-size: 50px;">{{ $hub->hubTitle }}</h3>
            <p>{!! $hub->hubContent !!}</p>
            @if($hub->hubPdf)
                <div class="d-flex justify-content-center mt-5">
                    <img src="{{ asset('/storage/' . $hub->hubPdf) }}" class="img-fluid">
                </div>
            @endif
            <div class="mt-5" style="font-size: 24px;">
                <a href="{{ url()->previous() }}"><button class="btn-summit btn-purple shadow text-uppercase">Back</button></a>
            </div>

        </div>
    </div>

@endsection
