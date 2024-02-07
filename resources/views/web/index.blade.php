<!DOCTYPE html>
<html lang="en">

@include('web.includes.head')


<body>

    @include('web.includes.header')

    @include('web.includes.slider')

 

  <main id="main">

    @yield('home_content')
    
  </main><!-- End #main -->

  @include('web.includes.footer')


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('web.includes.scripts')

</body>

</html>