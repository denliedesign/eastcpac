@extends('layouts.app')

@section('title', 'Parties | East County Performing Arts Center | Nina Koch')
@section('description', 'The Perfect Place To Celebrate')

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <h2 class="text-center mt-3 font-weight-bold">Birthday Parties</h2>
        <img src="/images/stockton-dance-parties.jpg" alt="stockton dance party cupcakes" class="img-fluid">
        <p>
            Party packages include tables for the cake, presents and a table and chairs to eat cake.  We have table cloths in most primary colors for use but you are welcome to use your own table cloth and decorations.  We provide Invitation and goodie bags that include an  invitation for a free trial class, candy, small toys/trinkets. All rentals include 30 min set up time if you would like to add decorations.  The party host is happy to help you with decorations.  We do not provide plates, napkins, or silverware.
            <br><br>
            No need to clean up!  Our party host does it for you!
            <br><br>
            <strong>Extras</strong>
            <br>*Additional children $10 each
            <br>*Additional time $15/15 minutes
            <br>*Pizza $10
            <br>*Indoor Bounce House $50
            <br>*Princess Visit with photo meet and greet (depending on availability) $100
            <br><span style="margin-left: 15px;">Snow White, Cinderella, Sleeping Beauty, Mirabelle, Tinkerbelle, Elsa, Anna, Ariel</span>
            <br>*Stage rental (16x20)- $200 for 2 hour party

            <br><br>
            <strong>Preferred vendors</strong>
            <br><u>Balloons and Balloon Arches</u>
            <br>Soiree Love https://soireelove.com
            <br><br>
            <u>Cookies</u>
            <br>The Speakeasy Baking Co https://thespeakeasybakingco.com
            <br><br>
            <u>Cakes</u>
            <br>Moonlight Cakery
            <br>Instagram @themoonlightcakeryca
            <br>DM for inquiries
        </p>
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
