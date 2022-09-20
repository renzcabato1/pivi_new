<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta content="Holdings, Construction Company, Shipping, Logistics, Ship Building" name="keywords">
        <meta content="Premium Infinite Ventures Inc." property="og:title">
        <meta content="Holdings, Construction Company, Shipping, Logistics, Ship Building" property="og:description">
        <meta content="{{ asset('assets/img/PIVI_FINAL_PNG-02.png') }}" property="og:image">
            <!-- Favicons -->
        <link href="{{ asset('assets/img/PIVI_FINAL_PNG-02.png') }}" rel="icon">
        <link href="{{ asset('assets/img/PIVI_FINAL_PNG-02.png') }}" rel="apple-touch-icon">
        <meta content="https://pivi.com.ph/" property="og:url">

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        

        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">
    </head>
    <body>
        <section id="topbar" class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
              <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="#">info@pivi.com.ph</a></i>
              </div>
              <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
              </div>
            </div>
        </section>
        <header id="header" class="header d-flex align-items-center header-bottom-border">

            <div class="container-fluid container-xl d-flex align-items-center">
              {{-- <a href="{{url('/')}}" class="logo d-flex align-items-center"> --}}
                <!-- Uncomment the line below if you also wish to use an image logo -->
                {{-- <img src="assets/img/logo.png" alt=""> --}}
                <!-- <h1>Impact<span>.</span></h1> -->
              {{-- </a> --}}
              <nav id="navbar" class="navbar">
                <ul class="text-dark">
                  <li class="text-dark"><a href="{{url('/')}}" class="text-secondary">Home</a></li>
                  <li class="text-dark"><a href="{{url('/#about')}}" class="text-secondary">About</a></li>
                  {{-- <li ><a href="#services" class="text-secondary">Services</a></li> --}}
                  <li class="dropdown"><a href="#" class="text-secondary"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a href="{{url('construction')}}">Construction</a></li>
                      <li><a href="{{url('realestate')}}">Real Estate</a></li>
                      <li><a href="{{url('manufacturing')}}">Manufacturing</a></li>
                      <li><a href="{{url('logistics')}}">Logistics</a></li>
                      <li><a href="{{url('ship-building')}}">Ship Building</a></li>
                      <li><a href="{{url('e-commerce')}}">E-Commerce</a></li>
                      <li><a href="{{url('mining')}}">Mining</a></li>
                    </ul>
                  </li>
                  <li><a class="text-secondary" href="{{url('/contact#contact')}}">Contact</a></li>
                </ul>
              </nav><!-- .navbar -->
        
              <i class="mobile-nav-toggle mobile-nav-show bi bi-list "></i>
              <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            </div>
        </header>
     

        <main class="">
            @yield('content')
        </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span> <img src="assets/img/logo_main.png" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100"></span>
          </a>
          <p>Premium Infinite Ventures Inc. (PIVI) is a Philippines-based management corporation created exclusively to provide management, administrative, and corporate support and services for the holdings corporations owned by Francis Lloyd T. Chua namely Premium Capital Holdings Inc., Premium Technology Holdings Inc., Industry Holdings and
            Development Corp. and its subsidiaries, affiliates and other related
            entities.
          </p>
          <div class="social-links d-flex mt-4 mb-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 footer-links">
          <h4>Our Services</h4>
            <ul>
              <li><a href="{{url('construction')}}">Construction</a></li>
              <li><a href="{{url('realestate')}}">Real Estate</li>
              <li><a href="{{url('manufacturing')}}">Manufacturing</a></li>
              <li><a href="{{url('logistics')}}">Logistics</li>
              <li><a href="{{url('ship-building')}}">Ship Building</a></li>
              <li><a href="{{url('e-commerce')}}">E-Commerce</a></li>
              <li><a href="{{url('mining')}}">Mining</a></li>
            </ul>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 footer-contact">
          <h4>Contact Us</h4>
          <p>
            17th Floor PMI Tower. Corner<br>
            Pablo Ocampo Sr Ext Onyx &, Cabanillas<br>
            Makati, 1203 Metro Manila Philippines <br><br>
            <strong>Phone:</strong> (+63) 9618033081<br>
            <strong>Email:</strong> info@pivi.com.ph<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>PIVI</span></strong>. All Rights Reserved
      </div>
      
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
