<!doctype html>
<html lang="en">
  <head>
    <title>Colorlib Wordify &mdash; Minimal Blog Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('front_assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('front_assets/css/owl.carousel.min.css') }}">

  <link rel="stylesheet" href="{{ asset('front_assets/fonts/ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front_assets/fonts/fontawesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front_assets/fonts/flaticon/font/flaticon.css') }}">

  <!-- Theme Style -->
  <link rel="stylesheet" href="{{ asset('front_assets/css/style.css') }}">
  </head>
  <body>
    

    <div class="wrap">

      <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-9 social">
                <a href="{{route('login')}}">login <span class=" fa fa-sign-in"></span></a>
              </div>
              <div class="col-3 search-top">
              </div>
            </div>
          </div>
        </div>

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="/">My Blog</a></h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            
           
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Home</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
      <!-- END header -->

      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Latest Posts</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-12 main-content">
              <div class="row">
                @foreach($all_article as $val)
                <div class="col-md-6">
                  <a href="home_detail/{{$val->id}}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <div class="blog-content-body">
                      <div class="">
                        <span class=""> Myblog</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                      </div>
                      <h2>{{$val->title}}</h2>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>

            </div>
            <!-- END main-content -->


          </div>
        </div>
      </section>
    
      <footer class="site-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-6 ml-auto">
              <div class="row">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="small">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is customized with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://www.facebook.com/kamrul.hasan.1401" target="_blank" >Kamrul Hasan</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{ asset('front_assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('front_assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/jquery.stellar.min.js') }}"></script>

    
    <script src="{{ asset('front_assets/js/main.js') }}"></script>
  </body>
</html>