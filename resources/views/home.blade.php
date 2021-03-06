<!doctype html>
<html lang="en">
<head>
    <title>Sawit Mitra Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">


    <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticons/font/flaticon.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">SAMO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
                <!--
                <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                  <li class="nav-item">
                    <a class="nav-link active" href="index.html">HomeController</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="recipes.html">Recipes</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                      <a class="dropdown-item" href="services.html">Catering</a>
                      <a class="dropdown-item" href="services.html">Birthday Party</a>
                      <a class="dropdown-item" href="services.html">Wedding Party</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="news.html">News</a>
                  </li>
                </ul>
                -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item cta-btn">
                        <a class="nav-link" href="{{url('/login')}}">Login</a>
                    </li>
                    <li>&nbsp;</li>
                    <li class="nav-item cta-btn">
                        <a class="nav-link" href="{{url('/registration')}}">Daftar</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
</header>
<!-- END header -->

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('img/hero_1.jpg');">

        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate">
                    @if ($message = Session::get('success'))
                        <h1>{{$message}}</h1>
                        <p class="mb-5">Silahkan login untuk memulai transaksi anda melalui SAMO.</p>
                    @else
                        <h1>Maksimalkan Keuntungan</h1>
                        <p class="mb-5">Raih keuntungan melalui SAMO. Kami menawarkan teknologi sebagai partner anda dalam memperoleh keuntungan dan sukses.</p>
                    @endif


                </div>
            </div>
        </div>

    </div>

    <div class="slider-item" style="background-image: url('img/hero_2.jpg');">
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate">
                    <h1>Kemudahan Transaksi</h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
                    <!--<p><a href="#" class="btn btn-white btn-outline-white">Daftar Sekarang</a></p>-->
                </div>
            </div>
        </div>

    </div>

</section>
<!-- END slider -->


<section class="section bg-light element-animate">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
                <span class="flaticon-cheers display-4 text-black d-block mb-4"></span>
                <h4 class="mb-4 text-primary">Online</h4>
                <p>Sistem online, dapat dijangkau kapanpun dan dimanapun.</p>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
                <span class="flaticon-fish display-4 text-black d-block mb-4"></span>
                <h4 class="mb-4 text-primary">Kerjasama</h4>
                <p>Lebih dari 30 PKS telah bergabung untuk kerjasama.</p>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
                <span class="flaticon-coffee-cup display-4 text-black d-block mb-4"></span>
                <h4 class="mb-4 text-primary">Distribusi</h4>
                <p>Telah mendistribusikan 1.400.000 Ton sawit.</p>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
                <span class="flaticon-salad display-4 text-black d-block mb-4"></span>
                <h4 class="mb-4 text-primary">Mitra</h4>
                <p>Lebih dari 100 Mitra Tani telah bergabung bersama SAMO.</p>
            </div>
        </div>
    </div>
</section>

<!--
<section class="section element-animate">

  <div class="clearfix mb-5 pb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center heading-wrap">
          <h2>Special Dishes</h2>
          <span class="back-text">Dishes</span>
        </div>
      </div>
    </div>
  </div>


  <div class="owl-carousel centernonloop">
    <a href="#" class="item-dishes">
      <div class="text">
        <p class="dishes-price">$11.50</p>
        <h2 class="dishes-heading">Organic tomato salad, gorgonzola cheese, capers</h2>
      </div>
      <img src="img/dishes_1.jpg" alt="" class="img-fluid">
    </a>
    <a href="#" class="item-dishes">
      <div class="text">
        <p class="dishes-price">$12.00</p>
        <h2 class="dishes-heading">Baked broccoli</h2>
      </div>
      <img src="img/dishes_2.jpg" alt="" class="img-fluid">
    </a>
    <a href="#" class="item-dishes">
      <div class="text">
        <p class="dishes-price">$11.00</p>
        <h2 class="dishes-heading">Spicy meatballs</h2>
      </div>
      <img src="img/dishes_3.jpg" alt="" class="img-fluid">
    </a>
    <a href="#" class="item-dishes">
      <div class="text">
        <p class="dishes-price">$12.00</p>
        <h2 class="dishes-heading">Eggplant parmigiana</h2>
      </div>
      <img src="img/dishes_4.jpg" alt="" class="img-fluid">
    </a>
  </div>
</section>  -->

