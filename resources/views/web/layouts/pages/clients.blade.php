  <!-- ======= Our Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Clients</h2>
        <h4>Gained Trust of 200+ Companies Across The Globe</h4>
      </div>

      <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
        @foreach ($clients as $client)
            
        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="{{ asset($client->image) }}" class="img-fluid" alt="">
          </div>
        </div>
        
        @endforeach
        
      </div>

    </div>
  </section><!-- End Our Clients Section -->