@extends('layouts.app')

@section('title', 'Parent Info | East County Performing Arts Center | Nina Koch')
@section('description', 'Save This Page To Be Up-To-Date With Our Calendar & Parent Handbook')

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <h2 class="text-center mt-3 font-weight-bold">ECPAC 2020/2021 Calendar</h2>

        <table class="table my-5">
            <tbody>
                <tr>
                    <th scope="row">Nov 14</th>
                    <td>Dance Descendants Mini Day Camp 9-11AM</td>
                </tr>
                <tr>
                    <th scope="row">Nov 23-Nov 29</th>
                    <td>Studio Closed - Thanksgiving Break</td>
                </tr>
                <tr>
                    <th scope="row">Nov 28</th>
                    <td>Streets of Brentwood Tree Lighting</td>
                </tr>
                <tr>
                    <th scope="row">Nov 30</th>
                    <td>June Recital Costume 1st Order Deadline </td>
                </tr>
                <tr>
                    <th scope="row">Dec 4</th>
                    <td>Downtown Brentwood Tree Lighting </td>
                </tr>
                <tr>
                    <th scope="row">Dec 5</th>
                    <td>Discovery Bay Holiday Parade - All welcome to walk</td>
                </tr>
                <tr>
                    <th scope="row">Dec 6</th>
                    <td>Little Stars Show - Time TBA </td>
                </tr>
                <tr>
                    <th scope="row">Dec 12</th>
                    <td>Sugarplum Fairy Mini Day Camp 9-11AM</td>
                </tr>
                <tr>
                    <th scope="row">Dec 14-18</th>
                    <td>
                        PARENT APPRECIATION WEEK
                        <br>Nutcracker Spirit Week & Bake Sale - wear nutcracker gear to class

                    </td>
                </tr>
                <tr>
                    <th scope="row">TBA</th>
                    <td>Brentwood Holiday Parade  - All welcome to walk</td>
                </tr>
                <tr>
                    <th scope="row">Dec 18</th>
                    <td>June Recital  Costume 2nd Order Deadline </td>
                </tr>
                <tr>
                    <th scope="row">Dec 18-Dec 20</th>
                    <td><a href="www.brentwoodballet.org" target="_blank">Nutcracker Shows</a></td>
                </tr>
                <tr>
                    <th scope="row">Dec 20</th>
                    <td>Cast Only - Nutcracker Cast Breakfast 8:30AM @ studio</td>
                </tr>
                <tr>
                    <th scope="row">Dec 21-Jan 3rd</th>
                    <td>Winter Break - STUDIO CLOSED</td>
                </tr>
                <tr>
                    <th scope="row">Jan 4</th>
                    <td>Studio Reopens</td>
                </tr>
                <tr>
                    <th scope="row">Jan 16</th>
                    <td>Fancy Nancy Mini Day Camp 9-11AM</td>
                </tr>
                <tr>
                    <th scope="row">Jan 22-24</th>
                    <td>Hollywood Connection Dance Convention</td>
                </tr>
                <tr>
                    <th scope="row">Feb 1</th>
                    <td>LAST DAY TO ORDER JUNE RECITAL COSTUME</td>
                </tr>
                <tr>
                    <th scope="row">Feb 8-12</th>
                    <td>Share the Love of Dance - Bring a Friend Week</td>
                </tr>
                <tr>
                    <th scope="row">Feb 28th</th>
                    <td>Last day to register 2020-2021 season</td>
                </tr>
                <tr>
                    <th scope="row">March 13</th>
                    <td>Bella Bunny Mini Day Camp 9-11AM</td>
                </tr>
                <tr>
                    <th scope="row">March 14-19</th>
                    <td>Spring Break Camp  9AM-12PM ages 4-10</td>
                </tr>
                <tr>
                    <th scope="row">March 15-21</th>
                    <td>Spring Break- Studio Closed</td>
                </tr>
                <tr>
                    <th scope="row">April 17</th>
                    <td>Rock N’ Trolls Mini Day Camp 9-11AM</td>
                </tr>
                <tr>
                    <th scope="row">April 24</th>
                    <td>Prince and Princess Tea Party 2PM-4PM</td>
                </tr>
                <tr>
                    <th scope="row">*April 16-25</th>
                    <td>National Dance Week</td>
                </tr>
                <tr>
                    <th scope="row">May 3</th>
                    <td>June Recital Tickets Available Online Purchases</td>
                </tr>
                <tr>
                    <th scope="row">May 11</th>
                    <td>2020/2021 Members Only VIP Registration</td>
                </tr>
                <tr>
                    <th scope="row">May 15</th>
                    <td>Unicorn Mini Day Camp 9-11AM</td>
                </tr>
                <tr>
                    <th scope="row">May 18th</th>
                    <td>2020/2021 Registration Opens</td>
                </tr>
                <tr>
                    <th scope="row">May 25</th>
                    <td>National Tap Dance Day</td>
                </tr>
                <tr>
                    <th scope="row">May 31</th>
                    <td>Memorial Day - STUDIO CLOSED</td>
                </tr>
                <tr>
                    <th scope="row">May 30-31</th>
                    <td>2020/2021 ECPAC Comp Team Auditions</td>
                </tr>
                <tr>
                    <th scope="row">June 1</th>
                    <td>Membership Rolls Over</td>
                </tr>
                <tr>
                    <th scope="row">June 14-20</th>
                    <td>2021 June Recital</td>
                </tr>
                <tr>
                    <th scope="row">June 21-27</th>
                    <td>Bring a Friend Week - Level Up Week</td>
                </tr>
                <tr>
                    <th scope="row">June 27-July 3</th>
                    <td>Hollywood Connection Nationals</td>
                </tr>
                <tr>
                    <th scope="row">July 19th</th>
                    <td>Last Day of the 2020/2021 Season</td>
                </tr>
            </tbody>
        </table>

        <h2 class="text-center mt-3 font-weight-bold">Parent Handbook</h2>
        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Required Clothes and Shoes</p>
        <p>
            Please refer to the Dress Code sheet and Ballet Guidebook for more dress code information.
            <br>You can find all the dancewear and shoes you need at our in-studio store Gabby's Closet.  Stop by suite A-1 to take a look.
            <br><br>
            Below is the dress code for each type of class so you can also go on your own to make purchases.
            <br><br>
            We also have ECPAC logo wear for girls and boys as well as other dance wear items in our <a href="http://teamstore.gtmsportswear.com/ECPAClogowear" target="_blank">ONLINE STORE</a>
            <br><br>
            <em>
                Please Note: There is no jeans or denim allowed in any class. Because we have high quality dance floors street shoes cannot be worn inside the class-room. Please have your dancer change their shoes in the lobby, do not let them wear their dance shoes outside.
            </em>
        </p>
        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Parent Viewing</p>
        <p>
            We welcome parents to view most classes. All viewing must be done from the parent viewing room or from the windows outside the studio. Parents will NOT be allowed in the studio during classes. The reason for parents not viewing in the dance room is because it can be a distraction to the dancers and it is important for the instructor to be viewed as the main authority figure. If a parent is present the main authority figure is still the parent.
        </p>
        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Pick Up And Drop Off</p>
        <p>
            Please do not drop your child off more than 10 minutes early or pick up more than 5 minutes late unless arrangements have been made in advance with the teacher or office manager. If your child is enrolled in the last class of the day and is consistently picked up late ECPAC may charge you for time spent after hours. Dancers must stay at the dance studio under adult supervision while waiting for parents. For safety reasons dancers are not allowed to wait for pick up anywhere but inside the studio. To keep shoes and our dance floor in good condition, dancers should not wear dance shoes outside the studio and for their safety dancers should always cover-up when leaving or arriving at the studio.
        </p>
        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Recital</p>
        <p>
            The studio will hold a winter and summer recital. All details for performances will be available at a later date. Performances are NOT mandatory for those who do not wish to be on stage. Dance is not only a great form of exercise but it is also a performance art. There will be required costumes for performances. Costume prices are $50 for winter recital $85 for June recital. There may be additional costs for extended sizes.
        </p>
        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Bathroom Policy</p>
        <p>
            Parents of little ones, we ask that either you or a designated adult of your choice be responsible for all your child’s restroom needs. Instructors will not be able to leave the classroom and we believe this will maintain parents, instructors, and children’s comfort levels. The best choice is to have your child use the restroom before class.
        </p>
        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Leaving The Premises</p>
        <p>
            It is not the responsibility of the teachers or staff of ECPAC to monitor dancers between classes. If your dancer leaves the studio to get food, drink or any rea-son, that dancer’s safety is not the responsibility of the studio, its employees or contractors. We do not want dancers leaving to studio without adult supervision, we ask that you please tell your children not to leave the studio under any circumstances. If you choose to allow your child to leave the studio you are accepting all responsibility for any occurrences.
        </p>
        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Tuition</p>
        <p>
            We operate on an advanced tuition payment plan. First month tuition is due at the time of registration. Future tuition payments are due by the 15th of the month. For example April tuition is due March 15th and May tuition is due April 15th. ECPAC only operates on an auto-pay system. Monthly Auto-Pay, means your monthly tuition payments are automatically deducted from your credit or debit card. There is a $5.00 fee for returned auto-payments. Monthly tuition payments are required to keep your account in good standing and to re-serve your student’s spot in class. ECPAC cannot extend any credits or allow any account to go 30 days past due. We reserve the right to send past due accounts to collections.
            <br><br>
            A $40 membership fee for returning families and a $45.00 membership fee for new families is due at the time of registration. Membership fees are not refund-able.
            <br><br>
            What is included in my Membership Fee?
            <br><br>
            Special Member Only Events
            <br>Discounted Summer Classes
            <br>Priority registration
            <br>Free make up classes
            <br>Discounted Birthday Packages
            <br>Dance Pathways Conference
            <br>2 yearly recitals
            <br><br>
            Full tuition is due every month whether the student has attended all classes or not. We will prorate tuition for vacations only when we receive written notice at least two (2) weeks prior to the absence. If students do not attend one (1) month without putting their account on hold and paying tuition for said month; the student’s spot in class may be filled by a student on a waiting list. Tuition will not be prorated for holidays and studio closures. Tuition and registration fees are non-refundable. If you pay for classes that you do not attend or drop a class your tuition and registration fees will not be refunded for any reason. We do accept full year payments, without a discount. If you should choose to withdraw tuition is not refunded.
            <br><br>
            You may pay with cash or check for your tuition, but you do still need a card or ACH on file.  Cash/check payment must be received by the 14th or your account will be changed.
            <br><br>
            If you have a balance on your account your card will be ran by the 5th of the month to cover the past due balance.
            <br><br>
            If an instructor is unable to teach and a substitute is not available you will be notified and given a date for a make-up class or a credit to your account for that class.
        </p>
        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Withdrawal</p>
        <p>
            We require a 30 written withdrawal notice and you will need to fill out a Withdrawal Form Tuition and registration fees are not refundable. If you withdraw after registration but before the dance season begins in August you will be re-funded your prepaid tuition for August but your registration fee in non-refundable.
        </p>
        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Food And Drink</p>
        <p>
            Dancers and family members are not allowed to eat or drink inside the dance rooms. Food must be eaten in the student lounge area and it is the responsibility of the student to keep this area clean. Water is permitted in the classrooms. Dancers are not allowed to chew gum in class.
        </p>
        <p class="lead font-weight-bold mb-0" style="color: #12a9b0;">Conduct</p>
        <p>
            If a dancer or parent conducts themselves in a manner that is obscene, offensive, violent, aggressive, demeaning or disrespectful we reserve the right to refuse service.
        </p>
    </div>

@endsection
