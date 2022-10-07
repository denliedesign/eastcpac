@extends('layouts.app')

@section('title', 'Ballet Company of East County | Brentwood, CA | Nina Koch')
@section('description', 'Experience The Nutcracker With The Ballet Company Of East County')

@section('content')

    @include('mobiles')
    @include('headers-bcec')

    <div class="container mt-5">
{{--        <p class="my-0 py-0 text-center text-muted"><small>The Ballet Company Of East County</small></p>--}}
        <div id="nutcracker-title">
            <h2 class="text-center my-0 font-weight-bold">The Nutcracker</h2>
            <h3 class="text-center my-0 py-0" style="font-family: 'Italianno', cursive; font-size: 2em;">Experience The Magic Of The Nutcracker</h3>
        </div>

        <div class="d-flex justify-content-center my-4">
            <a href="https://26348.recitalticketing.com/r/events/" target="_blank" class="mx-1">
                <div class="btn btn-aqua btn-lg text-center text-uppercase">
                    Buy Tickets Now!
                </div>
            </a>
        </div>

        <div class="d-flex justify-content-center">
            <img src="/images/ballet-company-of-east-county.JPG" alt="nutcracker dancers snow" class="img-fluid rounded shadow">
        </div>

{{--        <p class="lead font-weight-bold mt-5 mb-0 text-center" style="color: #12a9b0;">Nutcracker Auditions</p>--}}
{{--        <p>--}}
{{--            <u>Saturday, August 27</u>--}}
{{--            <br>--}}
{{--            <strong>9-9:45</strong> Age 7+ <small>taking 1 Ballet class per week</small>--}}
{{--            <br>--}}
{{--            <strong>9:45-10:45</strong> Ages 8-11 <small>taking 2+ classes per week</small>--}}
{{--            <br>--}}
{{--            <strong>10:45-12:15</strong> Ages 12+ <small>taking 2+ classes per week</small>--}}
{{--            <br><br>--}}
{{--            Nutcracker Performance December 10-11 & 16-18--}}
{{--            <br>--}}
{{--            Rehearsals begin September 10th--}}
{{--        </p>--}}


{{--        <p>--}}
{{--            <strong>8/28</strong> Nutcracker 2020 Auditions @ ECPAC 9am-1pm  (Participation fee of $260 and dancer photo due at this time)--}}
{{--        </p>--}}
{{--        <ul>--}}
{{--            <li>9am- 10am		Ages 7-12 taking one ballet class a week</li>--}}
{{--            <li>10am- 11:30am	Ages 8-11 taking two or more ballet classes a week</li>--}}
{{--            <li>11:30am- 1:00pm	Ages 12 and up taking two or more ballet classes a week</li>--}}
{{--            <li>12:00pm-1:00pm 	Males not taking ballet classes that are interested in being in our production</li>--}}
{{--        </ul>--}}



{{--        <p>--}}
{{--            <a href="https://docs.google.com/forms/d/e/1FAIpQLSf0AwCwFHbp9S6GzIKO7HwXmmT54BachFkzNRbfNrDZHxzb4A/viewform?vc=0&c=0&w=1&flr=0" target="_blank">Audition Form</a><br>--}}
{{--            Link for Cast member info form<br>--}}
{{--            Link to the parent handbook<br>--}}
{{--            <a href="https://docs.google.com/document/d/1rG6BTO9R3wkWdAr2tNrCT7ROuZ_Rk_L1RQ53UG8gRXg/edit?usp=sharing" target="_blank">Season Calendar</a>--}}
{{--        </p>--}}

        <p class="lead font-weight-bold mt-5 mb-0 text-center" style="color: #12a9b0; font-size: 1.5em;">Show Information</p>
        <p class="text-center">
            6 shows to choose from!
            <br><strong>Thursday 12/15</strong> 7:00 pm
            <br><strong>Friday 12/16</strong> 7:00 pm
            <br><strong>Saturday 12/17</strong> 2:00 pm
            <br><strong>Saturday 12/17</strong> 6:00 pm
            <br><strong>Sunday 12/18</strong> 12:00 pm
            <br><strong>Sunday 12/18</strong> 4:00 pm
            <br><br>
            All shows are at the brand new Freedom High Theater
            <br>1050 Neroly Rd
            <br>in Oakley
        </p>

        <div class="d-flex justify-content-center mb-4">
            <a href="https://26348.recitalticketing.com/r/events/" target="_blank" class="mx-1">
                <div class="btn btn-aqua btn-lg text-center text-uppercase">
                    Buy Tickets Now!
                </div>
            </a>
        </div>

        <div class="my-5" style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
            <iframe class="video" src="https://www.youtube.com/embed/kGS_Wgqb_hQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="row mt-5">
            <div class="col-sm my-2">
                <img src="/images/east-county-nutcracker-1.jpg" alt="nutcracker" class="img-fluid rounded shadow" style="height: 233px; object-fit: cover; object-position: 15% 50%; width: 100%;">
            </div>
            <div class="col-sm my-2">
                <img src="/images/east-county-nutcracker-2.jpg" alt="nutcracker" class="img-fluid rounded shadow" style="height: 233px; object-fit: cover; object-position: 15% 0; width: 100%;">
            </div>
            <div class="col-sm my-2">
                <img src="/images/east-county-nutcracker-3.jpg" alt="nutcracker" class="img-fluid rounded shadow" style="height: 233px; object-fit: cover; object-position: 15% 0; width: 100%;">
            </div>
        </div>

{{--        <div class="d-flex justify-content-center my-4">--}}
{{--            <a href="https://us.patronbase.com/_ElCampanilTheatre/Productions/R011/Performances" target="_blank" class="mx-1">--}}
{{--                <div class="btn btn-aqua btn-lg text-center text-uppercase">--}}
{{--                    Buy Tickets Now!--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}

    </div>

@endsection
