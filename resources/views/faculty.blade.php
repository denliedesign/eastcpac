@extends('layouts.app')

@section('title', 'Faculty | East County Performing Arts Center | Nina Koch')
@section('description', 'Learn About Our Team And How We Can Help You.')

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="jumbotron jumbotron-fluid bg-white">
        <section class="section-teachers container">
            <section>
                <h2 class="pb-5 font-weight-bold text-center">Faculty</h2>
            </section>
            <div>
                <div class="row">
                    <div class="col-sm">
                        <img class="img-fluid rounded shadow" src="images/nina-koch.jpg">
                    </div>
                    <div class="col-sm d-flex align-items-end">
                        <div>
                            <h4 class="font-weight-bold">MISS NINA KOCH <span class="lead text-lowercase rounded p-1">Owner & Director</span></h4>
                            <p>
                                Nina Koch began dancing at 2 years old in San Jose CA. She continued her training through high school and experienced many classes at conventions with industry professionals. She began teaching dance at 13 years old and majored in dance at San Jose State. Before moving to Brentwood with her husband in 2000 she was the Studio Director for her childhood school Lauri Gray’s School of Dance. Upon moving to Brentwood Nina Koch took a teaching job at a small, struggling studio. Quickly after, she had the opportunity to purchase the studio. Since then she has grown East County Performing Arts Center to be the largest studio in the area, co founded Brentwood Children’s Ballet Theater, opened a second studio in Antioch, opened a dance retail store and started a performing arts based preschool.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm">
                        <p>
                            Her students have earned many successes including, numerous title awards and scholarships at competition and convention, and have continued their training at State Street Ballet in Santa Barbara, Joffery Ballet in New York, Edge Performing Arts Center and Millennium Dance Complex in LA, Steps on Broadway and Broadway Dance Center in New York. Alumni of East County Performing Arts Center have gone on to dance at University of Idaho, UCLA, Sacramento State, UC Davis, Chico State, San Diego State, UC Irvine, Sonoma State, UC Santa Barbara, Univerity of Oregon, and Chapman University.
                            <br><br>
                            Nina Koch has been featured as a successful businesswoman/studio owner in Dance Life Magazine, Dance Magazine and 110 Magazine. She has been a contributing writer for Dance Life Magazine. Nina Koch’s passion for dance, teaching and mentoring children and young adults has laid the foundation for her successful dance businesses.
                            <br><br>
                            Nina Koch is a member of More Than Just Great Dancing, National Dance Education Organization, Association of Dance Competitions and Conventions, Soroptomists International, National Association of Professional Women, Successful Studio Strategies and National Association of Schools of Dance.
                            <br><br>
                            Nina Koch enjoys spending her time with her husband, David, three children Gabrielle, Christopher and Francesca, drooly lab Cody and Bart the Cat!
                        </p>
                    </div>
                </div>
            </div>
            <div class="about-teacher-wrapper row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
{{--                <div class="teacher-col col-sm">--}}
{{--                    <div class="about-teacher-card">--}}

