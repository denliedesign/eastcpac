@extends('layouts.app')

@section('title', 'Parties | East County Performing Arts Center')
@section('description', 'The Perfect Place To Celebrate')

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <h2 class="text-center mt-3 font-weight-bold">Birthday Parties</h2>
        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">You provide the cake, cutting knife and snacks</p>
        <p>
            Ready to reserve your party?  Click the link below and fill out the form.  We will contact you to confirm your date and collect the 50% deposit.
            <br><br>
            Click LET'S PARTY to reserve your party today!
        </p>
        <a href="https://forms.gle/ms17t2AG4s3ZXRfZA" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase">LET'S PARTY!</div></a>
    </div>

@endsection