<section class="section bg-light element-animate">

    <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center heading-wrap">
                    <h2>Apa yang anda dapatkan ?</h2>
                    <span class="back-text-dark">JOIN</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row no-gutters">
            <div class="col-md-6">
                <div class="sched d-block d-lg-flex">
                    <div class="bg-image order-2" style="background-image: url('img/eye-care.png');background-color: beige;"></div>
                    <div class="text order-1">
                        <h3>Transparansi</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                        <p class="text-primary h3">$12.00</p>
                    </div>

                </div>

                <div class="sched d-block d-lg-flex">
                    <div class="bg-image" style="background-image: url('img/secure.png');background-color: beige;"></div>
                    <div class="text">
                        <h3>Aman dan Terpercaya</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                        <p class="text-primary h3">$12.00</p>

                    </div>

                </div>

            </div>

            <div class="col-md-6">
                <div class="sched d-block d-lg-flex">
                    <div class="bg-image order-2" style="background-image: url('img/system.png');background-color: beige;"></div>
                    <div class="text order-1">
                        <h3>Keberlanjutan</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                        <p class="text-primary h3">$18.00</p>

                    </div>

                </div>

                <div class="sched d-block d-lg-flex">
                    <div class="bg-image" style="background-image: url('img/newspaper.png');background-color: beige;"></div>
                    <div class="text">
                        <h3>Informasi Terbaru</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                        <p class="text-primary h3">$16.00</p>

                    </div>

                </div>

            </div>
        </div>


    </div>
</section> <!-- .section -->



<section class="section element-animate">

    <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center heading-wrap">
                    <span class="back-text">Testimoni</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <blockquote class="testimonial">
                    <p>&ldquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, obcaecati? Quis eum minus, sequi atque quisquam ducimus aliquam veritatis nobis cum iusto neque enim explicabo maxime natus doloribus, fuga sunt. &rdquo;</p>
                    <div class="d-flex author">
                        <img src="img/person_1.jpg" alt="" class="mr-4">
                        <div class="author-info">
                            <h4>Mellisa Howard</h4>
                            <p>CEO, PKS Terantam</p>
                        </div>
                    </div>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="testimonial">
                    <p>&ldquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, obcaecati? Quis eum minus, sequi atque quisquam ducimus aliquam veritatis nobis cum iusto neque enim explicabo maxime natus doloribus, fuga sunt. &rdquo;</p>
                    <div class="d-flex author">
                        <img src="img/person_2.jpg" alt="" class="mr-4">
                        <div class="author-info">
                            <h4>Mike Richardson</h4>
                            <p>Mitra Tani, Kebun Tapung</p>
                        </div>
                    </div>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="testimonial">
                    <p>&ldquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, obcaecati? Quis eum minus, sequi atque quisquam ducimus aliquam veritatis nobis cum iusto neque enim explicabo maxime natus doloribus, fuga sunt. &rdquo;</p>
                    <div class="d-flex author">
                        <img src="img/person_3.jpg" alt="" class="mr-4">
                        <div class="author-info">
                            <h4>Charles White</h4>
                            <p>Mitra Tani, Kebun Rokan</p>
                        </div>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
</section> <!-- .section -->

<!--
<section class="section element-animate">
  <div class="clearfix mb-5 pb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center heading-wrap">
          <h2>Blog</h2>
          <span class="back-text">Our Blog</span>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="blog d-block d-lg-flex">
          <div class="bg-image" style="background-image: url('img/dishes_1.jpg');"></div>
          <div class="text">
            <h3>How to cook beef steak with sauce</h3>
            <p class="sched-time">
              <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>

            <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>

          </div>

        </div>
      </div>
      <div class="col-md-6">
        <div class="blog d-block d-lg-flex">
          <div class="bg-image" style="background-image: url('img/dishes_2.jpg');"></div>
          <div class="text">
            <h3>How to cook beef steak with sauce</h3>
            <p class="sched-time">
              <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>

            <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>

          </div>

        </div>
      </div>
    </div>
  </div>

</section>  -->


<!--
<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <div class="row">
          <div class="col-md-12">
            <h3>Subsribe Newsletter</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ex temporibus magni ipsam inventore dolorum sunt, amet vel.</p>
          </div>

          <form action="" class="col-12">
            <div class="row align-items-center">
            <div class="col-md-8 mb-3 mb-md-0">
              <input type="text" class="form-control" placeholder="Enter Email Address">
            </div>
            <div class="col-md-4">
              <input type="submit" class="btn btn-primary btn-block" value="Subscribe">
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
-->

<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 mb-5">
                <h3>Tentang Kami</h3>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
                <!--
                <ul class="list-unstyled footer-link d-flex footer-social">
                  <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                  <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                  <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                </ul>
                -->
            </div>
            <div class="col-md-5 mb-5">
                <!--
                <div class="mb-5">
                  <h3>Opening Hours</h3>
                  <p><strong class="d-block">Sunday-Thursday</strong> 5AM - 10PM</p>
                </div>
                -->
                <div>
                    <h3>Hubungi Kami</h3>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block">
                            <span class="d-block">Address:</span>
                            <span class="text-white">Jl. Bangkinang, Simpang Ujung, Kab. Kampar, Riau</span></li>
                        <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">+62 751 889562</span></li>
                        <li class="d-block"><span class="d-block">Email:</span><span class="text-white">support@samo.com</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <h3>Quick Links</h3>
                <ul class="list-unstyled footer-link">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Disclaimers</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3">

            </div>
        </div>
        <div class="row">
            <div class="col-12 text-md-center text-left">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> SAMO | Thanks to <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>

<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/magnific-popup-options.js')}}"></script>


<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