{{--                        <button class="bioaccordion"><h4>Miss Nina Koch</h4></button>--}}
{{--                        <div class="biopanel">--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="teacher-col col-sm">
                    <div class="about-teacher-card">
                        <img class="teacher-img" src="images/shelby-weis.jpg">
                        <button class="bioaccordion"><h4>Miss Shelby Weis</h4></button>
                        <div class="biopanel">
                            <p>
                                Originally from Omaha, Shelby Weis began her dance training at the age of three. Shelby studied at the school of Ballet Omaha and Omaha Theatre Dance under the direction of Robin Welch. While at Omaha Theatre dance she performed in Coppelia, The Nutcracker, The Firebird, Cinderella, and The Music Man. She holds a Bachelor of Fine Arts Degree in modern dance performance from The University of the Arts in Philadelphia. While at UARTS, Shelby assisted in the reconstruction of Martha Graham 1936 work "Steps In the Street".
                                <br><br>
                                Shelby has taken classes from numerous dance masters including Mia Michaels, Finis Jung, the Paul Taylor Dance Company, Donald Byrd, Robert Vickery, and Joyce Herring. Shelby has performed professionally with Brian Sander's JUNK, the Joffrey Ballet of Chicago, and the Omaha Modern Dance Collective. Before moving to the Bay Area in 2009, Shelby taught and choreographed for The Broadway Connection, the Omaha Theatre Company for Young People's Mindspaces outreach program, as well as the Papillion- LaVista High School Show Choir. Shelby began teaching for East County Performing Arts Center and Ballet Company of East County in 2010.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="teacher-col col-sm">
                    <div class="about-teacher-card">
                        <img class="teacher-img" src="images/kristi-ortiz.jpg">
                        <button class="bioaccordion"><h4>Miss Kristi Ortiz</h4></button>
                        <div class="biopanel">

                            <p>
                                Kristi started dance class at the age of 4. She studied jazz, lyrical, tap and ballet with local studios and national dance conventions. In high school, she found a love for cheerleading and was named all-american cheerleader several years in a row and began choreographing routines and coaching cheer teams. Deciding to go the dance route, she furthered her dance education at Cal State Long Beach studying modern, ballet and jazz while performing with the Cal State Long Beach Dance Company.
                                <br><br>
                                Kristi discovered her passion was teaching children and after college she began coaching cheerleading teams and teaching dance classes. For over 10 years she has taught dance and continues to teach as part of the faculty at East County Performing Arts Center where she is the teacher/director of our non-competitive performing company. She believes that the best part of teaching is watching children grow into a dancer; that moment when it all connects and they find their passion and love for movement. Kristi is married and a mother of 4.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="teacher-col col-sm">
                    <div class="about-teacher-card">
                        <img class="teacher-img" src="images/kathryn-phillips-lopez.jpg">
                        <button class="bioaccordion"><h4>Miss Kathryn Phillips Lopez</h4></button>
                        <div class="biopanel">

                            <p>
                                Kathryn is a Bay Area native who grew up learning the classic styles of jazz and ballet as well as performing on dance competition teams. While studying dance at the University of California, Davis, Kathryn developed her love for modern dance as well as expanded her ballet education.
                                <br><br>
                                Since 2001, Kathryn has performed with, directed and choreographed for an Oakland non-profit dance company where she continues to learn from her fellow dancers and directors. Kathryn also choreographs for the Ballet Company of East County productions. She has also recently joined the Liberty High School Playmakers production staff as a choreographer. Kathryn joined the staff at East County Performing Arts Center in 2005 where she is given the opportunity to teach the love of dance to all ages. Kathryn is married with three children who all love to dance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="teacher-col col-sm">
                    <div class="about-teacher-card">
                        <img class="teacher-img" src="images/lori-pitts.jpg">
                        <button class="bioaccordion"><h4>Miss Lori Pitts</h4></button>
                        <div class="biopanel">
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="teacher-col col-sm">
                    <ul class="list-group teacher-list">
                        <li class="list-group-item">Catrina Van Bemmel</li>
                        <li class="list-group-item">Ryann Brinkman</li>
                        <li class="list-group-item">Victoria Ross</li>
                        <li class="list-group-item">Nesha Shedd</li>
                        <li class="list-group-item">Jansie Thompkins</li>
                    </ul>
                </div>
            </div>

            <section>
                <h2 class="py-5 font-weight-bold text-center">Guest Instructors</h2>
            </section>
            <div class="about-teacher-wrapper row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
                <div class="teacher-col col-sm">
                    <div class="about-teacher-card">
                        <img class="teacher-img" src="images/stephanie-knudson.jpg">
                        <button class="bioaccordion"><h4>Miss Stephanie Knudson</h4></button>
                        <div class="biopanel">

                            <p>
                                Stephanie was raised in Kankakee, Il and grew up at Paula Aubry School of Dance. We all come from somewhere. :) Stephanie is a graduate of the University of Idaho with a degree in dance. She also has a Master of Science with an emphasis in Recreation Therapy from the University of Florida. Although a while has gone by, Stephanie was a former Miami Heat dancer as well as a dancer for Walt Disney World in Florida.
                                <br><br>
                                Stephanie has worked for East County Performing Arts Center for 11 years. During that time, she has been a teacher/choreographer for the competition team. She is a co-founder and artistic director for the Brentwood Children’s Ballet Theater which puts on an elaborate and very successful interpretation of the classic, The Nutcracker, annually.
                                <br><br>
                                Before coming to work for the performing arts center Stephanie taught for Diablo Valley Community college, Arizona State University and University of Florida in the dance dept. She has 30 years of experience teaching dancers from 2 to 80 modern, jazz, contemporary, tap and ballet. She has taught in numerous dance and gymnastic studios throughout her 30 year career. Her dancers have helped to add to her list of accomplishment winning choreography awards from Hollywood Vibe Dance Convention, Rainbow Connection, Spotlight Dance Cup and a Federation of Dance Competitions invitation to Dallas in 2011 for their end of the year national competition.
                            </p>
                        </div>
                    </div>
                </div>
                    <div class="teacher-col col-sm">
                        <ul class="list-group teacher-list">
                            <li class="list-group-item">Jonni Rogers</li>
                        </ul>
                    </div>
            </div>

        </section>
    </div>

@endsection
