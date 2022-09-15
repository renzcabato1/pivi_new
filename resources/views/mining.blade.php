@extends('layouts.app')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Mining</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li>Home</li>
            <li>Mining</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-between gy-4 mt-4">
  
          <div class="col-lg-6">
              <div class="position-relative h-100">
                  <div class="slides-1 portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
        
                      <div class="swiper-slide">
                        <img src="assets/img/mining/mining-1.jpg" alt="">
                      </div>
        
                      <div class="swiper-slide">
                        <img src="assets/img/mining/mining-2.jpg" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/mining/mining-3.jpg" alt="">
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
        
                </div>
        
          </div>
  
          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3>Mining</h3>
              <ul>
                <li><span>Mined materials are needed to construct roads and hospitals, to build automobiles and houses, to make computers and satellites, to generate electricity, and to provide the many other goods and services that consumers enjoy. In addition, mining is economically important to producing regions and countries.</span> </li>
                <li><span>Mining is the process of extracting useful materials from the earth. Some examples of substances that are mined include coal, gold, or iron ore. Iron ore is the material from which the metal iron is produced.</span> </li>
               
              </ul>
              
            </div>
          </div>
  
        </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection
