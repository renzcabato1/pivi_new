@extends('layouts.app')

@section('content')

<main id="main">

    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>E-Commerce</h2>
             </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li>Services</li>
            <li>E-Commerce</li>
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
                        <img src="assets/img/e_commerce/1.jpg" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/e_commerce/2.jpg" alt="">
                      </div>
                      {{-- <div class="swiper-slide">
                        <img src="assets/img/e_commerce/3.jpg" alt="">
                      </div> --}}
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
        
                </div>
        
          </div>
  
          <div class="col-lg-6">
            <div class="content portfolio-info ps-0 ps-lg-5">
              <h3>Company Profile</h3>
              <ul class='text-left'>
                <li ><span>First locally made e-commerce marketplace
                  business solution platform that caters a wide range of target market for
                  small to large scale businesses in the country by means of:</span> </li>
                <li><span><i class="bi bi-check-circle-fill text-left"></i> Providing marketplace business solutions based on their needs and budget.</span>
                  <span><i class="bi bi-check-circle-fill text-left"></i> Providing new customer experience and better customer satisfaction.</span>
                  <span><i class="bi bi-check-circle-fill text-left"></i>Expanding the target market.</span>
                  <span><i class="bi bi-check-circle-fill text-left"></i> Providing an effective and efficient logistics system.</span>
                  <span><i class="bi bi-check-circle-fill text-left"></i> Providing an up-to-date database for Data-driven decision making.</span>
                  <span><i class="bi bi-check-circle-fill text-left"></i> Here at obanana.com, we make your selling very convenient, simple and
                    user-friendly by helping you bring all your online products and services
                    under one seamless platform.</span>
                </li>
                <li><a href="https://obanana.com/" target="_blank" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
             
            </div>
          </div>
  
        </div>
        <div class="row justify-content-between gy-4 mt-4">
          <div class="col-lg-12 text-center">
            <h3>What we offer now in our platform</h3>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/1.png" alt="" class="img-fluid">
            </div>
              <h5>Apparels</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/2.png" alt="" class="img-fluid">
            </div>
              <h5>Construction Services</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/3.png" alt="" class="img-fluid">
            </div>
              <h5>General Services</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/4.png" alt="" class="img-fluid">
            </div>
              <h5>Food & Beverages</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/5.png" alt="" class="img-fluid">
            </div>
              <h5>Gadgets & Electronics</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/6.png" alt="" class="img-fluid">
            </div>
              <h5>Land Properties</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/7.png" alt="" class="img-fluid">
            </div>
              <h5>Home & Living</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/8.png" alt="" class="img-fluid">
            </div>
              <h5>Automotive Tools & Equipment</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/9.png" alt="" class="img-fluid">
            </div>
              <h5>Ship Building</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/10.png" alt="" class="img-fluid">
            </div>
              <h5>Aggregates</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/11.png" alt="" class="img-fluid">
            </div>
              <h5>Equipment Rentals</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/12.png" alt="" class="img-fluid">
            </div>
              <h5>Travel & Tours</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/13.png" alt="" class="img-fluid">
            </div>
              <h5>Home & Office Appliances</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/14.png" alt="" class="img-fluid">
            </div>
              <h5>Health & Wellness</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/15.png" alt="" class="img-fluid">
            </div>
              <h5>Groceries & Merchandise</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/16.png" alt="" class="img-fluid">
            </div>
              <h5>Pet Care</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/17.png" alt="" class="img-fluid">
            </div>
              <h5>Digital Marketing Services</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/18.png" alt="" class="img-fluid">
            </div>
              <h5>Recreation, Luxury & Aviation</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/19.png" alt="" class="img-fluid">
            </div>
              <h5>Make Up & Cosmetics</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/20.png" alt="" class="img-fluid">
            </div>
              <h5>Toys, Games & Collectibles</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/e_commerce/21.png" alt="" class="img-fluid">
            </div>
              <h5>Vehicles</h5>
          </div>
          <div class="col-lg-6  text-center">
          </div>
        </div>
      </div>
    </section>

</main>

@endsection
