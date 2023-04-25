@extends('layouts.app')

@section('title', 'Oakley Dance | East County Performing Arts Center')
@section('description', 'Discover the magic of dance at East County Performing Arts Center, offering top-notch dance classes and lessons in Oakley, CA for children of all ages and skill levels.' )

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="mb-5">
            <h1 class="text-center my-3 font-weight-bold" style="font-size: 3em;">Oakley Dance</h1>
        </div>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div class="text-center">
                    <h2 class="text-center mt-3 font-weight-bold">Unleash Your Child's Potential with Oakley Dance Classes</h2>
                    <h5 class="p-2 rounded" style="background: yellow;"><em>East County Performing Arts Center located in Brentwood, CA welcomes families from all surrounding areas including Discovery Bay</em></h5>
                    <p>
                        Looking for the best dance classes in Oakley, CA? Look no further than East County Performing Arts Center! Our experienced instructors provide a fun and engaging environment that encourages creativity and self-expression. With a variety of dance styles to choose from, including ballet, jazz, hip hop, and more, your child will unleash their potential and develop lifelong skills.
                        <br><br>
                        At East County Performing Arts Center, we believe that dance is an art form that promotes self-expression, discipline, and creativity. Our dance classes in Oakley, CA are designed to develop technique, strength, and flexibility while building confidence and social skills. Our instructors are passionate about helping your child discover the joy of dance and reach their full potential.
                    </p>
                    <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink shadow text-center text-uppercase">REGISTER NOW</div></a>
                </div>
            </div>
            <div class="col-sm">
                <img src="/images/oakley-dance.jpg" alt="dancer" class="img-fluid shadow rounded my-3">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/oakley-dance-classes.jpg" alt="dancer" class="img-fluid shadow rounded my-3">
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <h2 class="text-center font-weight-bold">Elevate Your Skills with Oakley Dance Lessons</h2>
                        <h5 class="p-2 rounded text-center" style="background: yellow;"><em>East County Performing Arts Center located in Brentwood, CA welcomes families from all surrounding areas including Discovery Bay</em></h5>
                        <p class="text-center">
                            Take your dance skills to the next level with our private dance lessons in Oakley, CA! At East County Performing Arts Center, we offer personalized instruction for students who want one-on-one attention and guidance. Our highly qualified instructors will work with you to develop a customized plan that meets your individual needs and goals.
                            <br><br>
                            Our Oakley dance lessons are tailored to help you achieve your dreams, whether you're preparing for a competition or just want to perfect your technique. We offer lessons in a variety of dance styles, including ballet, jazz, hip hop, and more. With our flexible scheduling options and convenient location, it's never been easier to elevate your skills and achieve your goals. Join us today and discover the magic of dance at East County Performing Arts Center!
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
