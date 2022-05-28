@extends('layouts.app')

@section('title', 'Dance Classes in Antioch CA | East County Performing Arts Center')
@section('description', 'ECPAC Is The Best Dance Studio In Antioch CA. Our Professional Instructors Are Dedicated To The Growth Of Every Dancer In Every Style.' )

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="mb-5">
            <h1 class="text-center my-3 font-weight-bold" style="font-size: 3em;">Dance Classes In Antioch CA</h1>
            <img src="/images/dance-classes-in-antioch-ca.jpg" alt="antioch dancer" class="img-fluid shadow rounded">
        </div>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div class="text-center">
                    <h2 class="text-center mt-3 font-weight-bold">If You Are Looking For Dance Studios In Antioch CA - Choose ECPAC</h2>
                    <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">From your child's first steps to their high school graduation, we foster a positive and encouraging dance space. Our students are more than just great dancers!</p>
                    <p>
                        Choose among various styles including Ballet, Jazz, Tap, Hip Hop, Acro, Tumbling, Musical Theater, and Contemporary. We offer all these styles and dance classes in Antioch CA.
                    </p>
                    <a class="mx-2" href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
                    <a class="mx-2" href="/classes"><div class="btn btn-lg btn-green shadow text-center text-uppercase">See Our Classes</div></a>
                </div>
            </div>
            <div class="col-sm">
                <img src="/images/dance-studios-in-antioch-ca.png" alt="dancer on pointe in antioch" class="img-fluid shadow rounded">
            </div>
        </div>
    </div>
{{--    <div class="my-5">--}}
{{--        <div class="row mx-0 px-0" id="trial-section">--}}
{{--            <div class="container">--}}
{{--                @include('excellence')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container my-5">
        <div class="mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/dance-studio-in-antioch-ca.jpg" alt="young dancer with balloons" class="img-fluid shadow rounded">
                    </div>
                </div>
                <div class="col-sm">
                    <h2 class="text-center font-weight-bold">We Are So Happy To Provide A Healthy Environment & Quality Dance Lessons In Antioch CA And The Surrounding Area. Become A Part Of Our Family Today!</h2>
                    <div class="d-flex justify-content-center align-items-center my-4">
                        <a class="mx-2" href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
                        <a class="mx-2" href="/"><div class="btn btn-lg btn-aqua shadow text-center text-uppercase">Learn More</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
