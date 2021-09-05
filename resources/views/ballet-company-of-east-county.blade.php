@extends('layouts.app')

@section('title', 'Ballet Company of East County | Brentwood, CA')
@section('description', 'All Things Recital')

@section('content')

    @include('mobiles')
    @include('headers-bcec')

    <div class="container my-5">
{{--        <p class="my-0 py-0 text-center text-muted"><small>The Ballet Company Of East County</small></p>--}}
        <div id="nutcracker-title" class="mb-5">
            <h2 class="text-center my-0 font-weight-bold">The Nutcracker</h2>
            <h3 class="text-center my-0 py-0" style="font-family: 'Italianno', cursive; font-size: 2em;">Experience The Magic Of The Nutcracker</h3>
        </div>

        <div class="d-flex justify-content-center">
            <img src="/images/ballet-company-of-east-county.JPG" alt="nutcracker dancers snow" class="img-fluid rounded shadow">
        </div>

        <p class="lead font-weight-bold mt-5 mb-0 text-center" style="color: #12a9b0;">Audition Dates</p>
        <p>
            <strong>8/28</strong> Nutcracker 2020 Auditions @ ECPAC 9am-1pm  (Participation fee of $260 and dancer photo due at this time)
        </p>
        <ul>
            <li>9am- 10am		Ages 7-12 taking one ballet class a week</li>
            <li>10am- 11:30am	Ages 8-11 taking two or more ballet classes a week</li>
            <li>11:30am- 1:00pm	Ages 12 and up taking two or more ballet classes a week</li>
            <li>12:00pm-1:00pm 	Males not taking ballet classes that are interested in being in our production</li>
        </ul>

        <p>
            Link for Audition Form<br>
            Link for Cast member info form<br>
            Link to the parent handbook<br>
            <a href="https://docs.google.com/document/d/1rG6BTO9R3wkWdAr2tNrCT7ROuZ_Rk_L1RQ53UG8gRXg/edit?usp=sharing" target="_blank">Season Calendar</a>
        </p>

        <p class="lead font-weight-bold mt-5 mb-0 text-center" style="color: #12a9b0;">Show Information</p>
        <p>
            <strong>12/16</strong> Dress Rehearsal at El Campanil Theater (602 West 2nd Street Antioch) from 4:00 to 9:00pm
            <br><strong>12/17</strong> Show 1 at 7pm El Campanil Theater
            <br><strong>12/18</strong> Show 2 at 2pm & Show 3 at 6pm El Campanil Theater
            <br><strong>12/19</strong> Show 4 at 12 & Show 5 at 4pm El Campanil Theater
        </p>

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

    </div>

@endsection
