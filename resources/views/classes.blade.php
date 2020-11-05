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
        <h2 class="text-center mt-5 font-weight-bold">Class Descriptions</h2>
        <div class="class-desc mb-5">
            <img src="/images/class-1.png" alt="class logo" class="img-fluid" style="max-width: 225px; height: auto;">
            <p>
                Out Distance Learning Lab is a way for parents to continue to work while their kids are distant learning.  Your child would bring his or her own school-issued curriculum, workbooks, and laptop to the studio.  We provide a Cohort Leader with teaching experience to help and keep your kids on task.  This program is best for independent learners who just need a watchful eye and occasional help.  Space is limited to 12 kids per cohort and open to grades 2-8.
                <br><br>Monday-Friday 8-2
                <br>Program cost $300 per month
            </p>
        </div>
        <div class="class-desc mb-5">
            <img src="/images/class-2.jpg" alt="class logo" class="img-fluid" style="max-width: 225px; height: auto;">
            <p>
                Dance and sing to childhood favorites with a bit of tumbling and a lot of fun!  We focus on learning how to follow directions through play and development of gross motor skills.  Tutus and Bow Ties is our creative movement class for 18-30 months.  Although not a parent participation class parents or care givers can and are encouraged to participate if they need too.
            </p>
        </div>
        <div class="class-desc mb-5">
            <img src="/images/class-3.jpg" alt="class logo" class="img-fluid" style="max-width: 225px; height: auto;">
            <p>
                Does your child love to sing and dance?  Then Musical Theater is the perfect class!  Students will learn vocal and dance numbers to perform at showcases throughout the year. This a a great class to cultivate performance skills.
            </p>
        </div>
        <div class="class-desc mb-5">
            <img src="/images/class-4.jpg" alt="class logo" class="img-fluid" style="max-width: 225px; height: auto;">
            <p class="lead mb-0">Ages 2-3 Boogie Babies</p>
            <p>
                Our Ages 2-3 Boogie Babies program is a creative movement/ballet program. Our experienced adult teachers understand that our youngest dancers require the utmost care. That is why we pull out all the stops for our 2-3 year olds. We have put together a class format that is the perfect balance of structure and free expression. We use scarves, instruments, bean bags, hula hoops, ribbons and song and dance to teach dance basics and foundations. Our Boogie Babies program develops coordination, musical awareness, and listening skills as well as confidence, poise and discipline. All while they are having fun and socializing with other children their age!
            </p>
            <p class="lead mb-0 mt-5">Ages 3-5 Boogie Babies Tap and Jazz</p>
            <p>
                In our Ages 3-5 Boogie Babies program, our tap or jazz class dancer can take one or, better yet, both! Each month is focused on a different theme but follows the same structure so the dancers can count on the continuity and flow of the class which helps to build a trusting, safe environment. Our Boogie Babies program develops coordination, musical awareness, and listening skills as well as confidence, poise and discipline. All while they are having fun and socializing with other children their age and being taught by a qualified adult instructor!
            </p>
        </div>
        <div class="class-desc mb-5">
            <img src="/images/class-5.png" alt="class logo" class="img-fluid" style="max-width: 225px; height: auto;">
            <p>
                At ECPAC we believe Ballet is the foundation of all dance. Our Bitty Ballet program provides the building blocks for a successful future in Ballet and therefore in any other genre your dancer may pursue.  We keep our Bitty Ballets magical by learning the story of a different classical ballet every 4-6 weeks. Our adult, professional teachers will nurture your child's interest in dance, while increasing coordination, concentration levels, poise, confidence, grace, flexibility and ability to follow instructions.
            </p>
        </div>
        <div class="class-desc mb-5">
            <h4 class="mb-0">Hip Hop & Hippity Hop</h4>
            <p>
                Hip Hop is a fast, high energy type of dance seen in music videos and commercials. At ECPAC our age appropriate Hip Hop classes will get your dancer excited about dance while keeping him/her active and fit! As always our Hip Hop classes are taught by experienced adults who will inspire your dancer and cultivate their self esteem in a structured, fun class setting.
            </p>
        </div>
        <div class="class-desc mb-5">
            <h4 class="mb-0">Acrobatics</h4>
            <p>
                Your child’s safety is our priority! Our progressive acro program relies on a child’s own strength, flexibility, technique and training to execute the movements. Our tumbling classes are held on mats for safety but they we use the same floor we use for dance classes; it is resilient for joint safety but it does not provide any “rebound”. With a solid foundation of strength and flexibility our tumblers advance quickly and safely through our program, under the watchful eye of our professional adult instructor.
            </p>
        </div>
        <div class="class-desc mb-5">
            <h4 class="mb-0">Ages 5-7 Tap & Jazz Combo</h4>
            <p>
                Our Terrific Tappers and Jiggly Jazz  classes are such a wonderful way to introduce a child to the world of dance. These classes are a ½ hour which ensures to keep your child’s interest. ECPAC provides students with the highest quality dance training available allowing young dancers to reach their fullest potential. As always, building child’s self esteem and confidence is our priority!  Jiggly Jazz and Terrific Tap classes are stacked together in the schedule.  Dancers are encouraged to take both classes and we try to make it as convenient as possible for parents!
            </p>
        </div>
        <div class="class-desc mb-5">
            <h4 class="mb-0">Ballet Classes</h4>
            <p>
                At ECPAC we believe Ballet is the foundation of all dance. Our Building Ballet program provides the building blocks for a successful future in Ballet and therefore in any other genre your dancer may pursue. From Building Ballet through our pre-professional levels our adult, professional teachers will nurture your child's interest in dance, while increasing coordination, concentration levels, poise, confidence, grace, flexibility and ability to follow instructions.
                <a href="/images/ballet-guidebook.pdf" target="_blank">CLICK HERE for our Ballet Guidebook</a>
            </p>
        </div>
        <div class="class-desc mb-5">
            <h4 class="mb-0">All Classes Ages 7+</h4>
            <p class="font-italic">Jazz, Hip Hop, Tap, Contemporary, Musical Theater, Tumbling</p>
            <p>
                Once a dancer reaches 7 years old he or she will take 45 min to 1.5 hour weekly classes per genre. We have many different teachers teaching many different classes with many different class times offered so we are confident you will find the right combination of style, teacher, level and time for your dancer. We offer classes to nurture and encourage the most beginning dancer and to challenge and inspire the most advanced pre-professional dancers… and for everyone in between!
            </p>
        </div>
        <h2 class="text-center mt-3 font-weight-bold">Tuition</h2>
        <p>
            <span class="lead">Tuition 30 min classes</span>
            <br>1 class per week- $55/month
            <br>add a 2nd class- $50/month
            <br>add a 3rd class- $45/month
            <br><br>
            <br><span class="lead">Tuition 45 min- 60 min classes</span>
            <br>1 class per week- $75/ month
            <br>add a 2nd class- $70/month
            <br>add a 3rd class $65/month
            <br><br>
            <br>Membership fee $45 for new families
            <br>What do you receive with your membership?  Free make-up classes, priority registration to all events, $10 Birthday Party Packages, VIP early registration, and Dance Pathways Conference
        </p>
        <div class="bottom-buttons">
            <div class="text-center">
                <a href="/images/dress-code.pdf" target="_blank" class="mx-1"><div class="btn btn-grey btn-lg text-center text-uppercase">Dress Code</div></a>
                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank" class="mx-1"><div class="btn btn-aqua btn-lg text-center text-uppercase">View Schedule</div></a>
                <a href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase mx-1">Register</div></a>
            </div>
        </div>
    </div>

@endsection
