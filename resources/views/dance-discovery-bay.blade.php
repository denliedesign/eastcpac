@extends('layouts.app')

@section('title', 'Dance Classes Discovery Bay | East County Performing Arts Center')
@section('description', 'Looking For Dance Studios in Discovery Bay? ECPAC Offers Various Dance Styles For Kids Of All Ages.' )

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="mb-5">
            <h1 class="text-center my-3 font-weight-bold" style="font-size: 3em;">Dance Lessons in Discovery Bay</h1>
{{--            <div class="row">--}}
{{--                <div class="col-sm d-flex align-items-center"></div>--}}
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <img src="/images/dance-studios-discovery-bay.jpg" alt="" class="img-fluid shadow rounded">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div class="text-center">
                    <h2 class="text-center mt-3 font-weight-bold">Dance Classes in Discovery Bay at East County Performing Arts Center</h2>
                    <h5 class="p-2 rounded text-center" style="background: yellow;"><em>East County Performing Arts Center located in Brentwood, CA welcomes families from all surrounding areas including Discovery Bay</em></h5>

                    <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Looking for Dance Studios in Discovery Bay, Brentwood, & surrounding areas? Dance With Us!</p>
                    <p>
                        Whether it's Ballet, Jazz, Tap, Hip Hop, Acrobatics, Tumbling, Musical Theater, or Contemporary, we have a dance class for you! If you are looking for kids dance classes in Discovery Bay, ECPAC has options for ages 2-18 years old.
                    </p>
                    <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
                </div>
            </div>
            <div class="col-sm">
                <img src="/images/dance-classes-discovery-bay.jpg" alt="dancer" class="img-fluid shadow rounded">
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
        <div class="mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/dance-studios-discovery-bay.jpg" alt="dancer" class="img-fluid shadow rounded">
                    </div>
                </div>
                <div class="col-sm">
                    <h2 class="text-center font-weight-bold">Programs We Offer For Dance Studios in Discovery Bay & Surrounding Areas</h2>
                    <h5 class="p-2 rounded text-center" style="background: yellow;"><em>East County Performing Arts Center located in Brentwood, CA welcomes families from all surrounding areas including Discovery Bay</em></h5>

                    <ul style="line-height: 2;">
                        <li><a href="/classes">Dance Classes In Discovery Bay</a></li>
                        <li><a href="/teams">Performing Company</a></li>
                        <li><a href="/teams">Competition Team</a></li>
                        <li><a href="/ballet-company-of-east-county">The Ballet Company Of East County</a></li>
                        <li><a href="/ballet-company-of-east-county">Nutcracker</a></li>
                        <li><a href="/recital">Recital</a></li>
                        <li><a href="/camps-and-events">Dance Camps</a></li>
                        <li><a href="/parties">Parties</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container my-5">
        <p class="text-center">
            East County Performing Arts Center has dance for kids! Be a part of our Discovery Bay dance family today.
        </p>
        <div class="d-flex justify-content-center">
            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
        </div>
    </div>

@endsection
