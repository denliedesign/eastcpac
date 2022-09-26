@extends('layouts.app')

@section('title', 'Parties | East County Performing Arts Center | Nina Koch')
@section('description', 'The Perfect Place To Celebrate')

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <h2 class="text-center mt-3 font-weight-bold">Birthday Parties</h2>
        <img src="/images/stockton-dance-parties.jpg" alt="stockton dance party cupcakes" class="img-fluid">
{{--        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">You provide the cake, cutting knife and snacks</p>--}}
{{--        <p>--}}
{{--            Ready to reserve your party?  Click the link below and fill out the form.  We will contact you to confirm your date and collect the 50% deposit.--}}
{{--            <br><br>--}}
{{--            Click LET'S PARTY to reserve your party today!--}}
{{--        </p>--}}
        <iframe src="https://app.squarespacescheduling.com/schedule.php?owner=27123812" title="Schedule Appointment" width="100%" height="800" frameBorder="0"></iframe><script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
        <div class="acuity-booking-bar" style="display: none;">East County Performing Arts Center<a href="https://app.squarespacescheduling.com/schedule.php?owner=27123812" target="_blank" class="acuity-embed-button">Schedule Appointment</a></div><script src="https://embed.acuityscheduling.com/embed/bar/27123812.js" async></script>
{{--        <a href="https://forms.gle/ms17t2AG4s3ZXRfZA" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase">LET'S PARTY!</div></a>--}}

        <p class="text-muted text-center" style="font-size: 0.9em">Antioch Dance Parties, Brentwood Dance Parties, Discovery Bay Dance Parties, Oakley Dance Parties, & More. We serve all surrounding areas. Come celebrate your special occasions with us!</p>
    </div>

@endsection
