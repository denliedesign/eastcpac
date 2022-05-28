<div class="jumbotron jumbotron-fluid bg-gray jumbo-footer mb-0 pb-3">
    <div class="footer text-center d-flex align-items-center">
        <div class="footer-items">
            <div class="row">
                <div class="mb-5 mb-md-0 col-md-1 d-flex justify-content-center">
                    <div class="copyright-items">
                        <img src="/images/ecpac-logo-circle.png" alt="">
                        <p class="pt-2"><small class="text-muted">Nina Koch<br>&#169; 2021</small></p>
                    </div>
                </div>
                <div class="mb-5 mb-md-0 col-md-3">
                    <p class="text-white footer-title">NAV</p>
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/parents">Parents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/employment">Employment</a>
                        </li>
{{--                        <hr class="m-0 p-0 border-white" style="width: 40%; opacity: 60%; margin-left: 25px !important;">--}}
                        <li class="nav-item">
                            <a class="nav-link" href="/why-ecpac">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/faculty">Faculty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/classes">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/camps-and-events">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/teams">Teams</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/recital">Recital</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/parties">Parties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/careers">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://app.thestudiodirector.com/brentwooddance/portal.sd?page=Enroll&meth=search&SEASON=&CLASS_TYPE=&DAYS=127&START_TIME=&MINAGE=&INSTRUCTOR=&AVAIL=all&SORT1=3&SORT2=4&SORT3=1" target="_blank">Register</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Staff Login') }}</a>
                            </li>
                            {{--                    @if (Route::has('register'))--}}
                            {{--                        <li class="nav-item">--}}
                            {{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--                        </li>--}}
                            {{--                    @endif--}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    {{--                            <a class="dropdown-item" href="{{ url('admin') }}">Admin</a>--}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <div class="mb-5 mb-md-0 col-md-3">
                    <p class="text-white footer-title">CONTACT</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <ion-icon name="location"></ion-icon>
                            3901 Walnut Blvd, Brentwood, CA 94513
                        </li>
                        <li class="nav-item">
                            <ion-icon name="call"></ion-icon>
                            925-240-5556
                        </li>
                        <li class="nav-item">
                            <ion-icon name="mail"></ion-icon>
                            eastcountypac@gmail.com
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <div style="width: 100%"><iframe width="100%" height="275" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=100%25&amp;hl=en&amp;q=3901%20Walnut%20Blvd,%20Brentwood,%20CA%2094513+(East%20County%20Performing%20Arts%20Center)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
            <p class="pt-5" id="credit"><a href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a></p>
            <p id="credit">
                <a href="/brentwood-kids-dance"><small class="text-muted">Brentwood Kids Dance</small></a>
                <span class="text-muted">&middot;</span>
                <a href="/dance-classes-in-stockton-ca"><small class="text-muted">Dance Classes in Stockton CA</small></a>
                <span class="text-muted">&middot;</span>
                <a href="/dance-studios-in-stockton-ca"><small class="text-muted">Dance Studios in Stockton CA</small></a>
                <span class="text-muted">&middot;</span>
                <a href="/dance-classes-in-antioch-ca"><small class="text-muted">Dance Classes in Antioch CA</small></a>
            </p>
        </div>
    </div>
</div>
