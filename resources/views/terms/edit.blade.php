@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <form action="{{ route('terms.update', ['term' => $term]) }}" method="POST">
            @method('PATCH')
            @include('terms.edit-form')
        </form>
    </div>

@endsection
