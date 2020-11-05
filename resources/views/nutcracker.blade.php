@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="d-flex justify-content-center">
            <img src="/images/nutcracker-logo.jpg" alt="nutcracker logo" class="img-fluid">
        </div>
        <div class="div-green my-4"></div>
        <h2 class="text-center">Nutcracker Performances</h2>
        <p class="lead text-center">
            Performances at Caledonia's Duncan Lake Middle School PAC
        </p>
        <div class="d-flex justify-content-center mt-3 mb-4">
            <a href="https://25664.recitalticketing.com/landing.cfm?loc=4"><button class="btn btn-lg btn-danger">Buy Tickets</button></a>
        </div>
        <p>
            <strong>Performance tickets go on sale on Saturday, November 14, 2020.</strong>
            <br><br>
            <strong>Would your group like to attend one of our family-friendly Nutcracker Ballet performances?</strong>
            Contact the studio for information and pricing for groups of 20 or more.
            <br><br>
            <strong>Meet the cast backstage after the show at the Sugar Plum Palace!!</strong>
            For you and your child!  See the sets, get autographs, and take pictures with the characters from the Land of the Sweets. Admission for Sugar Plum Palace is $3 per person.  Sugar Plum Palace Passes may be purchased during intermission at the concessions table or at the Palace entrance to the right of the auditorium after the show.
        </p>
    </div>

    <div class="background-green py-3 mb-5">
        <div class="container d-flex align-items-center">
            <div class="row">
                <div class="col-sm px-3">
                    <h4 class="text-center">2020 Nutcracker Performances</h4>
                    <ul>
                        <li>Saturday, December 12 at 2:00pm</li>
                        <li>Saturday, December 12 at 6:30pm</li>
                        <li>Sunday, December 13 at 3:30pm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-around align-items-center mb-5">
        <div class="row">
            <div class="col-sm my-1"><img src="/images/nutcracker-1.jpg" alt="img-fluid"></div>
            <div class="col-sm my-1"><img src="/images/nutcracker-2.jpg" alt="img-fluid"></div>
            <div class="col-sm my-1"><img src="/images/nutcracker-3.jpg" alt="img-fluid"></div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center">Nutcracker Auditions</h2>
        <p class="lead text-center">Saturday, October 3</p>
        <script type="text/javascript" src="https://app.jackrabbitclass.com/Openings.asp?id=383292&amp;tblstyle=2&amp;Session=Nutcracker&amp;sort=class"></script>
    </div>

@endsection
