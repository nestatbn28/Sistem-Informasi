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
   <!-- Start We are Bemax Area -->
   <div class="bemax-area gray-bg pt-65 pb-25">
        <div class="container">
            <div class="card row shadow p-3 mb-5 bg-white rounded">
                <div class="col-lg-12 text-center mb-20 mt-10">
                    <div class="col-lg-12">
                       <u><h4>VISI</h4></u>
                    </div>
                    <div class="col-lg-12">
                        <h6 style="color:gray;">Pada tahum 2035 menjadi yayasan sosial yang memiliki keunggulan dan kepercayaan tinggi dari masyarakat Indonesia, dalam upaya membangun masyarakat unggul melalui  kegiatan sosial, kemanusiaan dan penyelenggaran pendidikan secara inovatif, responsif, adaptip dan berkarakter yang mampu menjawab kebutuhan masyarakat dan perubahan zaman dalam lingkup nasional dan internasional</h6>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-lg-12 text-center mb-20 mt-10">
                   <u><h4>MISI</h4></u>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                           <a href="#"> <i class="fas fa-book"></i></a>
                        </div>
                        <div class="item-content">
                            <p>Menyelenggarakan pendidikan lewat pendidikan formal dan nonformal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fa fa-users"></i></a>
                        </div>
                        <div class="item-content">
                            <p>Mengembangkan kemampuan leadership dan Manajerial kepala sekolah dan guru berbasis kompetensi serta pemimpin komunitas lain.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-graduation-cap"></i></a>
                        </div>
                        <div class="item-content">
                            <p>Mengembangkan pembelajaran yang kreatif, inovatif dan menyenangkan lewat kegiatan diklat, workshop dan pendampingan dengan pemanfaatan teknologi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-hospital"></i></a>
                        </div>
                        <div class="item-content">
                            <p>Menyelenggarakan kegiatan kemanusiaan pada masyarakat seperti, korban bencana, pengungsi, kaum disabilitas, lewat tenaga relawan dan penyaluran sumbangan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-tree"></i></a>
                        </div>
                        <div class="item-content">
                            <p>Mengembangkan gagasan baru untuk memecahkan masalah pelestarian lingkungan hidup sehat lewat penelitian (Join Research) sehingga  mampu beradaptasi dan mengantisipasi dampak perubahan globalisasi lingkungan hidup.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-comments"></i></a>
                        </div>
                        <div class="item-content">
                            <p>Melaksanakan kegiatan pengabdian dan memberdayakan  masyarakat dalam memecahkan masalah-masalah sosial ekonomi, sosial, budaya dan agama</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fa fa-handshake"></i></a>
                        </div>
                        <div class="item-content">
                            <p>Menjalin komunikasi dan kerjasama kemitraan antar lembaga/yayasan sosial, pelaku usaha, media, pemerintah daerah maupun pusat, akademisi, tokoh masyarakat, organisasi masyarakat lain guna mewujudkan Visi dan Misi</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Why Choose Us Area -->
            <div class="choose-us-area pt-20 pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb-20">
                            <div class="section-title">
                                <h4>Tujuan, Nilai dan Program Kerja</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="section-title">
                                <center><h4>Tujuan</h4></center>
                            </div>
                            <div class="single-choose-item">
                                <p>Mendirikan, menyelenggarakan dan mengelola lembaga pendidikan formal dan nonformal bagi masyarakat umum.</p>
                            </div>
                            <div class="single-choose-item">
                                <p>Menghasilkan lulusan yang memiliki kemampuan akademik dan keterampilan dalam implementasi keilmuannya ditengah-tengah masyarakat luas.</p>
                            </div>
                            <div class="single-choose-item">
                                <p>Memberikan pelayanan bagi kepala sekolah dan guru dan komunitas lain  untuk mengembangkan kemampuan leadership dan manajerial yang berbasis kompetensi.</p>
                            </div>
                            <div class="single-choose-item">
                                <p>Memberikan pendampingan dan pelayanan melalui diklat dan workshope bagi guru untuk mengembangkan pembelajaran yang kreatif, inovatif dan menyenangkan.</p>
                            </div>
                            <div class="single-choose-item">
                                <p>Memberikan pelayanan dalam bidang pengajaran, karakter unggul, numerasi dan literas pendidikan bagi guru, siswa dan masyarakat.</p>
                            </div>
                            <div class="single-choose-item">
                                <p>Melaksanakan kegiatan pengabdian dan pemberdayaan  masyarakat dalam menangani masalah-masalah bidang kemanusiaan seperti bencana alam, pengungsi, tunasiswa, ekonomi, perlindungan konsumen dan pelestarian lingkungan.</p>
                            </div>
                            <div class="single-choose-item">
                                <p>Menghasilkan gagasan baru untuk memecahkan  masalah pelestarian lingkungan hidup sehat melalui riset (joint research) sehingga mampu beradaptasi dan mengantisipasi dampak perubahan globalisasi lingkungan hidup</p>
                            </div>
                            <div class="single-choose-item">
                                <p>Menyediakan dan atau Menyalurkan sumbangan bagi korban bencana, pengungsi, kaum disabilitas, lewat tenaga relawan</p>
                            </div>
                            <div class="single-choose-item">
                                <p>Terselenggaranya pengelola layanan kesehatan melalui, pendirian rumah sakit, klinik, poliklinik, laboratorium dan terapi kesehatan.</p>
                            </div>
                            <div class="single-choose-item">
                                <p>Terselenggaranya pengelola layanan keagamaan melalui pemberian sarana ibadah, kegiatan sekolah minggu, melakukan seminar, simposium, diskusi khotbah, wisata religi, studi banding keagamaan.</p>
                            </div>
                            <div class="single-choose-item">
                                <p>Melaksanakan kegiatan pengabdian kepada masyarakat dalam memecahkan masalah-masalah ekonomi, sosial budaya dan agama.</p>
                            </div>
                            <div class="single-choose-item">
                                <p>Menghasilkan pemikiran-pemikiran dalam bidang pemberdayaan dan pelestarian lingkungan hidup, yang  dapat  digunakan  sebagai  upaya peningkatkan mutu Sumber Daya Alam.</p>
                            </div>
                            <div class="single-choose-item">
                                <p>Terjalin komunikasi dan kerjasama kemitraan antar akademisi, lembaga/yayasan sosial, pemerintah daerah maupun pusat, tokoh masyarakat, organisasi masyarakat lain yang satu visi.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="">
                                <div class="section-title">
                                    <center><h4>Nilai</h4></center>
                                </div>
                                <div class="single-choose-item">
                                    <p>
                                    Kami mempunyai tata kelola yang dapat menjamin terwujudnya visi dan terlaksananya misi serta tercapainya tujuan program yayasan. Terwujudnya visi terlaksananya misi dan tercapai tujuan yayasan karena menggunakan strategi enam pilar (pentahelix) tata kelola yaitu: partisipasif; kredibilitas; kesetaraan; keadilan; transparansi dan akuntabilitas.
                                    <br><br>1. Partisipatif: Yayasan Bisukma Bangun Bangsa peduli dengan tekad dan pelibatan diri untuk mendidik, mendorong, memfasilitasi peningkatan sumber daya manusia demi peningkatan kesejahteraan yang layak dan kehidupan sosial yang bermartabat.
                                    <br><br>2. Kredibilitas: Yayasan Bisukma Bangun Bangsa diwujudkan dalam rekrutmen SDM yang diseleksi dan dikembangkan untuk memenuhi standar kualitas SDM yang meliputi kompetensi dan integritas personal sehingga mampu menjalankan program kerja yayasan.
                                    <br><br>3. Kesetaraan: Yayasan Bisukma Bangun  Bangsa selalu membuka diri untuk berkolaborasi terhadap pemerintah pusat/daerah, organisasi, yayasan, lembaga swadaya masyarakat dan komunitas lain yang memiliki visi yang sama dengan memposisikannya sebagai rekan kerja/partner yang setara.
                                    <br><br>4. Keadilan: Pelaksanaannya dilakukan dengan profesional, proposional, obyektif dan tanpa diskriminasi
                                    <br><br>5. Transparansi: Yayasan Bisukma Bangun  Bangsa telah menerapkan prinsip transparansi dalam pelayanan publik yang merupakan pelaksanaan tugas dan kegiatan bersifat terbuka bagi masyarakat. Hal ini
                                    utamanya meliputi  manajemen dan penyelenggaraan pelayanan publik prosedur pelayanan persyaratan teknis dan administrasi layanan rincian biaya layanan serta waktu penyelesaian layanan.
                                    <br><br>6. Akuntabilitas: Yayasan Bisukma Bangun Bangsa selalu mengedepankan pertanggung jawaban mulai dari perencanaan yang matang, pengelolaan sumberdaya yang efektif serta pelaksanaan kebijakan yang disertai pelaporan secara periodik dan terbuka.
                                    </p>
                                <hr>
                                <div class="section-title">
                                    <center><h4>PROGRAM KERJA</h4></center>
                                </div>
                                <div class="single-choose-item">
                                    <p>
                                    Program kerja disusun berdasarkan misi yang sudah ditetapkan oleh Organisasi yayasan.  Program kerja dibagi menjadi  tiga tahapan dalam pelaksanaannya yaitu program jangka pendek, menengah dan jangka Panjang, namun setiap program  disusun sedemikian rupa agar tetap terintegrasi dan link dan match dengan visi dan misi organisasi.  Jenis program dalam horizon waktu umumnya dibedakan skala dan besaran  karena mempertimbangkan keterbatasan sumber daya. Program yang akan dilakukan meliputi:
                                    <br><br>    1.	Melaksanakan Pendidikan formal dan informal dengan materi sesuai dengan perkembangan jaman serta pemilihan metode belajar yang efektif dengan pemanfaatan teknologi. Penetapan starata sekolah dan daerah yang disasar setelah melalui evaluasi dan iterasi guna efektifitas pelaksanaan.
                                    <br><br>    2.	Melaksanakan pelatihan dan praktek kepemimpinan dan managerial para kepala sekolah dan guru yang berbasis kompetensi.   Bersinergi dengan praktisi dan penggunaan berbagai media dan tools menjadi salah satu cara  yang dapat merubah kebiasaan lama menuju kebiasaan baru.
                                    <br><br>    3.	Melaksanakan system pembelajaran yang kreatif dan inovatif melalui  kegiatan yang terjadwal setiap bulan meliputi  pelatihan, workshop, pendampingan, Forum Grup Discussion ( FGD), Benchmark dll.
                                    <br><br>    4.	Melaksanaan kegiatan kemanusiaan melalui program yang direncanakan per triwulan maupun berbasis  kejadian seperti:  penanganan korban bencana alam, kaum disabilitas,  kunjungan ke panti asuhan melalui tenaga relawan maupun penyaluran sumbangan.
                                    <br><br>    5.	Melakukan kerjasama dengan berbagai pihak untuk memecahkan masalah pelestarian lingkungan hidup melalui penelitian bersama dalam upaya mengantisipasi dampak perubahan globalisasi.
                                    <br><br>    6.	Melaksanakan kegiatan pengabdian dan pemberdayaan masyarakat untuk memecahkan masalah sosial, budaya dan ekonomi. Misalnya masalah kebersihan, pelestarian budaya, membuat percontohan pertanian/perikanan/peternakan dan lainnya.
                                    <br><br>    7.	Merealisasikan kerjasama kemitraan dengan berbagai pihak ataupun komunitas dalam upaya mewujudkan visi dan misi dengan prinsip memberikan value yang lebih baik kepada stakeholder. Kerjasama yang mungkin dilakukan adalah dengan elemen: pemerintah, komunitas masyarakat, akademisi, pelaku usaha maupun mas media.

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Why Choose Us Area -->
        </div>
    </div>
    <!-- End We are Bemax Area -->

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
