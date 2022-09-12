@extends('layouts.app')

@section('content')

<main id="main">

    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Real Estate</h2>
             </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li>Services</li>
            <li>Real Estate</li>
          </ol>
        </div>
      </nav>
    </div>

    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-between gy-4 mt-4">
  
          <div class="col-lg-6">
              <div class="position-relative h-100">
                  <div class="slides-1 portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
        
                      <div class="swiper-slide">
                        <img src="assets/img/realestate/1.png" alt="">
                      </div>
        
                      <div class="swiper-slide">
                        <img src="assets/img/realestate/2.png" alt="">
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
              <h3>Mission</h3>
              <ul>
                <li><span>To inspire and elevate the quality of life of every Filipino through thoughtfully designed development.</span> </li>
               
              </ul>
              <h3>Vision</h3>
              <ul>
                <li><span>To be a world class developer for premium developments, forefront in sustainable and innovative developments and with strong brand recognition.</span> </li>
                <li><a href="https://premiumlandscorp.com/" target="_blank" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
            </div>
          </div>
  
        </div>
        <div class="row justify-content-between gy-4 mt-4">
          <div class="col-lg-12 text-center">
            <h3>Corporate Values</h3>
           
          </div>
          <div class="col-lg-4 text-center">
              <h4>INTEGRITY</h4>
              <span class='text-secondary'>"To do good and be good at all times"</span>
          </div>
          <div class="col-lg-4  text-center"">
            <h4>COMMITMENT</h4>
            <span class='text-secondary'>"Never make excuses, only results"</span>
          </div>
          <div class="col-lg-4  text-center"">
            <h4>HUMILITY & GENUINE CONCERN</h4>
            <span class='text-secondary'>"Simplicity in enriching lives of the people"</span>
          </div>
          <div class="col-lg-4 text-center">
              <h4>INNOVATION</h4>
              <span class='text-secondary'>"There's a way to do it better - find it"</span>
          </div>
          <div class="col-lg-4  text-center"">
            <h4>PREMIUM SERVICES</h4>
            <span class='text-secondary'>"Quality service beyond expectations"</span>
          </div>
          <div class="col-lg-4  text-center"">
            <h4>SYNERGY</h4>
            <span class='text-secondary'>"Alone we can do so little; together we can do so much"</span>
          </div>
        </div>
      </div>
    </section>


  </main><!-- End #main -->

@endsection
