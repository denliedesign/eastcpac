<div class="d-block d-md-none" id="contact-nav">
    <ul class="nav flex-column" id="top-nav" style="width: 100%;">
        @include('nav-top')
    </ul>
</div>

<div id="head-section" class="d-block d-md-none">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-center">
            <a class="navbar-brand" href="/"><img src="images/mdu-logo.png" alt="" id="logo"></a>
            <button style="background: black; border: 1px solid white;" class="navbar-toggler mt-3" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation" style="background: black;">
                <ul class="navbar-nav" id="nav-mobile">
                    @include('nav')
                </ul>
            </div>
        </nav>
        <div id="head-title" class="mt-5 pt-5">
            <h2 class="text-uppercase text-center">Take the First Step</h2>
            <h1 class="text-uppercase text-center">To Dance With Us</h1>
            <div class="d-flex justify-content-center mt-4">
                <a href="https://east-county-performing-arts-center.studiosuite.io/s/trial-classes" target="_blank"><div class="btn btn-outline-primary">Book Your COVID Safe Trial Class</div></a>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="" target="_blank"><div class="btn btn-outline-primary">Download Our Studio Info Kit</div></a>
            </div>
        </div>
    </div>
    <div id="stoplight">
        <div class="row">
            <div class="col stoplight-col">
                <div class="yellow-light light-circle"></div>
            </div>
        </div>
    </div>
</div>

<div id="mobile-class-types" class="text-white text-center d-block d-md-none">
    <div class="box-one py-2">
        <div>
            <ion-icon name="business-outline"></ion-icon>
            <p>In-Studio Classes</p>
        </div>
    </div>
    <div class="box-two py-2">
        <div>
            <ion-icon name="videocam-outline"></ion-icon>
            <p>Live Stream</p>
        </div>
    </div>
    <div class="box-three py-2">
        <div>
            <ion-icon name="person-circle-outline"></ion-icon>
            <p>Private Lessons & Social Bubble Classes</p>
        </div>
    </div>
</div>
