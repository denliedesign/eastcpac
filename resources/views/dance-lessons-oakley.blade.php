@extends('layouts.app')

@section('title', 'Dance Lessons Oakley | East County Performing Arts Center')
@section('description', 'Take your child\'s dance experience to the next level with our top-rated dance classes in Oakley. With a variety of classes for all ages and skill levels, your child will love our dance studios!' )

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="mb-5">
            <h1 class="text-center my-3 font-weight-bold" style="font-size: 3em;">Dance Lessons Oakley</h1>
        </div>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div class="text-center">
                    <h2 class="text-center mt-3 font-weight-bold">Discover Your Inner Dancer at Dance Studios in Oakley</h2>
                    <h5 class="p-2 rounded text-center" style="background: yellow;"><em>East County Performing Arts Center located in Brentwood, CA welcomes families from all surrounding areas including Oakley</em></h5>

                    <p>
                        Looking for a fun and engaging way to get your kids moving? Look no further than dance classes in Oakley! Our dance studios offer a variety of classes for children of all ages and skill levels. Whether your child is just starting out or looking to improve their technique, our experienced instructors will guide them every step of the way.
                    </p>
                    <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
                </div>
            </div>
            <div class="col-sm">
                <img src="/images/dance-lessons-oakley.jpg" alt="dancer" class="img-fluid shadow rounded">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/dance-classes-oakley.jpg" alt="dancer" class="img-fluid shadow rounded">
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <h2 class="text-center font-weight-bold">Experience the Joy of Dance with Dance Lessons in Oakley</h2>
                        <h5 class="p-2 rounded text-center" style="background: yellow;"><em>East County Performing Arts Center located in Brentwood, CA welcomes families from all surrounding areas including Oakley</em></h5>

                        <p class="text-center">
                            At our dance studios in Oakley, we believe that dance should be a fun and fulfilling experience for everyone. That's why we offer dance lessons that cater to a variety of styles and skill levels. From ballet to hip hop, our classes are designed to help your child explore their love of dance and grow as a dancer. With experienced instructors and a supportive community, your child will love coming to our dance studios.
                        </p>
                        <div class="d-flex justify-content-center">
                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
