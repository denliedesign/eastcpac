@extends('layouts.app')

@section('title', 'Dance Studios Discovery Bay | East County Performing Arts Center')
@section('description', 'Join the best dance classes in Discovery Bay and ignite your passion for dance. Our experienced instructors and state-of-the-art studio will help you achieve your goals. Sign up today!' )

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="mb-5">
            <h1 class="text-center my-3 font-weight-bold" style="font-size: 3em;">Dance Studio Discovery Bay</h1>
        </div>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div class="text-center">
                    <h2 class="text-center mt-3 font-weight-bold">Discover Your Passion for Dance at Our Discovery Bay Studio</h2>
                    <h5 class="p-2 rounded" style="background: yellow;"><em>East County Performing Arts Center located in Brentwood, CA welcomes families from all surrounding areas including Discovery Bay</em></h5>
                    <p>
                        If you're looking for high-quality dance classes in Discovery Bay, look no further than our studio. We offer a wide range of classes for dancers of all ages and skill levels, from beginner to advanced. Our experienced instructors will guide you every step of the way as you work to perfect your technique and express yourself through movement.
                    </p>
                    <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
                </div>
            </div>
            <div class="col-sm">
                <img src="/images/dance-lessons-discovery-bay.jpg" alt="dancer" class="img-fluid shadow rounded">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/dance-discovery-bay.jpg" alt="dancer" class="img-fluid shadow rounded">
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <h2 class="text-center font-weight-bold">Experience the Joy of Dance with Our Classes in Discovery Bay</h2>
                        <h5 class="p-2 rounded text-center" style="background: yellow;"><em>East County Performing Arts Center located in Brentwood, CA welcomes families from all surrounding areas including Discovery Bay</em></h5>
                        <p class="text-center">
                            Whether you're interested in taking ballet, jazz, hip hop, or any other style of dance, our classes have got you covered. Our state-of-the-art studio features spacious dance floors and top-notch equipment, providing the perfect environment for learning and growing as a dancer. Plus, with a variety of class times available, it's easy to find one that fits into your schedule.
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
