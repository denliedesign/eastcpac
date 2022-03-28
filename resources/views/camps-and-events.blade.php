@extends('layouts.app')

@section('title', 'Camps & Events | East County Performing Arts Center | Nina Koch')
@section('description', 'Keep Moving And Have Fun With Our Latest Events & Camp Offerings')

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <h2 class="text-center mt-3 mb-0 font-weight-bold">Brentwood<br>Kids Dance Camps & Events</h2>
        <p class="my-0 py-0 text-center"><small>Dance Camps & Events For Kids In Brentwood</small></p>
        <hr>

        <div id="one-day-camps" class="my-5">
            <h2 class="text-center font-weight-bold">1-Day Camps</h2>
            <h3 class="text-center">All Camps Are Saturdays 9-11AM</h3>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
{{--                <div class="p-2">--}}
{{--                    <img src="/images/mermaid-medley.png" alt="mermaid medleys camp" class="img-fluid shadow rounded">--}}
{{--                    <p class="text-center">January 15 - Mermaid Medleys</p>--}}
{{--                    <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/mermaid-medley-january-15" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>--}}
{{--                </div>--}}
                <div class="p-2">
                    <img src="/images/unicorn-friends.png" alt="unicorn friends camp" class="img-fluid shadow rounded">
                    <p class="text-center font-weight-bold mb-0">February 12 - Unicorn Friends</p>
                    <p>
                        All things unicorns! Come dance, play and craft to a fun Unicorn Friends theme. Camp for ages 3-6. $40/per camper.
                    </p>
                    <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/unicorn-friends-february-12" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
                </div>
                <div class="p-2">
                    <img src="/images/princess-academy.png" alt="princess academy camp" class="img-fluid shadow rounded">
                    <p class="text-center font-weight-bold mb-0">March 5 - Princess Academy</p>
                    All things Princess Academy! Come dance, play and craft to a fun Princess Academy theme. Camp for ages 3-6. $40/per camper.
                    <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/princess-academy-march-5" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
                </div>
                <div class="p-2">
                    <img src="/images/jo-bow-camp.png" alt="jo bow camp" class="img-fluid shadow rounded">
                    <p class="text-center font-weight-bold mb-0">April 23 - Jo Bow</p>
                    <p>
                        Love Jo Jo Siwa? You’ll love our Jo Bow Camp inspired by Jo Jo Siwa. Dance, play and craft! For ages 3-6. $40/per camper.
                    </p>
                    <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/jo-bow-camp-april-9" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
                </div>
                <div class="p-2">
                    <img src="/images/once-upon-a-time.png" alt="once upon a time camp" class="img-fluid shadow rounded">
                    <p class="text-center font-weight-bold mb-0">May 14 - Once Upon A Time</p>
                    <p>
                        Storybook adventures at camp! Dance, play, craft to once upon a time favorites! For ages 3-6. $40/per camper.
                    </p>
                    <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/once-upon-a-time" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
                </div>
                <div class="p-2">
                    <img src="/images/bella-bunny.png" alt="bella bunny camp" class="img-fluid shadow rounded">
                    <p class="text-center font-weight-bold mb-0">June 11 - Bella Bunny</p>
                    <p>
                        Miss Nina wrote a children’s book! Now your child can come dance, play and craft to a Bella Bunny theme. For ages 3-6. $40/per camper.
                    </p>
                    <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/bella-bunny-june-11" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
                </div>
            </div>
        </div>

        <div id="six-week-sessions" class="my-5">
            <h2 class="text-center font-weight-bold">6-Week Sessions</h2>

            <div class="row">
                <div class="p-2">
                    <div class="row my-4">
                        <div class="col-sm">
                            <img src="/images/disney-magic.png" alt="" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-sm">
                            <p class="font-weight-bold mb-0" style="font-size: 1.25em;">Disney Magic</p>
                            <p>
                                6- Class Session. Come dressed as your favorite Disney characters each week. Learn ballet and jazz steps and a dance to perform the last class all to a Disney Magic theme!
                            </p>
                            <p class="mb-0">
                                <u>Ages 3-5</u>
                                <br>Thursday, April 21st
                                <br>4:00-430pm
                            </p>
                            <div><a href="https://east-county-performing-arts-center.studiosuite.io/disney-magic-ages-3-5" target="_blank"><div class="btn btn-pink text-center text-uppercase">Register</div></a></div>
                            <hr>
                            <p class="mb-0">
                                <u>Ages 5-7</u>
                                <br>Thursday, April 21st
                                <br>5:45-6:15pm
                            </p>
                            <div><a href="https://east-county-performing-arts-center.studiosuite.io/disney-magic-ages-5-7" target="_blank"><div class="btn btn-pink text-center text-uppercase">Register</div></a></div>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-sm">
                            <img src="/images/enchantment.png" alt="" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-sm">
                            <p class="font-weight-bold mb-0" style="font-size: 1.25em;">Enchantment Summer Session</p>
                            <p>
                                Inspired by Disney's Encanto children will learn jazz and ballet steps, plus a fun routine to perform their last dance class! Let's find our miracle together in dance class.
                            </p>
                            <p class="mb-0">
                                <u>Ages 3-5</u>
                                <br>Thursdays, June 9th - July 14th
                                <br>4:00-430pm
                            </p>
                            <div><a href="https://east-county-performing-arts-center.studiosuite.io/enchantment-summer-session-ages-3-5-june-9" target="_blank"><div class="btn btn-pink text-center text-uppercase">Register</div></a></div>
                            <hr>
                            <p class="mb-0">
                                <u>Ages 3-5</u>
                                <br>Fridays, June 10th - July 15th
                                <br>5:30-6:00pm
                            </p>
                            <div><a href="https://east-county-performing-arts-center.studiosuite.io/summer-session-enchantment-ages-3-5-fridays-530pm" target="_blank"><div class="btn btn-pink text-center text-uppercase">Register</div></a></div>
                            <hr>
                            <p class="mb-0">
                                <u>Ages 5-7</u>
                                <br>Thursdays, June 9th - July 14th
                                <br>5:45-6:15pm
                            </p>
                            <div><a href="https://east-county-performing-arts-center.studiosuite.io/summer-enchantment-ages-5-7-june-9" target="_blank"><div class="btn btn-pink text-center text-uppercase">Register</div></a></div>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-sm">
                            <img src="/images/jo-jazz.png" alt="jazz dancers dressed up" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-sm">
                            <p class="font-weight-bold mb-0" style="font-size: 1.25em;">Jo Bowtastic Jazz</p>
                            <p>
                                Calling all Jo Jo Siwa fans! Ages 5-7 will learn jazz steps and a fun, upbeat dance to Jo Jo Siwa songs. Special performance last class.
                            </p>
                            <p class="mb-0">
                                <u>Ages 5-7</u>
                                <br>Friday, June 10th - July 15th
                                <br>4:30-5:00pm
                            </p>
                            <div><a href="https://east-county-performing-arts-center.studiosuite.io/jo-bowtastic-jazz-summer-session-2022" target="_blank"><div class="btn btn-pink text-center text-uppercase">Register</div></a></div>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-sm">
                            <img src="/images/dance-sampler.png" alt="different dancers" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-sm">
                            <p class="font-weight-bold mb-0" style="font-size: 1.25em;">Dance Sampler</p>
                            <p>
                                A different style of dance each week. Learn Jazz, Hip Hop, Ballet, Lyrical and more!
                            </p>
                            <p class="mb-0">
                                <u>Ages 7-12</u>
                                <br>Friday, June 10th - July 15th
                                <br>6:00-6:30
                            </p>
                            <div><a href="https://east-county-performing-arts-center.studiosuite.io/summer-dance-sampler-ages-7" target="_blank"><div class="btn btn-pink text-center text-uppercase">Register</div></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="summer-specials" class="my-5">
            <h2 class="text-center font-weight-bold">Summer Weeklong Camps</h2>
            <h3 class="text-center">For Ages 4-8</h3>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
                <div class="p-2">
                    <img src="/images/jo-bow-camp.png" alt="dancers posing" class="img-fluid shadow rounded">
                    <p class="text-center font-weight-bold mb-0" style="font-size: 1.25em;">Jo Bow Camp</p>
                    <p class="text-center mb-0"><u>Week 1 June 13-June 17</u></p>
                    <p>
                        All things Jo Jo Siwa! Dance, craft and play all to a fun and upbeat theme! Camp is Monday-Friday June 13-17th 9:00AM-12:00PM.
                    </p>
                    <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/jo-bow-camp-june-13-june-17" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
                </div>
                <div class="p-2">
                    <img src="/images/unicorn-rainbow-camp.png" alt="dancers posing" class="img-fluid shadow rounded">
                    <p class="text-center font-weight-bold mb-0" style="font-size: 1.25em;">Unicorn Rainbow Camp</p>
                    <p class="text-center mb-0"><u>Week 2 June 20-24</u></p>
                    <p>
                        All things Unicorns and Rainbows! Learn dance steps, a fun dance, play and craft. Camp is Monday-Friday June 20-June 24 9:00AM-12:00PM.
                    </p>
                    <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/unicorn-rainbow-camp-summer-special" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
                </div>
                <div class="p-2">
                    <img src="/images/magical-gifts-camp.png" alt="dancers posing" class="img-fluid shadow rounded">
                    <p class="text-center font-weight-bold mb-0" style="font-size: 1.25em;">Magical Things Camp</p>
                    <p class="text-center mb-0"><u>Week 3 June 21- July 1</u></p>
                    <p>
                        All things Encanto! Dance, play and craft to our Encanto favorite songs. Special performance last class. Camp is Monday-Friday June 27-July 1 9AM-12PM
                    </p>
                    <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/magical-things-summer-special" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
                </div>
                <div class="p-2">
                    <img src="/images/frozen-camp.png" alt="dancers posing" class="img-fluid shadow rounded">
                    <p class="text-center font-weight-bold mb-0" style="font-size: 1.25em;">Frozen in Summer</p>
                    <p class="text-center mb-0"><u>Week 4 July 5- July 8</u></p>
                    <p>
                        All things Frozen! Dance, craft and play to all our Frozen favorite songs! Camp is Tuesday-Friday July 5-July 8 9AM-12PM.
                    </p>
                    <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/frozen-in-summercamp" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
                </div>
                <div class="p-2">
                    <img src="/images/unicorn-mermaid-fantasy.png" alt="dancers posing" class="img-fluid shadow rounded">
                    <p class="text-center font-weight-bold mb-0" style="font-size: 1.25em;">Unicorn Mermaid Fantasy</p>
                    <p class="text-center mb-0"><u>Week 5 July 11- July 15</u></p>
                    <p>
                        All things Unicorns and Mermaids! Dance, play and craft to our favorite unicorn and mermaid songs. Camp is Monday- Friday July 11-July 15 9AM-12PM
                    </p>
                    <div class="d-flex justify-content-center"><a href="https://east-county-performing-arts-center.studiosuite.io/unicorn-mermaid-fantasy-summer-special" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a></div>
                </div>

            </div>
        </div>

        <div id="sidewalk-spectacular" class="my-5">
            <h2 class="text-center font-weight-bold">Sidewalk Spectacular</h2>
<h3 class="text-center"> For the dancer that loves to perform. Learn and dance and perform!</h3>
            <div class="row">
                <div class="p-2">
                    <div class="row my-4">
                        <div class="col-sm">
                            <img src="/images/sidewalk-spectacular.png" alt="" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-sm">
                            <p class="font-weight-bold mb-0" style="font-size: 1.25em;">4th of July Parade!</p>
                            <p>
                                Learn a parade routine and perform at Brentwood’s 4th of July Parade on July 4th. $60/per child.
                                Includes 4-Classes, Parade Tee-Shirt, and dance in the parade!
                            </p>
                            <p class="mb-0">
                                <u>Ages 5-12</u>
                                <br>June 10th- July 1, 2022
                                <br>5:00-5:30pm
                            </p>
{{--                            <div><a href="https://east-county-performing-arts-center.studiosuite.io/disney-magic-ages-3-5" target="_blank"><div class="btn btn-pink text-center text-uppercase">Register</div></a></div>--}}
                            <hr>
                            <p class="font-weight-bold">Coming soon...</p>
                            <p>
                                <strong>Heart of Oakley Festival Performance</strong> August 19- September 23rd 5:00-5:30 PM Performance Saturday, September 24th (dates subject to change)
                            </p>
                            <p>
                                <strong>Streets of Brentwood Tree Lighting Performance</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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

@endsection
