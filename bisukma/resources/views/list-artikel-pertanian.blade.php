<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="Be-one is a clean HTML5/CSS3 template suitable for Business, Corporate, Taxes, Broker, Ad...">
   <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Title -->
<title>Bisukma</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/favicon.ico') }}">


<!-- CSS Here -->
   <link href="{{ url('assets/css/app.css') }}" rel="stylesheet">
   <!-- MagnificPopup.css -->
   <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
   <!-- SlickNav.css -->
   <link rel="stylesheet" href="{{ url('assets/css/slicknav.min.css') }}">
   <!-- Owl.carousel.css -->
   <link rel="stylesheet" href="{{ url('assets/css/owl.carousel-2.3.4.min.css') }}">
   <!-- Fontawesome.css -->
   <link rel="stylesheet" href="{{ url('assets/css/fontawesome-free-5.12.0.min.css') }}">
   <!-- Bootstrap.css -->
   <link rel="stylesheet" href="{{ url('assets/css/bootstrap-4.3.1.min.css') }}">
   <!-- Default.css -->
   <link rel="stylesheet" href="{{ url('assets/css/default.css') }}">
   <!-- Style.css -->
   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
   <!-- Responsive.css -->
   <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">

   <!-- ColorNip.css -->
   <link rel="stylesheet" href="{{ url('assets/css/colornip.min.css') }}">
   <link id="theme" rel="stylesheet" href="{{ url('assets/css/theme-colors/theme-default.css') }}">


   <!-- Jquery -->
   <script src="{{ url('assets/js/jquery-3.4.1.min.js') }}"></script>

