@extends('web.index')
@section('home_content')
    

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Clients</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Clients</li>
        </ol>
      </div>

    </div>
</section>

  <section id="clients" class="clients section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Our Clients</strong></h2>
        <p>Gained Trust of 200+ Companies Across The Globe</p>
      </div>

      <div class="row">
        @foreach ($clients as $client)
            
        <div class="p-3 col-lg-4 col-md-6 d-flex align-items-stretch" style="align-items: center;" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue" style="margin: auto;">
            <div style="margin: 10%; padding:10%">
              <img width="100%" height="100%" viewBox="0 0 600 600" src="{{ asset($client->image) }}" class="img-fluid" alt="">
            </div>
                <h4 class="mt-3" style="text-align: center;">{{ $client->title }}</h4>
          </div>
        </div>

        @endforeach

      </div>

    </div>
  </section>

@endsection