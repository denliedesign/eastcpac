@extends('layouts.app')

@section('title', 'Dance Studios Oakley CA | East County Performing Arts Center')
@section('description', 'East County Performing Arts Center offers top-notch dance classes and lessons in Oakley, CA. Join us for an unforgettable experience at one of the best dance studios in Oakley.' )

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="mb-5">
            <h1 class="text-center my-3 font-weight-bold" style="font-size: 3em;">Dance Studios Oakley CA</h1>
        </div>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div class="text-center">
                    <h2 class="text-center mt-3 font-weight-bold">Discover the Magic of Dance Oakley</h2>
                    <h5 class="p-2 rounded text-center" style="background: yellow;"><em>East County Performing Arts Center located in Brentwood, CA welcomes families from all surrounding areas including Oakley</em></h5>

                    <p>
                        If you're looking for the best dance classes in Oakley, CA, look no further than East County Performing Arts Center. Our experienced instructors provide a supportive and engaging environment that encourages creativity and self-expression. With a wide variety of dance styles to choose from, including ballet, jazz, hip hop, and tap, your child will discover the magic of dance and develop lifelong skills.                    </p>
                    <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
                </div>
            </div>
            <div class="col-sm">
                <img src="/images/dance-lessons-in-oakley-ca.jpg" alt="dancer" class="img-fluid shadow rounded">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/dance-classes-in-oakley-ca.jpg" alt="dancer" class="img-fluid shadow rounded">
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <h2 class="text-center font-weight-bold">Elevate Your Skills with Dance Lessons Oakley</h2>
                        <h5 class="p-2 rounded text-center" style="background: yellow;"><em>East County Performing Arts Center located in Brentwood, CA welcomes families from all surrounding areas including Oakley</em></h5>

                        <p class="text-center">
                            Are you looking to take your dance skills to the next level? At East County Performing Arts Center, we offer private dance lessons in Oakley, CA for students who want one-on-one attention and personalized instruction. Our highly qualified instructors will help you elevate your skills and achieve your goals, whether you're preparing for a competition or just want to perfect your technique.                        </p>
                        <div class="d-flex justify-content-center">
                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
