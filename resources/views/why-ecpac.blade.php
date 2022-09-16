@extends('layouts.app')

@section('title', 'About | East County Performing Arts Center | Nina Koch')
@section('description', '5 Things You Should Know When Choosing a Dance Studio')

@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <h2 class="text-center mt-3 font-weight-bold">5 Things You Should Know When Choosing a Dance Studio</h2>
        <p class="mb-5">
            If most dance studios seem to have qualified friendly teachers, who are experienced teaching children and a big show at the end of the year, aren’t they all pretty much the same? Does it really matter which place you decide to enroll? Yes. There are 5 main things that can make a huge difference in the quality of instruction your child receives and the overall enjoyment and satisfaction of being involved with a dance program.
        </p>
        <div class="six-things">
            <div class="row mt-3">
                <div class="col-1 number-green">1</div>
                <div class="col-10 d-flex align-items-center">
                    <p class="lead mb-0">
                        We are the only dance studio in Brentwood, Antioch, and other surrounding areas to have earned a More Than Just Great Dancing affiliation!
                    </p>
                </div>
            </div>
            <p>
                More Than Just Great Dancing (MTJGD) is a licensed affiliation of dance studios that subscribe to a higher standard of instruction and management principals. As part of a dynamic network of 115+ studios, and 35,000 students worldwide, MTJGD transforms staff development and provides leadership training, quality programs and cirricula to its affiliate studios.  MTJGD is a commitment to providing more than just great dance training, our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.  MTJGD studios are diverse in their specialties, but united in their belief in the power of dance to change lives!
            </p>
        </div>
        <div class="six-things">
            <div class="row mt-3">
                <div class="col-1 number-green">2</div>
                <div class="col-10 d-flex align-items-center">
                    <p class="lead mb-0">
                        Who is teaching your children?
                    </p>
                </div>
            </div>
            <p>
                Many dance studios use dancers who have moved up the ranks of the studio to teach entry level classes. Sometimes these teachers are teenagers and even though they may be wonderful dancers and great kids they are too inexperienced to be in charge of children.
                <br><br>
                At ECPAC all of the teachers are adults. Even our entry level classes are taught by teachers with years of experience. At ECPAC we have teachers who are certified through professional dance associations like Dance Masters of California, teachers who have danced professionally and teachers who are university trained. You can be sure your child will be taught by qualified and experienced teachers.
            </p>
        </div>
        <div class="six-things">
            <div class="row mt-3">
                <div class="col-1 number-green">3</div>
                <div class="col-10 d-flex align-items-center">
                    <p class="lead mb-0">
                        What type of floor is used?
                    </p>
                </div>
            </div>
            <p>
                Dance is a very physical activity that requires a lot of jumping, which can put stress on bones and joints. Most dance footwear does not provide any cushioning or support, so the shock of dance movement can place a lot of pressure on the knees and back of a dancer. The best way to prevent against potential injury is by choosing a studio with a professional “floating floor”. A floating floor is a dance floor that rests on a system of high-density foam, to absorb the shock of jumping. A high-density foam base is superior to a “sprung” floor, which usually consists of a wood structure built on the regular floor.
                <br><br>
                At ECPAC your dancer’s health and safety is the highest priority. We have professional floating wood floors in all our dance rooms. Our special floors help reduce the risk of injury and allow students to dance longer without getting tired.
            </p>
        </div>
        <div class="six-things">
            <div class="row mt-3">
                <div class="col-1 number-green">4</div>
                <div class="col-10 d-flex align-items-center">
                    <p class="lead mb-0">
                        Can I watch my child’s classes?
                    </p>
                </div>
            </div>
            <p>
                At many studios families are not permitted to watch classes. Parents are left wondering what is happening in the class and if their child is advancing and having a good experience.
                <br><br>
                At ECPAC we think it is important for parents to be able to see what is happening in the class. We believe it helps the student feel secure and parents feel confident that their children are having a great experience. Because of that our dance rooms have either a large viewing window or a closed circuit TV system so you can view all the classes on TV’s in the lobby.
            </p>
        </div>
        <div class="six-things">
            <div class="row mt-3">
                <div class="col-1 number-green">5</div>
                <div class="col-10 d-flex align-items-center">
                    <p class="lead mb-0">
                        Can I get immediate customer service?
                    </p>
                </div>
            </div>
            <p>
                In many studios the teacher or the studio owner conducts classes and does the administration. They are so busy that they can have problems returning phone calls in a timely fashion or at all. To have a good experience it is important to choose a studio that can assist you with customer service issues. We have an customer service team ready to assit you 9:00 am-1:00 pm Tuesday-Friday and 2:30 to 6:30 Monday through Friday.  Our knowledgeable customer service team can answer any questions you may have.
            </p>
        </div>
        <div class="d-flex justify-content-center">
            <img src="/images/mtjgd-values.jpg" alt="studio values" class="img-fluid">
        </div>
    </div>

    <p class="my-5 text-center">Choose ECPAC for dance classes in Antioch CA, Brentwood CA and other surrounding areas!</p>

@endsection