</head>
<body>
    <!-- Color Nip -->
    <div class="Switcher">
    <button id="Switcher__control" class="Switcher__control">
        <i class="fas fa-cogs"></i>
    </button>
    <h5 style="margin-bottom: 5px">Change Color</h5>
    <ul id="colors" data-dir="assets/css/theme-colors/">
        <li data-scheme="theme-default" data-color="#4272d7" style="background-color:#4272d7"></li>
        <li data-scheme="theme-red" data-color="#fa4251" style="background-color:#fa4251"></li>
        <li data-scheme="theme-green" data-color="#63c76a" style="background-color:#63c76a"></li>
        <li data-scheme="theme-yellow" data-color="#ffe048" style="background-color:#ffe048"></li>
        <li data-scheme="theme-orange" data-color="#f39c12" style="background-color:#f39c12"></li>
    </ul>
    </div>
    <!-- End Color Nip -->
    <div class="search-overlay"></div>
    <!-- Start Header Area -->
    <div class="header-area">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="site-logo">
							<a href="{{ url('/') }}"><img src="{{url('/img/logofull.png')}}" alt=""></a>
                            <a data-toggle="tooltip" title="Be-one" href="index.html"></a>
                        </div>
                    </div>
                    <div class="col-6 d-lg-none static text-right">
                        <div class="show-mobile-menu"></div>
                    </div>
                    <div class="col-lg-9 text-right d-none d-lg-block">
                        <nav class="menu-wrapper">
                            <ul class="main-menu" id="mobile-menu">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Bidang
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ url('listartikelpendidikan') }}">Pendidikan</a>
                                    <a class="dropdown-item" href="{{ url('listartikel') }}">Pariwisata</a>
                                    <a class="dropdown-item" href="{{ url('listartikelpertanian') }}">Pertanian</a>
                                    <a class="dropdown-item" href="{{ url('listartikelumkm') }}">UMKM</a>
                                    <a class="dropdown-item" href="{{ url('listnews') }}">Berita Lain</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tentang Kami
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ url('strukturorganisasi') }}">Struktur Organisasi</a>
                                    <a class="dropdown-item" href="{{ url('tentangkami') }}">Tentang Kami</a>
                                    <a class="dropdown-item" href="{{ url('trackrecord') }}">Track Record</a>
                                    <a class="dropdown-item" href="{{ url('visimisi') }}">Visi Misi</a>
                                    </div>
                                </li>
                                <li class="nav-item"><a href="{{ url('listwisata') }}">Wisata</a></li>
                                <li class="nav-item"><a href="{{ url('foto') }}">Galeri</a></li>
                                <li class="nav-item"><a href="#blog">Karir</a></li>
                                <li class="nav-item"><a href="{{ url('kontak') }}">Kontak Kami</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Area -->
    <!-- Start Komentar-->
    <div class="latest-project-area pt-40 pb-70" id="portfolio" style="background-color:#32A195;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-40">
                    <div class="section-title">
                    <h2 style="color:white;">PERTANIAN</h2>
                    </div>
                </div>
            </div>
            <div class="row white-bg" >
                <div class="col-lg-12" id="komen">
                    @foreach($bppup as $b)
                        <div class="row komentar">
                            <div class="col-md-3">
                                <td><img id="listgambar" src="{{url('/BPPUPS/'.$b->gambar) }}"></td>
                            </div>
                            <div class="col-md-9">
                                <h4><b>{{ $b->judul }}</b></h4>
                                <i>{{$b->created_at}}</i>
                                <p class="card-text">
                                        <?php
                                            echo (str_word_count($b->isi) > 25  ? substr($b->isi,0,300)." ..." : $b->isi);
                                        ?>
                                </p>
                                <form method="get" action="{{ url('tani')}}">
                                    <input type="text" name="id" hidden value="{{$b->id}}">
                                    <input type="submit" class="btn btn-primary" value="Baca selanjutnya..."/>
                                </form>
                            </div>
                        </div>
                        <hr>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <!-- End Komentar-->
    <!-- Start Brands Area -->
    <div class="brand-area gray-bg pt-70 pb-70">
        <div class="container">
            <div class="brand-carousel owl-carousel">
                <div class="brand-item">
                    <div class="brand-item-inner">
                        <a href="#"><img src="assets/img/brands/1.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-item">
                    <div class="brand-item-inner">
                        <a href="#"><img src="assets/img/brands/2.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-item">
                    <div class="brand-item-inner">
                        <a href="#"><img src="assets/img/brands/3.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-item">
                    <div class="brand-item-inner">
                        <a href="#"><img src="assets/img/brands/4.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-item">
                    <div class="brand-item-inner">
                        <a href="#"><img src="assets/img/brands/5.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-item">
                    <div class="brand-item-inner">
                        <a href="#"><img src="assets/img/brands/6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brands Area -->
    <!-- Start Footer Area -->
    <footer class="footer-area pt-60 pb-60 black-bg" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html">BISUKMA </a>
                        </div>
                        <div class="footer-dec text-center">
                            <p class="text-center">Jl. H. M Joni No. 50 L, Teladan Timur, Medan Area, Teladan Tim., Kec. Medan Kota, Kota Medan, Sumatera Utara 20216</p>
                            <p class="text-center">Telepon: (0626) 17332777</p>
                        </div>
                        <ul class="social-links">
                            <li><a href="https://www.facebook.com/Yayasan-Bisukma-101984692036590/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/bisukma.foundation/?hl=id" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=6281276126212&fbclid=IwAR3SgOthq8B6uq6ATRiVlFDNDzmm3UV8s2RmVMUJA16bMdAvsA7SaGZExv4" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

<!-- JS -->
   <!-- Popper.js -->
   <script src="assets/js/popper.min.js"></script>
   <!-- Bootstrap.js -->
   <script src="assets/js/bootstrap-4.3.1.min.js"></script>
   <!-- Modernizr.js -->
   <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
   <!-- Owl.Carousel.js -->
   <script src="assets/js/vendor/owl.carousel-2.3.4.min.js"></script>
   <script src="assets/js/vendor/owl.carousel2.thumbs.min.js"></script>
   <!-- Waypoints.js -->
   <script src="assets/js/vendor/waypoints-4.0.1.min.js"></script>
   <!-- ColorNip.js -->
   <script src="assets/js/vendor/colornip.min.js"></script>
   <!-- SlickNav.js -->
   <script src="assets/js/vendor/slicknav.min.js"></script>
   <!-- ScrollUp.js -->
   <script src="assets/js/vendor/jquery.scrollUp.min.js"></script>
   <!-- MagnificPopup.js -->
   <script src="assets/js/vendor/magnific-popup.min.js"></script>

   <!-- Main.js -->
   <script src="assets/js/main.js"></script>
</body>
</html>
