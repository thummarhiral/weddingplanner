<header>
    <div class="container">
        <!-- top header -->
        <section class="row top_header pt-3">
            <div class="col-lg-6 buttons ml-auto">
                <!-- <p><span class="fa fa-phone"></span> +12 8976 2334</p> -->
                <a class="btn btn-info btn-lg-block w3ls-btn px-sm-4 px-3 text-capitalize mr-sm-2" href="{{ url('login') }}">Login</a>
                <a class="btn btn-info1 btn-lg-block w3ls-btn1 px-sm-4 px-3 text-capitalize" href="{{ url('register') }}">Register</a>
            </div>
        </section>
        <!-- top header -->
        <!-- nav -->
        <nav class="py-3">
        <div id="logo">
            <h1>
                <a class="navbar-brand" href="{{ url('/') }}"> <span class="fa fa-empire"></span>Royal Ceremony <span><span class="line"></span>Planner</span>
                </a>
            </h1>
        </div>

        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
        <input type="checkbox" id="drop" />
            <ul class="menu mt-2">
                <li class="mr-lg-3 mr-2 {{ Request::is('/')?'active':'' }}"><a href="{{ url('/') }}">Home</a></li>
                <li class="mr-lg-3 mr-2 {{ Request::is('about-us')?'active':'' }}"><a href="{{ url('about-us') }}">About Us</a></li>
                <li class="mr-lg-3 mr-2 {{ Request::is('services')?'active':'' }}"><a href="{{ url('services') }}">Services</a></li>
                <li class="mr-lg-3 mr-2 {{ Request::is('gallery')?'active':'' }}"><a href="{{ url('gallery') }}">Gallery</a></li>
                <li class="mr-lg-3 mr-2 pb-0">
                <!-- First Tier Drop Down --> 
                 <li class="mr-lg-3 mr-2 {{ Request::is('events')?'active':'' }}"><a href="{{ url('events') }}">Events</a></li>
                
                </li>
                <li class="mr-lg-3 mr-2  {{ Request::is('contact-us')?'active':'' }}"><a href="{{ url('contact-us') }}">Contact Us</a></li>
            </ul>
        </nav>
        <!-- //nav -->
    </div>
</header>