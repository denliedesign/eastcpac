<!--
brentwood kids dance - 70 - 5 //1111
brentwood dance for kids - 40 - 7 //1
dance for kids brentwood - 28 - 7 //1
dance classes kids brentwood 28 - 8 //111
-->

@extends('layouts.app')

@section('title', 'Brentwood Kids Dance | East County Performing Arts Center')
@section('description', 'Dance Classes for Kids in Brentwood')

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div class="text-center">
                    <h2 class="text-center mt-3 font-weight-bold">Brentwood Kids Dance at East County Performing Arts Center</h2>
                    <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Providing Dance Classes For Kids In Brentwood For Over 18 Years</p>
                    <p>
                        We offer dance for kids in Brentwood ages 2-18 in a variety of styles including Ballet, Musical Theater, Hip Hop, Acrobatics, Tumbling, Tap, Jazz, & Contemporary.
                    </p>
                    <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
                </div>
            </div>
            <div class="col-sm">
                <img src="/images/brentwood-kids-dance.jpg" alt="little ballerinas pose under balloons" class="img-fluid shadow rounded">
            </div>
        </div>
    </div>
    <div class="my-5">
        <div class="row mx-0 px-0" id="trial-section">
            <div class="container">
                @include('excellence')
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="d-flex justify-content-center">
            <img src="/images/dance-classes-kids-brentwood.png" alt="girls sitting in their tutus" class="img-fluid">
        </div>
        <h2 class="text-center font-weight-bold">Here Are Some Of The Brentwood Kids Dance Classes We Offer</h2>
        <div class="d-flex justify-content-center">
            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-pink shadow text-center text-uppercase">See All Class Offerings</div></a>
        </div>
        <div class="mt-5">
            @include('class-descriptions')
        </div>
    </div>
    <hr>
    <div class="container my-5">
        <p class="text-center">
            East County Performing Arts Center in Brentwood has dance for kids! Be a part of our dance family today.
        </p>
        <div class="d-flex justify-content-center">
            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
        </div>
    </div>

@endsection
