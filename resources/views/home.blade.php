@extends('layouts.app')

@section('content')
<section id="hero" class="hero">
    <div class="position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-5 order-1 order-lg-2">
          <div class="row pt-3"> 
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
              <img src="assets/img/logo_main.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100">
              
            </div>
          </div>
          <div class="row pt-3"> 
            <div class="col-lg-12 col-md-12 col-sm-12 text-dark">
              <h3 class="text-dark">Premium Infinite Ventures <span>Inc.</span></h3>
              <p class="text-dark">Premium Infinite Ventures Inc. (PIVI) is a Philippines-based management corporation created exclusively to provide management, administrative, and corporate support and services for the holdings corporations owned by Francis Lloyd T. Chua namely Premium Capital Holdings Inc., Premium Technology Holdings Inc., Industry Holdings and
                Development Corp. and its subsidiaries, affiliates and other related
                entities.
              </p>
              <p class="text-dark">We manage sustainable and reliable organizations whose products
                and services are designed to cater not only the needs of the end users
                but also the social good.
              </p>
            </div>
          </div>
          <div class="row" >
     
              <div class="col-lg-2 col-md-2 col-sm-2 text-center">
                <a href="{{url('construction')}}">
                <img src="assets/img/images/construction.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100"> <br>
                <span class="text-dark">Construction</span>
                </a>
              </div>
           
            <div class="col-lg-2 col-md-2 col-sm-2 text-center">
              <a href="{{url('realestate')}}">
                <img src="assets/img/images/Realestate.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100"> <br>
                <span class="text-dark">Real Estate</span>
              </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 text-center">
              <a href="{{url('manufacturing')}}">
                <img src="assets/img/images/Aggregates.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100"> <br>
                <span class="text-dark">Manufacturing</span>
              </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 text-center">
              <a href="{{url('logistics')}}">
                <img src="assets/img/images/logistics.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100"> <br>
                <span class="text-dark">Logistics</span>
              </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 text-center">
              <a href="{{url('ship-building')}}">
                <img src="assets/img/images/ship_builders.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100"> <br>
                <span class="text-dark">Ship Building</span>
              </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 text-center">
              <a href="{{url('e-commerce')}}">
                <img src="assets/img/images/e-commerce.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100"> <br>
                <span class="text-dark">E-Commerce</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-sm-3 col-md-3 d-flex flex-column justify-content-center text-center text-lg-start ">
          <!-- <div  class=""> -->
            <div class="position-relative h-100">
              <div class="slides-1 portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <img src="assets/home/2.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/home/6.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/home/4.png" alt="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
    
            </div>
            <!-- </div> -->
          <!-- </div> -->
        </div>
      
      </div>
  
    </div>


    </div>
  </section>
  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <!-- <h3>Voluptatem dignissimos provident quasi corporis</h3> -->
            <img src="assets/img/management.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>A Philippine-based management company with broad range of services for different industries, such as technology, aggregate supplies, construction development that provides world-class products and services to the Filipino people.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                <b>HERE AT PIVI</b>
              </p>
              <ul class='text-left'>
                <li ><i class="bi bi-check-circle-fill text-left"></i> We value INTEGRITY “To do good and be good at all times”</li>
                <li><i class="bi bi-check-circle-fill"></i> We are COMMITTED to “Never make excuses, only results”</li>
                <li><i class="bi bi-check-circle-fill"></i> We value HUMILITY AND GENUINE CONCERN “Simplicity in enriching lives of the people</li>
                <li><i class="bi bi-check-circle-fill"></i> We are INNOVATIVE “There’s a way to do it better – find it” – (Thomas A. Edison)</li>
                <li><i class="bi bi-check-circle-fill"></i> We provide PREMIUM SERVICES “Quality Service beyond Expectation”</li>
                <li><i class="bi bi-check-circle-fill"></i> We work in SYNERGY “Alone we can do so little; Together we can do so much” – (Helen Keller)</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/companies/pmi.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/companies/csc-logo-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/companies/1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/companies/imc.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/companies/obanana.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/companies/plc.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section> -->
    
    <!-- End Clients Section -->


    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <!-- <img src="assets/img/images/construction.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100"> -->
                <i class="bi bi-cone-striped"></i>
              </div>
              <h3>Construction</h3>
              <p>We deliver its unique brand of Engineering Excellence in projects for both PPP and private sectors. As an infrastructure conglomerate, its scope of work includes architectural work, BIM, MEPF, Line and Grade, Earthworks, and property development. </p>
              <a href="{{url('construction')}}" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-building"></i>
              </div>
              <h3>Real Estate</h3>
              <p>We envision to be a world-class developer of premium developments, forefront in sustainable and innovation to inspire and elevate the quality of life of every Filipino through thoughtfully designed real-estate. 
                </p>
              <a href="{{url('realestate')}}" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-house-fill"></i>
              </div>
              <h3>Manufacturing</h3>
              <p>One of the leading and largest suppliers, our company aims to make a positive impact through a sustainable and socio-economic business approach to be able to cater to the growing market of construction materials. </p>
              <a href="{{url('manufacturing')}}" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <h3>Logistics</h3>
              <p>Provide past deliveries without delay and other premium
                services with efficiency, accountability and reliability. Further
                more, the company plans to acquire more vessels to improve
                currently provide services and to answer the call for increasing
                demand in the market</p>
              <a href="{{url('logistics')}}" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-gear"></i>
              </div>
              <h3>Ship Building</h3>
              <p>We provide the first shipyard in Eastern Visayas and the first to utilize marine airbag technology in Visayas province. Build ships with premium quality and innovative designs which are cost effective and affordable to Philippine market. Prompts delivery of vessels, ship building products and ship repair mechanical works and services.</p>
              <a href="{{url('ship-building')}}" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-shop-window"></i>
              </div>
              <h3>E-Commerce</h3>
              <p>A trailblazer in the industry and the first Filipino-made e-commerce marketplace business solution that seeks to revolutionize the Philippine online and technology where everyone can easily access and experience, the fastest, most accurate, and most reliable quality e-commerce platform.</p>
              <a href="{{url('e-building')}}" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->


  </main><!-- End #main -->

@endsection
