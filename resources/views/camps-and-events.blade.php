@extends('layouts.app')

@section('title', 'Camps & Events | East County Performing Arts Center | Nina Koch')
@section('description', 'Keep Moving And Have Fun With Our Latest Events & Camp Offerings')

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <h2 class="text-center mt-3 mb-0 font-weight-bold">Brentwood<br>Kids Dance Camps & Events</h2>
        <p class="my-0 py-0 text-center"><small>Dance Camps & Events For Kids In Brentwood</small></p>
        <h3 class="text-center">All Camps Are Saturdays 9-11AM</h3>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
            <div class="p-2">
                <img src="/images/mermaid-medley.png" alt="mermaid medleys camp" class="img-fluid shadow rounded">
                <p class="text-center">January 15 - Mermaid Medleys</p>
                <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/mermaid-medley-january-15" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
            </div>
            <div class="p-2">
                <img src="/images/unicorn-friends.png" alt="unicorn friends camp" class="img-fluid shadow rounded">
                <p class="text-center">February 12 - Unicorn Friends</p>
                <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/unicorn-friends-february-12" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
            </div>
            <div class="p-2">
                <img src="/images/princess-academy.png" alt="princess academy camp" class="img-fluid shadow rounded">
                <p class="text-center">March 5 - Princess Academy</p>
                <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/princess-academy-march-5" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
            </div>
            <div class="p-2">
                <img src="/images/jo-bow-camp.png" alt="jo bow camp" class="img-fluid shadow rounded">
                <p class="text-center">April 9 - Jo Bow</p>
                <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/jo-bow-camp-april-9" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
            </div>
            <div class="p-2">
                <img src="/images/once-upon-a-time.png" alt="once upon a time camp" class="img-fluid shadow rounded">
                <p class="text-center">May 14 - Once Upon A Time</p>
                <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/once-upon-a-time" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
            </div>
            <div class="p-2">
                <img src="/images/bella-bunny.png" alt="bella bunny camp" class="img-fluid shadow rounded">
                <p class="text-center">June 11 - Bella Bunny</p>
                <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/bella-bunny-june-11" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
            </div>
        </div>

{{--        <div class="event-table">--}}
{{--            <p class="lead font-weight-bold mt-5 mb-0 text-center" style="color: #12a9b0;">--}}
{{--                6 Week Classes--}}
{{--                / Ages 3-5--}}
{{--                / Wednesdays 5:30-6--}}
{{--            </p>--}}
{{--            <table class="table mb-5">--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <th scope="row">February 3</th>--}}
{{--                    <td><a href="https://east-county-performing-arts-center.studiosuite.io/story-time-ballet" target="_blank">Princess Story Time Ballet In Person Camp</a></td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">February 3</th>--}}
{{--                    <td><a href="https://east-county-performing-arts-center.studiosuite.io/virtual-story-time-ballet" target="_blank">Princess Story Time Ballet Virtual Camp</a></td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}

{{--        <div class="event-table">--}}
{{--            <p class="lead font-weight-bold mt-5 mb-0 text-center" style="color: #12a9b0;">Member Only Events</p>--}}
{{--            <table class="table mb-5">--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <th scope="row">October TBA</th>--}}
{{--                    <td>Costume Carnival</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">December 6</th>--}}
{{--                    <td>Little Stars Holiday Show</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">December 14-18</th>--}}
{{--                    <td>Parent Appreciation Week</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">April 24</th>--}}
{{--                    <td>Prince & Princess Tea Party</td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}

{{--        <div class="event-table">--}}
{{--            <p class="lead font-weight-bold mt-5 mb-0 text-center" style="color: #12a9b0;">--}}
{{--                Weeklong Camps /--}}
{{--                Ages 4-10 /--}}
{{--                Mon.- Fri /--}}
{{--                9:00AM-12:00pm--}}
{{--            </p>--}}
{{--            <table class="table mb-5">--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <th scope="row">Sept. 28-October 2</th>--}}
{{--                    <td>Princess Storytime Adventure</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">March 15-19</th>--}}
{{--                    <td>--}}
{{--                        <a href="https://east-county-performing-arts-center.studiosuite.io/spring-break-kids-camp" target="_blank">Spring Break Kids Camp</a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">June 21-25</th>--}}
{{--                    <td>Jo BOW Camp</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">July 5-9</th>--}}
{{--                    <td>Unicorn & Mermaid Fantasy Camp</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">July 12-16</th>--}}
{{--                    <td>Frozen in Summer</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">July 19-23</th>--}}
{{--                    <td>LOL Surprise</td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}

{{--        <div class="event-table">--}}
{{--            <p class="lead font-weight-bold mt-5 mb-0 text-center" style="color: #12a9b0;">--}}
{{--                Mini Day Camps /--}}

{{--                Drop-Off Camp /--}}

{{--                Ages 3-8 /--}}

{{--                Saturdays 9:00-11AM--}}
{{--            </p>--}}
{{--            <table class="table mb-5">--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <th scope="row">Aug 29</th>--}}
{{--                    <td>Princess Academy</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">Sept 12</th>--}}
{{--                    <td>Puppy Patrol Camp</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">Oct 17</th>--}}
{{--                    <td>Pumpkin Party</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">Nov 14</th>--}}
{{--                    <td>Dance Descendants</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">Dec 12</th>--}}
{{--                    <td>Sugarplum Fairy</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">Jan 16</th>--}}
{{--                    <td><a href="https://east-county-performing-arts-center.studiosuite.io/fancy-nancy-camp" target="_blank">Fancy Nancy</a></td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">Feb 13</th>--}}
{{--                    <td>Mermaid Medleys</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">March 13</th>--}}
{{--                    <td>Bellay Bunny</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">April 17</th>--}}
{{--                    <td>Rock N’ Trolls</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">May 15</th>--}}
{{--                    <td>Unicorn Camp</td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}

    </div>

@endsection
