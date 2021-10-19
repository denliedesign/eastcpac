@extends('layouts.app')

@section('title', 'Camps & Events | East County Performing Arts Center | Nina Koch')
@section('description', 'Keep Moving And Have Fun With Our Latest Events & Camp Offerings')

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <h2 class="text-center mt-3 mb-0 font-weight-bold">Brentwood<br>Kids Dance Camps & Events</h2>
        <p class="my-0 py-0 text-center"><small>Dance Camps & Events For Kids In Brentwood</small></p>

        <div class="event-table">
            <p class="lead font-weight-bold mt-5 mb-0 text-center" style="color: #12a9b0;">
                6 Week Classes
                / Ages 3-5
                / Wednesdays 5:30-6
            </p>
            <table class="table mb-5">
                <tbody>
                <tr>
                    <th scope="row">February 3</th>
                    <td><a href="https://east-county-performing-arts-center.studiosuite.io/story-time-ballet" target="_blank">Princess Story Time Ballet In Person Camp</a></td>
                </tr>
                <tr>
                    <th scope="row">February 3</th>
                    <td><a href="https://east-county-performing-arts-center.studiosuite.io/virtual-story-time-ballet" target="_blank">Princess Story Time Ballet Virtual Camp</a></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="event-table">
            <p class="lead font-weight-bold mt-5 mb-0 text-center" style="color: #12a9b0;">Member Only Events</p>
            <table class="table mb-5">
                <tbody>
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
                <tr>
                    <th scope="row">April 24</th>
                    <td>Prince & Princess Tea Party</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="event-table">
            <p class="lead font-weight-bold mt-5 mb-0 text-center" style="color: #12a9b0;">
                Weeklong Camps /
                Ages 4-10 /
                Mon.- Fri /
                9:00AM-12:00pm
            </p>
            <table class="table mb-5">
                <tbody>
{{--                <tr>--}}
{{--                    <th scope="row">Sept. 28-October 2</th>--}}
{{--                    <td>Princess Storytime Adventure</td>--}}
{{--                </tr>--}}
                <tr>
                    <th scope="row">March 15-19</th>
                    <td>
                        <a href="https://east-county-performing-arts-center.studiosuite.io/spring-break-kids-camp" target="_blank">Spring Break Kids Camp</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">June 21-25</th>
                    <td>Jo BOW Camp</td>
                </tr>
                <tr>
                    <th scope="row">July 5-9</th>
                    <td>Unicorn & Mermaid Fantasy Camp</td>
                </tr>
                <tr>
                    <th scope="row">July 12-16</th>
                    <td>Frozen in Summer</td>
                </tr>
                <tr>
                    <th scope="row">July 19-23</th>
                    <td>LOL Surprise</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="event-table">
            <p class="lead font-weight-bold mt-5 mb-0 text-center" style="color: #12a9b0;">
                Mini Day Camps /

                Drop-Off Camp /

                Ages 3-8 /

                Saturdays 9:00-11AM
            </p>
            <table class="table mb-5">
                <tbody>
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
                <tr>
                    <th scope="row">Jan 16</th>
                    <td><a href="https://east-county-performing-arts-center.studiosuite.io/fancy-nancy-camp" target="_blank">Fancy Nancy</a></td>
                </tr>
                <tr>
                    <th scope="row">Feb 13</th>
                    <td>Mermaid Medleys</td>
                </tr>
                <tr>
                    <th scope="row">March 13</th>
                    <td>Bellay Bunny</td>
                </tr>
                <tr>
                    <th scope="row">April 17</th>
                    <td>Rock N’ Trolls</td>
                </tr>
                <tr>
                    <th scope="row">May 15</th>
                    <td>Unicorn Camp</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

@endsection
