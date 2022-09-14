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

    <section class="sample-page p-0">
      <div class="container" data-aos="fade-up">

        {{-- <p>
          Under Development.
        </p> --}}
        <img src="{{ asset('assets/img/mining/under.png') }}" alt="" style="width:auto; height:500px" class=" img-fluid mx-auto d-block">

      </div>
    </section>

  </main><!-- End #main -->

@endsection
