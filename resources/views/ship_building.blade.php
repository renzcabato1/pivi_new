@extends('layouts.app')

@section('content')

<main id="main">

    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Ship Building</h2>
             </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li>Services</li>
            <li>Ship Building</li>
          </ol>
        </div>
      </nav>
    </div>
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-between gy-4 mt-4">
  
          <div class="col-lg-6">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/build/1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/build/2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/build/3.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/build/4.png" alt="Fourth slide">
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
          </div>
  
          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3>Vision</h3>
              <ul>
                <li><span>To be the preferred & largest shipbuilding and ship repair company nationwide in 2025.</span> </li>
               
              </ul>
              <h3>Mission</h3>
              <ul>
                <li><span>We are committed to provide quality and cost-effective solutions, innovative designs
                  and swift delivery of shipbuilding and ship repair services.</span> </li>
                <li><a href="https://www.megashipbuilders.com/" target="_blank" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
            </div>
          </div>
  
        </div>
        <div class="row justify-content-between gy-4 mt-4">
          <div class="col-lg-12 text-center">
            <h3>Services</h3>
           
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/building/1.png" alt="" class="img-fluid">
            </div>
              <h5 class='text-center'>SHIP BUILDING Up to 50,000DWT</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/building/2.jpg" alt="" class="img-fluid">
            </div>
              <h5 class='text-center'>SHIP REPAIR & DRY DOCKING Up to 20,000DWT</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/building/3.png" alt="" class="img-fluid">
            </div>
              <h5 class='text-center'>SHIP CONVERSION</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/building/4.png" alt="" class="img-fluid">
            </div>
              <h5 class='text-center'>DRAFTING & DESIGN</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/building/5.jpg" alt="" class="img-fluid">
            </div>
              <h5 class='text-center'>MECHANICAL WORKS</h5>
          </div>
          <div class="col-lg-2 text-center">
            <div class="post-img mb-3">
              <img src="assets/building/6.png" alt="" class="img-fluid">
            </div>
              <h5 class='text-center'>FABRICATION WORKS</h5>
          </div>
        </div>
      
      </div>
    </section>

</main>

@endsection
