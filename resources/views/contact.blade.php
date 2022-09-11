@extends('layouts.app')

@section('content')

<main id="main">

    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Contact Us</h2>
             </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li>Contact Us</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-between gy-4 mt-4">

        <div class="col-lg-6">
            <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=PMI%20tower&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen>
            </iframe>
        </div>

        <div class="col-lg-6">
          <div class="portfolio-info">
            <h3>Key Contacts</h3>
            <ul>
              <li><span>Premium Infinite Ventures Inc.</span> </li>
              <li><span>17th Floor PMI Tower. Corner</span><span>Pablo Ocampo Sr Ext Onyx &, Cabanillas</span><span>Makati, 1203 Metro Manila Philippines</span></li>
              <li><strong>Email</strong> <span>info@pivi.com.ph</span></li>
              <li><span>Atty. Clarlaine F. Radoc</span><span>(+63) 9618033081</span><span>legal@pivi.com.ph</span></li>
            </ul>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection
