@extends('layouts.app')

@section('title', 'Dance Classes Oakley | East County Performing Arts Center')
@section('description', 'Looking For Dance Studios in Oakley? ECPAC Offers Various Dance Styles For Kids Of All Ages.' )

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="mb-5">
            <h1 class="text-center my-3 font-weight-bold" style="font-size: 3em;">Dance Lessons in Oakley</h1>
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
                    <img src="/images/logo-mtjgd.png" alt="" class="img-fluid" style="max-width: 400px;">
                    <h2 class="text-center mt-3 font-weight-bold">More Than Just Dance Classes in Oakley</h2>
                    <h5 class="p-2 rounded text-center" style="background: yellow;"><em>East County Performing Arts Center located in Brentwood, CA welcomes families from all surrounding areas including Oakley</em></h5>

                    {{--                    <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Looking for Dance Studios in Oakley, Brentwood, & surrounding areas? Dance With Us!</p>--}}
                    <p>
                        We provide dance classes in Oakley, but more than that we develop excellence in our kids inside and outside the dance studio. Our dance family not only values technique but also community, friendship, encouragement, and growth. For dance studios in Oakley, come to East County Performing Arts Center!
                    </p>
                    <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
                </div>
            </div>
            <div class="col-sm">
                <img src="/images/dance-oakley.jpg" alt="dancer" class="img-fluid shadow rounded">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="/images/dance-studios-oakley.jpg" alt="" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm d-flex align-items-center">
                <div class="text-center">
                    <h2 class="text-center mt-3 font-weight-bold">Join Our Oakley Dance Family</h2>
                    <h5 class="p-2 rounded text-center" style="background: yellow;"><em>East County Performing Arts Center located in Brentwood, CA welcomes families from all surrounding areas including Oakley</em></h5>

                    <p>
                        If you are looking for dance studios in Oakley, we invite you to dance with us at East County Performing Arts Center. We have Acro and Theatre classes as well. To see a full list what we offer click on the button below!
                    </p>
                    <a href="/classes" target="_blank"><div class="btn btn-lg btn-aqua shadow text-center text-uppercase">See What Dance Classes We Offer</div></a>
                </div>
            </div>
        </div>
    </div>



    <hr>
    <div class="container my-5">
        <p class="text-center">
            For dance classes in Oakley, look no further than East County Performing Arts Center! You Belong Here.
        </p>
        <div class="d-flex justify-content-center">
            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
        </div>
    </div>

@endsection
