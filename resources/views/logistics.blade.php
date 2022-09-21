@extends('layouts.app')

@section('content')

<main id="main">

    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Logistics</h2>
             </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li>Services</li>
            <li>Logistics</li>
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
                  <img class="d-block w-100" src="assets/logistics/1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/logistics/2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/logistics/3.png" alt="Third slide">
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
            
              
              <h3>About Us</h3>
              <ul>
                <li>
                  <span>Logistics has always been an important factor in any industry that needs transportation
                    of products. It is the movement of tangible goods such as materials, supplies, equipment
                    and other consumables. Shipment by sea can move commodities in large-scale minus the
                    hassle of facing congested traffic for the duration of the voyage, typically encountered
                    in land transport. As a cost-efficient alternative to land and air freight, sea freight holds
                    a great potential for advancing as an industry due to the fact that the Philippines is an
                    archipelagic nation.</span>
                </li>
                <li><a href="https://industrymoverscorp.com/" target="_blank" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
            </div>
          </div>
  
        </div>
        <div class="row justify-content-between gy-4 mt-4">
          <div class="col-lg-12 text-center">
            <h3>Vessels</h3>
           
          </div>
          <div class="col-lg-4 text-left">
            <div class="post-img mb-3">
              <img src="assets/img/logistics/3.png" alt="" class="img-fluid">
            </div>
              <h4 class='text-center'>MV IMC 16</h4>
          </div>
          <div class="col-lg-4  text-left">
            <div class="post-img mb-3">
              <img src="assets/img/logistics/4.png" alt="" class="img-fluid">
            </div>
            <h4 class='text-center'>IMC 17</h4>
          </div>
          <div class="col-lg-4  text-center">
            <div class="post-img mb-3">
            <img src="assets/img/logistics/1.png" alt="" class="img-fluid">
          </div>
          <h4 class='text-center'>LCT IMC 01</h4>
          </div>
       
        </div>
      
      </div>
    </section>

</main>

@endsection
