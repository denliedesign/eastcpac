@extends('layouts.app')

@section('title', 'Careers | East County Performing Arts Center | Nina Koch')
@section('description', 'Find employment opportunities with us')

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <h2 class="text-center mt-3 font-weight-bold">Careers</h2>
        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">
            Imagine a world where people wake up every morning inspired to grow leaders, deliver excellence, and make a big impact in the world.
            <br><br>
            That’s what we do, and we need your help.
        </p>

    @can('update', \App\Text::class)
        <div id="about-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
            <span class="fw-bold mx-3">careers text section A</span>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#textModal"
                    onClick="AddTextName('careers'); AddTextSection('A');">
                Create New
            </button>
            @include('/texts/form')
        </div>
    @endcan
    @foreach($texts as $text)
        @if($text->name == 'careers' && $text->section == 'A')
            <div>
                {!! $text->content !!}
                @include('/texts/admin')
            </div>
        @endif
    @endforeach

    </div>

@endsection
