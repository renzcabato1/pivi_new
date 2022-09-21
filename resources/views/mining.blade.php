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
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/img/mining/mining-1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/mining/mining-2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/mining/mining-3.jpg" alt="Third slide">
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
