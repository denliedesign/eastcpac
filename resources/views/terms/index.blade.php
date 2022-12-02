@extends('layouts.app')

@section('title', 'Privacy Policy | East County Performing Arts Center | Nina Koch')
{{--@section('description', '')--}}

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container">
        <div class="py-5">
            <div class="d-flex justify-content-center mt-4">
                <a href="/images/privacy-policy.pdf" target="_blank"><div class="btn btn-outline-primary">View Privacy Policy PDF</div></a>
            </div>

            @can('update', \App\Term::class)
                <a href="/terms/create">New Term</a>
                <br><br>
            @endcan

                @foreach($terms as $term)
                        {!! $term->policyContent !!}
                    @can('update', \App\Term::class)
                        <form action="/terms/{{ $term->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger ml-4" type="submit">Delete</button>
                        </form>
                    @endcan
                @endforeach
        </div>
    </div>

@endsection
