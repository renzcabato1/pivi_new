@extends('layouts.app')

@section('content')
<section id="hero" class="hero">
  <div class="position-relative">
    <div class="row gy-5" data-aos="fade-in">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column text-center text-lg-start">
        <div class="d-flex justify-content-center">
          <section id="portfolio-details" class="portfolio-details">
            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item overlay active">
                  <img class="d-block w-100" src="assets/home/2.png" alt="First slide">
                </div>
                <div class="carousel-item overlay">
                  <img class="d-block w-100" src="assets/home/6.png" alt="Second slide">
                </div>
                <div class="carousel-item overlay">
                  <img class="d-block w-100" src="assets/home/4.png" alt="Third slide">
                </div>
                <div class="carousel-item overlay">
                  <img class="d-block w-100" src="assets/home/5.1.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </section>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 row-message">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center pt-2">
          <img src="assets/img/logo_main.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100">
        </div>
        <div class="container">
          <div class="row">
            <h3 class="text-dark text-center col-12 mb-3 pt-2">Our Ventures</h3>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center d-flex justify-content-center">
              <a href="{{url('construction')}}">
                <img src="assets/img/images/construction.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100" > 
                <br>
                <span>Construction</span>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center d-flex justify-content-center">
              <a href="{{url('realestate')}}">
                <img src="assets/img/images/Realestate.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100" > 
                <br>
                <span>Real State</span>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center d-flex justify-content-center">
              <a href="{{url('manufacturing')}}">
                <img src="assets/img/images/Aggregates.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100" > 
                <br>
                <span>Aggregates</span>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center d-flex justify-content-center">
              <a href="{{url('logistics')}}">
                <img src="assets/img/images/logistics.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100" > 
                <br>
                <span>Logistics</span>
              </a>
            </div>

            <div class="col-lg-4 ol-md-4 col-sm-4 col-xs-12 mt-2 ship-bldg d-flex justify-content-center">
              <a href="{{url('ship-building')}}">
                <img src="assets/img/images/ship_builders.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100">
                <br>
                <span>Ship Building</span>
              </a>
            </div>
            <div class="col-lg-4 ol-md-4 col-sm-4 col-xs-12 mt-2 d-flex justify-content-center">
              <a href="{{url('e-commerce')}}">
                <img src="assets/img/images/e-commerce.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100"> 
                <br>
                <span>E-Commerce</span>
              </a>
            </div>
            <div class="col-lg-4 ol-md-4 col-sm-4 col-xs-12 mt-2 mining-icon text-center d-flex justify-content-center">
              <a href="{{url('mining')}}">
                <img src="assets/img/images/mining.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100">
                <br>
                <span>Mining</span>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 msg">
          <h5 class="text-dark pt-3 text-center">Message from the<b> CHAIRMAN / CEO</b></h5>
            <p class="text-dark text-justify pr-5" style="text-indent: 30px;">In today’s highly competitive business
                world, our strongest form of action
                is through leadership. As a company
                that specializes in land developments,
                reclamations, construction of roads,
                ports, airports and bridges all over the
                country, we exemplify excellence by
                providing limitless possibilities and
                innovative construction solutions while
                keeping up with the rapid advances
                in technology to achieve real time
                superior long-term results. <a href="" data-toggle="modal" data-target="#exampleModal">Read more...</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-center">Message from the <b>Chairman / CEO</b></h5>
        <p class="text-dark text-justify" style="text-indent: 30px;">
          This is in
          line with our commitment to help the
          nation grow as a leader in the industry
          by providing premium construction
          works and design services. With the
          help of our hardworking and loyal
          employees who continue to perform
          while keeping in mind the importance
          of a healthy work-life balance, we will
          tirelessly work to become “Builders of A
          Better World”.
        </p>
        <p class="text-dark text-justify"  style="text-indent: 30px;">
          Guided by our core values, we make
          sure that there is INTEGRITY in all
          our dealings without sacrificing our
          COMMITMENT to provide the best
          possible service to our customers while
          showing the company’s HUMILITY and
          MESSAGE FROM THE
          CHAIRMAN / CEO
          GENUINE CONCERN to the people we
          serve. By cultivating INNOVATION for
          every community’s development, we
          are able to provide PREMIUM SERVICE
          to harmonize and provide SYNERGY
          among our customers, stakeholders,
          workers and the nation as a whole.
        </p>
        <p class="text-dark text-justify"  style="text-indent: 30px;">
          I would like to sincerely express my
          deep gratitude to everyone who made
          all of this possible. Our investors,
          employees and everyone who believes
          in the company. I am humbled that you
          have placed your trust on this company
          and everything it stands for. I believe
          that we have barely scratched the
          surface and we can progress together
          to achieve greater heights. With your
          continued support, we renew our firm
          commitment to be the industry leader
          in the field of construction that we are
          destined to be.
        </p>
        <div class="d-flex justify-content-start">
            <p>
              <b class="">ENGR. FRANCIS LLOYD T. CHUA</b><br>
              <small class="mx-auto">CHAIRMAN / CEO</small>
            </p>
        </div>
      </div>
    </div>
  </div>
</div>
<main id="main">
  <!-- ======= About Us Section ======= -->
  <section id="message" class="message" style="display:none;">
    <div class="container" data-aos="fade-up>
      <div class="row msg">
          <div class="section-header pb-5">
            <h2>Message from the <b>Chairman / CEO</b> </h2>
          </div>
          <p class="text-dark text-justify"  style="text-indent: 30px;">In today’s highly competitive business
              world, our strongest form of action
              is through leadership. As a company
              that specializes in land developments,
              reclamations, construction of roads,
              ports, airports and bridges all over the
              country, we exemplify excellence by
              providing limitless possibilities and
              innovative construction solutions while
              keeping up with the rapid advances
              in technology to achieve real time
              superior long-term results. <a href="" data-toggle="modal" data-target="#exampleModal">Read more...</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  
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
  </section>
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
