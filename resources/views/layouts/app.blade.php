<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}" />
    <title>@yield('title')</title>
  </head>

  <body>
    <!-- navbar -->
    <div class="container">
      <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="index.html" class="navbar-brand">
          <img src="{{ url('frontend/images/logo_nomads.png') }}" alt="" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
              <a href="index.html" class="nav-link active">Home</a>
            </li>
            <li class="nav-item mx-md-2">
              <a href="#" class="nav-link">Paket Travel</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Services</a>
              <div class="dropdown-menu">
                <a href="" class="dropdown-item">Link</a>
                <a href="" class="dropdown-item">Link</a>
                <a href="" class="dropdown-item">Link</a>
              </div>
            </li>
            <li class="nav-item mx-md-2">
              <a href="#" class="nav-link">Testimonial</a>
            </li>
          </ul>
          <!-- mobile button -->
          <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 mt sm-0 px-4">Masuk</button>
          </form>

          <!-- desktop button -->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block">
            <button class="btn btn-login btn-navbar-right my-2 mt-0 sm-0 px-4">Masuk</button>
          </form>
        </div>
      </nav>
    </div>
    <!-- end of navbar -->

  @yield('content')

    <footer class="section-footer mt-5 mb-4 border-top">
      <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-12 col-lg-3">
                <h5>FEATURE</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Community</a></li>
                  <li><a href="#">Social Media Kit</a></li>
                  <li><a href="#">Affiliate</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>ACCOUNT</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Refund</a></li>
                  <li><a href="#">Security</a></li>
                  <li><a href="#">Rewards</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>COMPANY</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Career</a></li>
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Media</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>GET CONNECTED</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Jakarta Selatan</a></li>
                  <li><a href="#">Indonesia</a></li>
                  <li><a href="#">0821-2222-8888</a></li>
                  <li><a href="#">support@nomads.id</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row border-top justify-content-center align-items-center pt-4">
          <div class="col-auto text-grey-500 font-weight-light">2021 Copyright Nomads . All right reserved . Made In Jakarta</div>
        </div>
      </div>
    </footer>

    <script src="{{ url('frontend/libraries/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('frontend/libraries/retinajs/retina.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
  </body>
</html>