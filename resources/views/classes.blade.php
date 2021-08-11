@extends('layouts.app')

@section('title', 'Class Information | East County Performing Arts Center')
@section('description', 'Class Offerings, Tuition, Description, and Dress Code')

@section('content')

    @include('mobiles')
    @include('headers')


    <div class="container my-5">
        <div class="bottom-buttons">
            <div class="text-center">
                <a href="/images/dress-code.pdf" target="_blank" class="mx-1"><div class="btn btn-grey btn-lg text-center text-uppercase">Dress Code</div></a>
                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank" class="mx-1"><div class="btn btn-aqua btn-lg text-center text-uppercase">View Schedule</div></a>
                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a>
            </div>
        </div>
{{--        <h2 class="text-center mt-5 font-weight-bold">Summer</h2>--}}
{{--        <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><img src="/images/summer-1.png" alt="summer part 1" class="img-fluid mt-1 rounded shadow"></a>--}}
{{--        <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><img src="/images/summer-2.png" alt="summer part 1" class="img-fluid mt-3 rounded shadow"></a>--}}
{{--        <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><img src="/images/summer-3.png" alt="summer part 1" class="img-fluid mt-3 rounded shadow"></a>--}}
        <h2 class="text-center mt-5 font-weight-bold">Class Descriptions</h2>
{{--        <div class="class-desc mb-5">--}}
{{--            <img src="/images/class-1.png" alt="class logo" class="img-fluid" style="max-width: 225px; height: auto;">--}}
{{--            <p>--}}
{{--                Out Distance Learning Lab is a way for parents to continue to work while their kids are distant learning.  Your child would bring his or her own school-issued curriculum, workbooks, and laptop to the studio.  We provide a Cohort Leader with teaching experience to help and keep your kids on task.  This program is best for independent learners who just need a watchful eye and occasional help.  Space is limited to 12 kids per cohort and open to grades 2-8.--}}
{{--                <br><br>Monday-Friday 8-2--}}
{{--                <br>Program cost $300 per month--}}
{{--            </p>--}}
{{--        </div>--}}
        @include('class-descriptions')
        <h2 class="text-center mt-3 font-weight-bold">Tuition</h2>
        <p>
            <span class="lead">Tuition 30 min classes</span>
            <br>1 class per week- $60/month
            <br>each additional class- $55/month
            <br><br>
            <br><span class="lead">Tuition 45 min- 60 min classes</span>
            <br>1 class per week- $80/month
            <br>each additional class- $75/month
            <br>
            <br>Membership fee $60 for new families
            <br>What do you receive with your membership?  Free make-up classes, priority registration to all events, $10 Birthday Party Packages, VIP early registration, and Dance Pathways Conference
        </p>
        <div class="bottom-buttons mt-3">
            <div class="text-center">
                <a href="/images/dress-code.pdf" target="_blank" class="mx-1"><div class="btn btn-grey btn-lg text-center text-uppercase">Dress Code</div></a>
                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank" class="mx-1"><div class="btn btn-aqua btn-lg text-center text-uppercase">View Schedule</div></a>
                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a>
            </div>
        </div>
    </div>

@endsection
