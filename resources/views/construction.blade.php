@extends('layouts.app')

@section('content')

<main id="main">

    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Construction</h2>
             </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li>Services</li>
            <li>Construction</li>
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
                    <img class="d-block w-100" src="assets/img/construction/5.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/construction/3.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/construction/4.jpg" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/construction/1.jpg" alt="Fourth slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/construction/2.jpg" alt="Fifth slide">
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
                <h3>Who we are</h3>
                <ul>
                  <li><span>We are a Quadruple AAAA construction company accredited by PCAB and one of the leading builders in the Philippines.</span> </li>
                 
                </ul>
                <h3>What We Do</h3>
                <ul>
                  <li><span>We provide quality construction projects involving construction management, design and build, general contracting for private and public-private partnerships. We do everything from start to finish.</span> </li>
                 
                </ul>
                <h3>Why Us</h3>
                <ul>
                  <li><span>With our experience and expertise, quality control approach, and track record of success, PMI will continue to be the nation's growth builders.</span> </li>
                  <li><a href="https://premiummegastructures.com/" target="_blank" class="btn-visit align-self-start">Visit Website</a></li>
                </ul>
              </div>
            </div>
    
          </div>
          <div class="row justify-content-between gy-4 mt-4">
            <div class="col-lg-12 text-center">
              <h3>Accreditation</h3>
            </div>
            <div class="col-lg-4">
              <div class="post-img">
                <img src="assets/img/accreditation/urs.png" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="post-img">
                <img src="assets/img/accreditation/pcab.png" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="post-img">
                <img src="assets/img/accreditation/pca.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </section>
</main>

@endsection
