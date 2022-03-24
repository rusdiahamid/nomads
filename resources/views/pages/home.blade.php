@extends('layouts.app')

@section('title')
    NOMADS
@endsection

@section('content')
      <!-- Header -->
      <header class="text-center">
        <h1>
          Explore The Beautiful World
          <br />
          As Easy One Click
        </h1>
        <p>
          You Will see Beautifull
          <br />
          moment you never see before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4"> Get Started </a>
      </header>
      <!-- end of header -->
  
      <!-- main -->
      <main>
        <div class="container">
          <!-- section Statistocs -->
          <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
              <h2>20K</h2>
              <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
              <h2>12</h2>
              <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
              <h2>5K</h2>
              <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
              <h2>72</h2>
              <p>Partners</p>
            </div>
          </section>
        </div>
        <!-- end of section -->
  
        <!-- section popular -->
        <section class="section-popular" id="popular">
          <div class="container">
            <div class="row">
              <div class="col text-center section-popular-heading">
                <h2>Popular Travel</h2>
                <p>
                  Something that you never try
                  <br />
                  before in this world
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- end of popular -->
        <!-- poplar detail -->
        <section class="section-popular-content" id="popuarcontent">
          <div class="container">
            <div class="section-popular-travel row justify-content-center">
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular1.jpg')">
                  <div class="travel-country">INDONESIA</div>
                  <div class="travel-location">DERATAN, BALI</div>
                  <div class="travel-button mt-auto">
                    <a href="details.html" class="btn btn-travel-details px-4"> View Details </a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular2.jpg')">
                  <div class="travel-country">INDONESIA</div>
                  <div class="travel-location">BROMO, JATIM</div>
                  <div class="travel-button mt-auto">
                    <a href="details.html" class="btn btn-travel-details px-4"> View Details </a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular3.jpg')">
                  <div class="travel-country">INDONESIA</div>
                  <div class="travel-location">NUSA PENIDA, BALI</div>
                  <div class="travel-button mt-auto">
                    <a href="details.html" class="btn btn-travel-details px-4"> View Details </a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular4.jpg')">
                  <div class="travel-country">INDONESIA</div>
                  <div class="travel-location">BOROBUDUR, DIY</div>
                  <div class="travel-button mt-auto">
                    <a href="details.html" class="btn btn-travel-details px-4"> View Details </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end of popular -->
        <!-- section network -->
        <section class="section-networks">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2>Our Networks</h2>
                <p>
                  Companies are trusted us
                  <br />
                  more than just a trip
                </p>
              </div>
              <div class="col-md-8 text-center">
                <img src="{{ url('frontend/images/ana.png') }}" alt="Logo Partners" />
                <img src="{{ url('frontend/images/disney.png') }}" alt="Logo Partners" />
                <img src="{{ url('frontend/images/shangri-la.png') }}" alt="Logo Partners" />
                <img src="{{ url('frontend/images/visa.png') }}" alt="Logo Partners" />
              </div>
            </div>
          </div>
        </section>
        <!-- end of network -->
        <!-- section Testumonial -->
        <section class="section-testimonial-heading" id="testimonialHeading">
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <h2>They Are Loving Us</h2>
                <p>
                  Moments were giving them
                  <br />
                  the best experience
                </p>
              </div>
            </div>
          </div>
        </section>
  
        <section class="section section-testimonial-content" id="testimonialContent">
          <div class="container">
            <div class="section-popular-travel row justify-content-center">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                  <div class="testimonial-content">
                    <h3 class="mb-4">Rusdia Hamid</h3>
                    <img src="frontend/images/testi1.png" alt="user" class="mb-4 rounded-circle" />
                    <p class="testimonial">Amazing Guys Kalian harus kesini buruan sebelum kehabisan</p>
                  </div>
                  <hr />
                  <p class="trip-to mt-2">Trip to Nusa Penida</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                  <div class="testimonial-content">
                    <h3 class="mb-4">Rusdia Hamid</h3>
                    <img src="frontend/images/testi2.png" alt="user" class="mb-4 rounded-circle" />
                    <p class="testimonial">Amazing Guys Kalian harus kesini buruan sebelum kehabisan</p>
                  </div>
                  <hr />
                  <p class="trip-to mt-2">Trip to Nusa Penida</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                  <div class="testimonial-content">
                    <h3 class="mb-4">Rusdia Hamid</h3>
                    <img src="frontend/images/testi3.png" alt="user" class="mb-4 rounded-circle" />
                    <p class="testimonial">Amazing Guys Kalian harus kesini buruan sebelum kehabisan</p>
                  </div>
                  <hr />
                  <p class="trip-to mt-2">Trip to Nusa Penida</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-center">
                <a href="#" class="btn btn-need-help px-4 mt-4 mx-1"> I Need Help </a>
                <a href="#" class="btn btn-get-started px-4 mt-4 mx-1"> Get Started </a>
              </div>
            </div>
          </div>
        </section>
        <!-- enf of section Testumonial -->
      </main>
  
@endsection