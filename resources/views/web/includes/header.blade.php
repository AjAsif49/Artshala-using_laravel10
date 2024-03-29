  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href='/'>Art<span style="color: tomato">Shala</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="nav-link {{ request()->routeIs('/') ? 'active':'' }}"><a href="{{ url('/') }}">Home</a></li>

          {{-- <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li> --}}

          <li class="nav-link {{ request()->routeIs('service') ? 'active':'' }}"><a href="{{ route('service') }}">Services</a></li>
          <li class="nav-link {{ request()->routeIs('clients') ? 'active':'' }}"><a href="{{ route('clients') }}">Clients</a></li>
          <li class="nav-link {{ request()->routeIs('contact') ? 'active':'' }}"><a href="{{ route('contact') }}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      {{-- <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div> --}}

    </div>
  </header><!-- End Header -->