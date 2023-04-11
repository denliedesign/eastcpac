@extends('layouts.app')

@section('title', 'Teams | East County Performing Arts Center | Nina Koch')
@section('description', 'Be A Part Of A Team With Performing Company & Competition Team')

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <h2 class="text-center mt-3 font-weight-bold">Teams</h2>
        <p>
            <strong>Performing Company</strong><br>
            Does your dancer love to perform? The East County Performing Company is for you! Performing Company is a non-competitive group of dancers ages of 3 - teens
            who represent our studio in community performances. This is a non-competitive group of dancers and is open to all levels and experience. If your child loves to dance and loves to perform then this is the group for you!
            <br><br><strong>Competition Team</strong><br>
            Our East County Performing Arts Center competition team is made of approximately 100 dancers between the ages of 5 and 18. At ECPAC we believe that competition team is more than just bringing home a trophy. We strive to build an environment where the dancers will learn about personal responsibility, teamwork and self-respect.
            <br><br>
            Not only do dancers get great training, access to master teachers, professional choreography and audition and performance opportunities but they are also expected and encouraged to attend college.
            <br><br>
            At ECPAC although we have a strict program and high expectations for our dancers, we are a family. We work hard together and we celebrate and have fun together!
        </p>
        <div class="my-3">
            <a href="/images/comp-parent-handbook-23.pdf" target="_blank" class="mx-1 d-flex justify-content-center" style="text-decoration: none;">
                <div class="btn btn-pink btn-lg text-center text-uppercase shadow">
                    Parent Handbook 2023/2024
                </div>
            </a>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSclq_wUgwrJVnYE8EVunvK267uwNBiqt3suTK0Xihbd1VXKqg/viewform?usp=sf_link" target="_blank" class="mx-1 d-flex justify-content-center" style="text-decoration: none;">
                <div class="btn btn-pink btn-lg text-center text-uppercase shadow">
                    Audition Form
                </div>
            </a>
        </div>
        <div>
            <div>
                <div>
                    <h4 class="mb-0 pb-0">Audition Schedule</h4>
                    Ages are based as of June 1
                    <br><strong>Friday, April 21</strong>
                    <br><u>Ages 5-8</u>
                    <br>3:30-4:15 Tap
                    <br>4:15- 5:15 Jazz
                    <br>5:15-5:45 Dinner Break
                    <br>5:45-6:45 Lyrical
                    <br>6:45-7:30 Hip Hop
                    <br>7:30-8:00 Duo/trio auditions
                    <br><strong>Saturday, April 22</strong>
                    <br><u>Ages 9-13</u>
                    <br>8:00- 9:30 Jazz
                    <br>9:30- 10:15 Tap
                    <br>10:15- 11:15 Lyrical
                    <br>11:15-12 Hip Hop (all ages 9 and older)
                    <br>12:00-12:30 Duo/trio auditions
                    <br>Lunch break
                    <br><u>High School (as of July 2023)</u>
                    <br>1:30- 2:30 Jazz
                    <br>2:30-3:15 Tap
                    <br>3:15-4:15 Lyrical
                    <br>4:15 Duo/Trio auditions
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <div class="col my-3"><img src="/images/comp-23-1.png" alt="" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/comp-23-2.png" alt="" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/comp-23-3.png" alt="" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/comp-23-4.png" alt="" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/comp-23-5.png" alt="" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/comp-23-6.png" alt="" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/comp-23-7.png" alt="" class="img-fluid"></div>
        </div>
        <div>
            <h4 class="mb-0 pb-0">Competition Team Tuition</h4>
            <div class="my-2">
                30 min class = .5
                <br>45-60 min class= 1
                <br>90 min class= 1.5
                <br>Sibling discount =10%
                <br>Paid in full discount = 5%
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">number of classes per week</th>
                    <th scope="col">Monthly Tuition Aug-July</th>
                    <th scope="col">Price Per Class</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>4</td>
                    <td>$232.00</td>
                    <td>$14.50</td>
                </tr>
                <tr>
                    <td>4.5</td>
                    <td>$243.00</td>
                    <td>$13.50</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>$250.00</td>
                    <td>$12.50</td>
                </tr>
                <tr>
                    <td>5.5</td>
                    <td>$253.00</td>
                    <td>$11.50</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>$264.00</td>
                    <td>$11.00</td>
                </tr>
                <tr>
                    <td>6.5</td>
                    <td>$273.00</td>
                    <td>$10.50</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>$280.00</td>
                    <td>$10.00</td>
                </tr>
                <tr>
                    <td>7.5</td>
                    <td>$285.00</td>
                    <td>$9.50</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>$296.00</td>
                    <td>$9.25</td>
                </tr>
                <tr>
                    <td>8.5</td>
                    <td>$306.00</td>
                    <td>$9.00</td>
                </tr>
                <tr class="mark">
                    <td>Unlimited
                        <br><small>the BEST deal!</small></td>
                    <td>$315.00</td>
                    <td>$8.75</td>
                </tr>
                </tbody>
            </table>
            <div>
                <p>
                    All tuition and competition fees are required to be paid on auto pay with a checking account or credit card on file.
                    <br><br>
                    Tuition is paid on the 1st of the month.
                    <br><br>
                    Need to log in to make a payment for Team Fees? Comp Registration Fees? Costume Fees? Convention Fees?
                    <br><a href="https://app.thestudiodirector.com/brentwooddance/login.sd" target="_blank">Click here for your Studio Director Account</a>
                </p>
            </div>
            <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Answers to Common Questions</p>
            <p>
                <strong>What is Competition Team?</strong>
                <br>
                It is a chance for dancers to go and compete in dance competitions. They compete against other dance studios in their age category and in dance categories, for example, 7-8 year old Jazz. All of the competitions we attend are within driving distance. Some competitions reward trophies, some with ribbons, some with cash.
                <br><br>
                Depending on how the dancers place, they can qualify to compete at a national competition. Many of the national competitions are held in Las Vegas and are always held in the summer. Some national competitions are televised. Competition Teams also have the opportunity to attend dance conventions.
                <br><br><strong>What is a Dance Convention</strong>
                <br>
                A dance convention is an all day workshop or weekend long event where dancers have the wonderful opportunity to take classes from professional and/or famous dancers and choreographers. The conventions usually begin Saturday morning with the first class at 8:00 am and end at about 3:00 pm. That is usually 6 classes with a couple of breaks. Usually there is a competition in the evening and usually lasts pretty late. Then there are more classes Sunday starting at 8:00 am until 3:00 or 4:00 pm.
                <br><br>
                During the convention, dancers have the opportunity to audition for scholarships to attend the convention for free the next year or various prizes that will continue their dance education…so prizes conventions have awarded are music video shoots, meetings/auditions with talent agents, photo shoots, free classes at professional studios in LA and dance trips to New York City. It is an exhausting weekend but completely worth it.
            </p>
        </div>
    </div>

@endsection
