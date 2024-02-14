  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Our Services</strong></h2>
        <p>Starting from complete digital marketing services, we are offering everything you need to improve your brand. Our aim is to serve both digital and creative solutions along with printing solutions</p>
      </div>

      <div class="row">
        @foreach ($services as $service)
            
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">
            <div class="icon">
              <img width="100" height="100" viewBox="0 0 600 600" src="{{ asset($service->image) }}" class="img-fluid" alt="">
            </div>
            <h4><a href="">{{ $service->title }}</a></h4>
            <p>{{ $service->description }}</p>
          </div>
        </div>

        @endforeach

      </div>

    </div>
  </section><!-- End Services Section -->