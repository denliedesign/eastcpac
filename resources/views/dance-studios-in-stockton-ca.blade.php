@extends('layouts.app')

@section('title', 'Dance Studios in Stockton CA | East County Performing Arts Center')
@section('description', 'Stockton Dance Classes for All Ages. Featuring Various Styles. Join Us For Dance Lessons Stockton CA.' )

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <div class="row">
                    <div class="col-sm my-3 d-flex align-items-center">
                        <div>
                            <h2 class="pt-5 text-center">Join Our Stockton Dance Family</h2>
                            <p>
                                If you are looking for Stockton dance studios, we invite you to dance with us at our Performing Arts Center. If you are looking for
                                <a href="/classes">toddler dance classes or dance for your preschooler</a>, we offer classes for as young as 18 months as well as ages 2-3 and all the way up to 18. We have ballet dance lessons in Stockton CA as well as Jazz, Hip Hop, Tap, Contemporary, Musical Theater, Tumbling and more. To see a full list what we offer click on the button below!
                            </p>
                            <div class="d-flex justify-content-center">
                                <a href="/#class-categories"><button class="btn btn-lg btn-aqua shadow">Learn More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm my-3 d-flex align-items-center justify-content-center">
                        <img src="/images/dance-classes-in-stockton-ca.jpg" alt="young dancers auditioning for dance" class="img-fluid shadow rounded">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm my-3 d-flex align-items-center justify-content-center">
                        <img src="/images/stockton-dance-classes.jpg" alt="older dancers pose at competition" class="img-fluid shadow rounded">
                    </div>
                    <div class="col-sm d-flex align-items-center">
                        <div>
                            <h2 class="pt-5 text-center">More Than Just Great Dancing</h2>
                            <p>
                                Our studio is a place where dancers can feel safe and encouraged while they build excellence and confidence in their art form. All our instructors are YPAD certified which means they are background checked, CPR and safety trained, and follow measures to ensure a Safer Studio.
                                There is no other dance studio in Stockton CA that is as certified, trained, and dedicated to your child's well-being as our staff is here at ECPAC.
                            </p>
                            <div class="d-flex justify-content-center">
                                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><button class="btn btn-lg btn-pink shadow">Enroll With Us Today</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
