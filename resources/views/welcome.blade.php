@extends('layouts.app')
@section('content')

    @include('mobile')
    @include('header')

            <div id="head-title" class="pt-5 mt-5">
                <h2 class="text-uppercase text-center">Take the First Step</h2>
                <h1 class="text-uppercase text-center">To Dance With Us</h1>
                <div class="d-flex justify-content-center mt-4">
                    <a href="https://east-county-performing-arts-center.studiosuite.io/s/trial-classes" target="_blank"><div class="btn btn-outline-primary">Book Your COVID Safe Trial Class</div></a>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a href="https://east-county-performing-arts-center.studiosuite.io/m/dance-starter-kit" target="_blank"><div class="btn btn-outline-primary">Download Our Studio Info Kit</div></a>
                </div>
            </div>
        </div>
{{--        <div id="stoplight">--}}
{{--            <div class="row">--}}
{{--                <div class="col stoplight-col d-flex align-items-center">--}}
{{--                    <div class="triangle-top-right"></div>--}}
{{--                </div>--}}
{{--                <div class="col stoplight-col">--}}
{{--                    <div class="stop-block"></div>--}}
{{--                    <div class="red-light light-circle"></div>--}}
{{--                </div>--}}
{{--                <div class="col stoplight-col d-flex align-items-center">--}}
{{--                    <div class="triangle-top-left"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col stoplight-col d-flex align-items-center">--}}
{{--                    <div class="triangle-top-right"></div>--}}
{{--                </div>--}}
{{--                <div class="col stoplight-col">--}}
{{--                    <div class="stop-block"></div>--}}
{{--                    <div class="yellow-light light-circle"></div>--}}
{{--                </div>--}}
{{--                <div class="col stoplight-col d-flex align-items-center">--}}
{{--                    <div class="triangle-top-left"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col stoplight-col d-flex align-items-center">--}}
{{--                    <div class="triangle-top-right"></div>--}}
{{--                </div>--}}
{{--                <div class="col stoplight-col">--}}
{{--                    <div class="stop-block"></div>--}}
{{--                    <div class="green-light light-circle"></div>--}}
{{--                </div>--}}
{{--                <div class="col stoplight-col d-flex align-items-center">--}}
{{--                    <div class="triangle-top-left"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    <div id="stoplight">
        <img src="/images/yellow-light.png" alt="yellow smiley" class="img-fluid" style="width: 75px; height: auto;">
    </div>
    </div>

    <div class="container">
        <div class="d-none d-md-block">
            <div id="colored-boxes" class="d-flex justify-content-center">
                {{--                <div id="box-one" class="flip-card">--}}
                {{--                    <div class="flip-card-inner">--}}
                {{--                        <div class="box-one flip-card-front d-flex align-items-center justify-content-center text-center">--}}
                {{--                            <div>--}}
                {{--                                <ion-icon name="person-outline"></ion-icon>--}}
                {{--                                <p>Private Lessons</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="box-one flip-card-back d-flex align-items-center justify-content-center text-center">--}}
                {{--                            <p>--}}
                {{--                                One-to-one instruction--}}
                {{--                                <br><u>Great for:</u>--}}
                {{--                                <br>&middot; Rapid learning & advancement--}}
                {{--                                <br>&middot; Coaching on specific skills--}}
                {{--                                <br>&middot; Complex scheduling needs--}}
                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div id="box-two" class="flip-card">--}}
                {{--                    <div class="flip-card-inner">--}}
                {{--                        <div class="box-two flip-card-front d-flex align-items-center justify-content-center text-center">--}}
                {{--                            <div>--}}
                {{--                                <ion-icon name="people-outline"></ion-icon>--}}
                {{--                                <p>Semi-Private Classes</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="box-two flip-card-back d-flex align-items-center justify-content-center text-center">--}}
                {{--                            <p>--}}
                {{--                                One instructor to a small group of students--}}
                {{--                                <br><u>Great for:</u>--}}
                {{--                                <br>&middot; Rapid learning & advancement--}}
                {{--                                <br>&middot; Small group--}}
                {{--                                <br>&middot; Learning challenges or health concerns--}}
                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div id="box-one" class="flip-card mr-1">
                    <div class="flip-card-inner">
                        <div class="box-one flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
                                <ion-icon name="business-outline"></ion-icon>
                                <p>In-Studio Classes</p>
                            </div>
                        </div>
                        <div class="box-one flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                Dance in person with us confidently. We follow the Safer Studio Standards.
                            </p>
                        </div>
                    </div>
                </div>
                {{--                <div id="box-four" class="flip-card">--}}
                {{--                    <div class="flip-card-inner">--}}
                {{--                        <div class="box-four flip-card-front d-flex align-items-center justify-content-center text-center">--}}
                {{--                            <div>--}}
                {{--                                <ion-icon name="videocam-outline"></ion-icon>--}}
                {{--                                <p>Online Classes</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="box-four flip-card-back d-flex align-items-center justify-content-center text-center">--}}
                {{--                            <p>--}}
                {{--                                One instructor to a small group of students--}}
                {{--                                <br><u>Great for:</u>--}}
                {{--                                <br>&middot; Learning from the convenience of your own home--}}
                {{--                                <br>&middot; Makeup classes--}}
                {{--                                <br>&middot; Preference Health concerns--}}
                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div id="box-two" class="flip-card ml-1">
                    <div class="flip-card-inner">
                        <div class="box-two flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
                                <ion-icon name="videocam-outline"></ion-icon>
                                <p>Live Stream</p>
                            </div>
                        </div>
                        <div class="box-two flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                In case you have to stay home, all our classes are up on Live Stream.
                            </p>
                        </div>
                    </div>
                </div>

                <div id="box-three" class="flip-card ml-1">
                    <div class="flip-card-inner">
                        <div class="box-three flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
                                <ion-icon name="person-circle-outline"></ion-icon>
                                <p>Private Lessons & Social Bubble Classes</p>
                            </div>
                        </div>
                        <div class="box-three flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                We offer socially distanced private lessons or semi-private lessons with your social bubble.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center mt-3 mb-3">A dance class for every interest and learning preference!</h5>
        <div id="colored-dashes" class="d-flex justify-content-center">
            <div class="one-dash"></div>
            <div class="two-dash"></div>
            <div class="three-dash"></div>
            {{--            <div class="four-dash"></div>--}}
            {{--            <div class="five-dash"></div>--}}
        </div>
    </div>

    <div class="my-5 text-white d-none d-md-block">
        <div class="row m-0 c-0">
            <div class="col-6 bg-light-gray pl-5 py-2">
                <div class="container">
                    <h1 class="text-uppercase text-right">ecpac is a safer</h1>
                    <p class="text-center">ECPAC focuses on a hierarchy of measures to create a Safer Studio&trade; environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleansing and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.</p>
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="" style="max-height: 200px;">
                    </div>
                </div>
            </div>
            <div class="col-6 bg-mdu-gray py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <h1 class="text-uppercase">studio&trade;</h1>
                            <p class="font-weight-bold">ECPAC is working on Youth Protection Advocates in Dance&reg; Certification!</p>
                            <p>
                                <ion-icon name="checkmark"></ion-icon> Background checked and CPR certified teachers
                                <br><ion-icon name="checkmark"></ion-icon> Safety Studio&trade; Policy
                                <br><ion-icon name="checkmark"></ion-icon> Teacher training & proven curriculum
                                <br><ion-icon name="checkmark"></ion-icon> A focus on safety & wellness for every student
                                <br><ion-icon name="checkmark"></ion-icon> Secured facilities
                                <br><ion-icon name="checkmark"></ion-icon> Viewing windows
                                <br><ion-icon name="checkmark"></ion-icon> Professional sprung floors
                                <br><ion-icon name="checkmark"></ion-icon> Social media safety practices
                            </p>
                        </div>
                        <div class="col-sm d-flex align-items-center justify-content-center">
                            <img src="/images/ypad-logo-rotate.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-5 p-2 text-white d-block d-md-none bg-mdu-gray text-white">
        <h2 class="text-uppercase">ecpac is a safer studio&trade;</h2>
        <p>ECPAC focuses on a hierarchy of measures to create a Safer Studio&trade; environment beginning with requiring
            students and staff who are ill to stay home, followed by frequent hand cleansing and good hygiene practices,
            amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.</p>
        <div class="d-flex justify-content-center pb-2">
            <img src="/images/safer-studio-logo.png" alt="" style="max-height: 250px;">
        </div>
        <p class="font-weight-bold">ECPAC is working on Youth Protection Advocates in Dance&reg; Certification!</p>
        <p>
            <ion-icon name="checkmark"></ion-icon>
            Background checked and CPR certified teachers
            <br>
            <ion-icon name="checkmark"></ion-icon>
            Safety Studio&trade; Policy
            <br>
            <ion-icon name="checkmark"></ion-icon>
            Teacher training & proven curriculum
            <br>
            <ion-icon name="checkmark"></ion-icon>
            A focus on safety & wellness for every student
            <br>
            <ion-icon name="checkmark"></ion-icon>
            Secured facilities
            <br>
            <ion-icon name="checkmark"></ion-icon>
            Viewing windows
            <br>
            <ion-icon name="checkmark"></ion-icon>
            Professional sprung floors
            <br>
            <ion-icon name="checkmark"></ion-icon>
            Social media safety practices
        </p>
        <div class="d-flex justify-content-center">
            <img src="/images/ypad-logo-rotate.png" alt="" style="height: 150px;">
        </div>
    </div>

    <div class="container">
        <h2 class="my-5 font-weight-bold text-uppercase">Dance, Acro, and Theater Classes For All Ages</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mb-5">
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/2-3.jpg" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Ages 2-3</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Tues 4:30-5:00</p>--}}
                        <hr>
                        <div class="text-center">

                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>
                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/3-5.jpg" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Ages 3-5</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Fri 5:30-6:00</p>--}}
                        <hr>
                        <div class="text-center">

                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>
                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/5-7.jpg" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Ages 5-7</strong></p>
                        <hr>
                        <div class="text-center">

                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>
                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/8.jpg" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Ages 8+</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Sat 1:00-5:00</p>--}}
                        <hr>
                        <div class="text-center">

                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>
                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="col px-2 pb-3">--}}
{{--                <div class="class-card-wrap border border-muted">--}}
{{--                    <img src="/images/musical-theatre.jpg" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">--}}
{{--                    <div class="class-card-content my-3">--}}
{{--                        <p class="m-0 text-center"><strong>Musical Theatre</strong></p>--}}
{{--                        --}}{{--                        <p class="m-0 text-center text-muted">Mon 4:00-9:00</p>--}}
{{--                        <hr>--}}
{{--                        <div class="text-center">--}}
{{--                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>--}}
{{--                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col px-2 pb-3">--}}
{{--                <div class="class-card-wrap border border-muted">--}}
{{--                    <img src="/images/tumbling.jpg" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">--}}
{{--                    <div class="class-card-content my-3">--}}
{{--                        <p class="m-0 text-center"><strong>Tumbling</strong></p>--}}
{{--                        --}}{{--                        <p class="m-0 text-center text-muted">Mon-Sat 3:30-5:30</p>--}}
{{--                        <hr>--}}
{{--                        <div class="text-center">--}}
{{--                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>--}}
{{--                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col px-2 pb-3">--}}
{{--                <div class="class-card-wrap border border-muted">--}}
{{--                    <img src="/images/distance-learning-lab.jpg" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">--}}
{{--                    <div class="class-card-content my-3">--}}
{{--                        <p class="m-0 text-center"><strong>Distance Learning Lab</strong></p>--}}
{{--                        --}}{{--                        <p class="m-0 text-center text-muted">Mon-Sat 3:30-5:30</p>--}}
{{--                        <hr>--}}
{{--                        <div class="text-center">--}}
{{--                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>--}}
{{--                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/drop-in-classes.jpg" alt="" class="img-fluid" style="height: 452.5px; object-fit: cover; object-position: 45% 0;">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>1 Day and Multi-Day Camps</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Mon-Sat 3:30-5:30</p>--}}
                        <hr>
                        <div class="text-center">
                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>
                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/discover-dance.jpg" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Discover Dance 8-Week Sessions</strong></p>
                        {{--                        <p class="m-0 text-center text-muted">Mon-Sat 3:30-5:30</p>--}}
                        <hr>
                        <div class="text-center">
                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>
                            <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="achievements-section" class="d-flex align-items-center">
        <div id="achievements-overlay"></div>
        <div>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-2 text-center text-white d-flex justify-content-center d-md-block">
                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                    <p class="achievement-number mx-3">3</p>
                    <p class="achievement-text">Ways To Take Class - <br>In-Studio, Live Stream, & Social Bubble</p>
                </div>
                <div class="col-sm-2 text-center text-white d-flex justify-content-center d-md-block">
                    <ion-icon name="people-circle-outline"></ion-icon>
                    <p class="achievement-number mx-3">18</p>
                    <p class="achievement-text">Years Serving Our Community</p>
                </div>
                <div class="col-sm-2 text-center text-white d-flex justify-content-center d-md-block">
                    <ion-icon name="body-outline"></ion-icon>
                    <p class="achievement-number mx-3">20+</p>
                    <p class="achievement-text">Staff Members</p>
                </div>
                <div class="col-sm-2 text-center text-white d-flex justify-content-center d-md-block">
                    <ion-icon name="musical-notes-outline"></ion-icon>
                    <p class="achievement-number mx-3">100+</p>
                    <p class="achievement-text">Classes Per Week</p>
                </div>
            </div>
        </div>
    </div>

    <div id="teacher-focus-section">
        <div class="container">
            <div class="row pt-5" id="top-teacher-focus">
                <div class="col-12 col-md-6">
                    <p class="text-uppercase my-5" id="focus-label">Teacher Feature</p>
                    <p id="focus-name" class="my-5">Mrs. Kathryn</p>
                    <p class="my-5">Kathryn is a Bay Area native who grew up learning the classic styles of jazz and ballet as well as performing on dance competition teams. While studying dance at the University of California, Davis, Kathryn developed her love for modern dance as well as expanded her ballet education. <br><br> Kathryn joined the staff at East County Performing Arts Center in 2005 where she is given the opportunity to teach the love of dance to all ages. Kathryn is married with three children who all love to dance.</p>
                    <p id="focus-list" class="text-uppercase font-weight-bold mt-5">teacher classes:</p>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img src="images/miss-kathryn.png" alt="" class="img-fluid d-none d-md-block">
                </div>
            </div>
            <div class="row pb-5" id="teacher-focus-classes">
                <div class="col-sm-3 mb-2">
                    <div class="class-card-wrap border border-muted bg-white">
                        <img src="/images/modern.jpg" alt="" class="img-fluid">
                        <div class="class-card-content my-3">
                            <p class="m-0 text-center"><strong>Modern</strong></p>
                            <hr>
                            <div class="text-center">

                                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>
                                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="class-card-wrap border border-muted bg-white">
                        <img src="/images/ballet.jpg" alt="" class="img-fluid">
                        <div class="class-card-content my-3">
                            <p class="m-0 text-center"><strong>Ballet</strong></p>
                            <hr>
                            <div class="text-center">

                                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>
                                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="class-card-wrap border border-muted bg-white">
                        <img src="/images/tap.jpg" alt="" class="img-fluid">
                        <div class="class-card-content my-3">
                            <p class="m-0 text-center"><strong>Tap</strong></p>
                            <hr>
                            <div class="text-center">

                                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>
                                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="class-card-wrap border border-muted bg-white">
                        <img src="/images/jazz.jpg" alt="" class="img-fluid">
                        <div class="class-card-content my-3">
                            <p class="m-0 text-center"><strong>Jazz</strong></p>
                            <hr>
                            <div class="text-center">

                                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">View Schedule</div></a>
                                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Register</div></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="trial-section" class="pb-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="mt-5 mb-4">We Have Built a Reputation for Excellence in Dance Instruction</h4>
                    <p class="mb-5">From your child’s first class to their graduation performance, ECPAC has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, ECPAC is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.</p>
                </div>
{{--                @include('freetrial')--}}
            </div>
        </div>
    </div>

    <div id="blog-section" class="mb-4">
        <div class="container">
{{--            <h2 class="my-5 font-weight-bold text-center text-uppercase">Dance Blog & Newsletter</h2>--}}

            <div class="row row-cols-1 row-cols-md-2 my-5">
                    <div class="blog-card col">
                        <a class="blog-link-img" href="https://missninak.com" target="_blank"><img src="/images/miss-nina-blog.jpg" alt="" class="img-fluid mb-4"></a>
                        <div class="row">
                            <div class="col-9">
                                <a class="blog-link text-dark" href="https://missninak.com" target="_blank" style="text-decoration: none;"><h5 class="font-weight-bold">Miss Nina's Blog</h5></a>
                                <div class="short-divide"></div>
                            </div>
                        </div>
                    </div>
                <div class="blog-card col">
                    <a class="blog-link-img" href="https://ecpacnews.com" target="_blank"><img src="/images/ecpac-newsletter.jpg" alt="" class="img-fluid mb-4" style="height: 216px; width: 540px; object-fit: cover; object-position: 0 60%;"></a>
                    <div class="row">
                        <div class="col-9">
                            <a class="blog-link text-dark" href="https://ecpacnews.com" target="_blank" style="text-decoration: none;"><h5 class="font-weight-bold">ECPAC Newsletter</h5></a>
                            <div class="short-divide"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

{{--    @include('/posts/index')--}}


@endsection
