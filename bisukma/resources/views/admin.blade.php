<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin BISUKMA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ url('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
</head>
<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin BISUKMA</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                    <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Dashboard
                    </button>
                   <a href="logout">Logout</a>    
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                    <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Artikel
                    </button>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                    <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Event
                    </button>
            </li>
            <li class="nav-item">
                    <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Makanan & Hotel
                    </button>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                    <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Galeri
                    </button>
            </li>
            <li class="nav-item">
                <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Tempat Pariwisata
                </button>
            </li>
            <li class="nav-item">
                <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Saran & Masukan
                </button>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->

                    <div class="row">
                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                        Visitor Views</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">82</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="container">



                                        </div>

                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">

                                            </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="container">
                                                <center><h3>Berita dan Artikel</h3></center>
                                                    <table id="Penjagasite" class="table bootstrap-datatable countries">
                                                        <thead>
                                                        <tr>
                                                            <th>Kategori</th>
                                                            <th>Judul</th>
                                                            <th>Gambar</th>
                                                            <th>Isi</th>
                                                            <th>Link YT</th>
                                                            <th>Link GF</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($bppup as $b)
                                                        <tr>

                                                            <td>{{ $b->kategori }}</td>
                                                            <td>{{ $b->judul }}</td>
                                                            <td><img style="max-width:50%;" src="{{url('/BPPUPS/'.$b->gambar) }}"></td>
                                                            <td><?php
                                                                echo (str_word_count($b->isi) > 15  ? substr($b->isi,0,30)." ..." : $b->isi);
                                                                ?>
                                                            </td>
                                                            <td>{{ $b->linkyt }}</td>
                                                            <td>{{ $b->googleform }}</td>
                                                            <td> <a href='{{ url('admins/bppup/delete/'.$b->id) }}'>Delete</a>  |||  <a href='{{ url('bppup/edit/'.$b->id) }}'>Edit</a></td>

                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    <form action="/admins/bppup/proses" method="post" enctype="multipart/form-data">
		                                            {{ csrf_field() }}
                                                    <center><h3>Berita dan Artikel</h3></center>
                                                    <div class="form-group">
                                                        <label for="exampleInputKategori">Kategori</label><br>
                                                        <select name="kategori"class="form-select" aria-label="Default select example">
                                                            <option >Open this select menu</option>
                                                            <option value="Pertanian">Pertanian</option>
                                                            <option value="Pendidikan">Pendidikan</option>
                                                            <option value="Pariwisata">Pariwisata</option>
                                                            <option value="UMKM">UMKM</option>
                                                            <option value="Berita">Berita Lain</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputJudul">Judul</label>
                                                        <input name="judul" type="text" class="form-control" id="exampleInputText" placeholder="Judul">
                                                    </div class="form-group">
                                                    <div>
                                                        <label for="exampleFormGambar">Gambar</label>
                                                        <input name="gambar" type="file" class="form-control-file" id="exampleFormGambar">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlIsi">Isi</label>
                                                        <textarea name="isi" class="form-control" id="exampleFormControlIsi"></textarea>
                                                        <script>
                                                                CKEDITOR.replace( 'isi' );
                                                        </script>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputLinkYt">Link You Tube</label>
                                                        <input name="linkyt" type="text" class="form-control" id="exampleInputLinkYt" placeholder="Link Youtube">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputLinkGf">Link Google Form</label>
                                                        <input name="googleform" type="text" class="form-control" id="exampleInputGf" placeholder="Link Google Form">
                                                    </div>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">

                                            </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="container">
                                                <center><h3>Event</h3></center>
                                                <table id="Penjagasite" class="table bootstrap-datatable countries">
                                                    <thead>
                                                    <tr>
                                                        <th>Nama Event</th>
                                                        <th>Kategori</th>
                                                        <th>Link Google Form</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($event as $e)
                                                    <tr>
                                                        <td>{{ $e->nama }}</td>
                                                        <td>{{ $e->kategori }}</td>
                                                        <td>{{ $e->googleform }}</td>
                                                        <td> <a href='{{ url('admins/event/delete/'.$e->id) }}'>Delete</a>   |||   <a href='{{ url('event/edit/'.$e->id) }}'>Edit</a></td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                    <form method="POST" action="/admins/event/proses">
                                                        {{ csrf_field() }}
                                                    <center><h3>Event</h3></center>
                                                    <div class="form-group">
                                                        <label for="exampleInputEvent">Nama Event</label>
                                                        <input type="text" name="nama" class="form-control" id="exampleInputEvent" aria-describedby="eventlHelp" placeholder="Masukkan Nama Event">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputLinkGf">Kategori</label><br>
                                                        <select name="kategori" class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="Pertanian">Pertanian</option>
                                                            <option value="Pendidikan">Pendidikan</option>
                                                            <option value="Pariwisata">Pariwisata</option>
                                                            <option value="UMKM">UMKM</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputLinkGf">Link Google Form</label>
                                                        <input type="text" name="googleform" class="form-control" id="exampleInputGf" placeholder="Link Google Form">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                            <h2 class="mb-0">

                                            </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                            <div class="container">
                                                <center><h3>Galeri</h3></center>
                                                <table id="Penjagasite" class="table bootstrap-datatable countries">
                                                    <thead>

                                                    <tr>
                                                        <th>Gambar</th>
                                                        <th>Deskripsi</th>
                                                        <th>Kategori</th>
                                                        <th>Aksi</th>
                                                    </tr>

                                                    </thead>
                                                    <tbody>
                                                    @foreach($galeri as $g)
                                                    <tr>
                                                        <td><img src="{{url('/Galeri/'.$g->gambar) }}" style="width:30%;"></td>
                                                        <td>{{ $g->deskripsi }}</td>
                                                        <td>{{ $g->kategori }}</td>
                                                        <td> <a href='{{ url('admins/galeri/delete/'.$g->id) }}'>Delete</a>   |||   <a href='{{ url('galeri/edit/'.$g->id) }}'>Edit</a></td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                    <form method="POST" action="/admins/galeri/proses" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                    <center><h3>Galeri</h3></center>
                                                    <div>
                                                        <label for="exampleFormGambar">Gambar</label>
                                                        <input type="file" class="form-control-file" id="exampleFormGambar" name="gambar">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlIsi">Deskripsi</label>
                                                        <textarea class="form-control" name="deskripsi" id="exampleFormControlGambar" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputLinkGf">Kategori</label><br>
                                                        <select name="kategori" class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="Pertanian">Pertanian</option>
                                                            <option value="Pendidikan">Pendidikan</option>
                                                            <option value="Pariwisata">Pariwisata</option>
                                                            <option value="UMKM">UMKM</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFive">
                                            <h2 class="mb-0">

                                            </h2>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                            <div class="container">
                                                <center><h3>Penginapan & T.Makan</h3></center>
                                                <table id="Penjagasite" class="table bootstrap-datatable countries">
                                                    <thead>

                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Gambar</th>
                                                        <th>Deskripsi</th>
                                                        <th>Lokasi</th>
                                                        <th>Kategori</th>
                                                    </tr>

                                                    </thead>
                                                    <tbody>
                                                    @foreach($mathol as $m)
                                                    <tr>
                                                        <td>{{ $m->nama }}</td>
                                                        <td><img style="max-width:30%;" src="{{url('/MatHol/'.$m->gambar) }}"</td>
                                                        <td>{{ $m->deskripsi }}</td>
                                                        <td>{{ $m->lokasi }}</td>
                                                        <td>{{ $m->kategori }}</td>
                                                        <td> <a href='{{ url('admins/mathol/delete/'.$m->id) }}'>Delete</a>   |||   <a href='{{ url('mathol/edit/'.$m->id) }}'>Edit</a></td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <form method="POST" action="/admins/mathol/proses" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <center><h3>Penginapan & T.Makan</h3></center>
                                                    <div class="form-group">
                                                        <label for="exampleInputKategori">Kategori</label><br>
                                                        <select class="form-select" aria-label="Default select example" name="kategori">
                                                            <option >Open this select menu</option>
                                                            <option value="Hotel">Penginapan</option>
                                                            <option value="Tempat Makan">Tempat Makan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputJudul">Nama</label>
                                                        <input type="text" class="form-control" name="nama" id="exampleInputText" placeholder="Judul">
                                                    </div class="form-group">
                                                    <div>
                                                        <label for="exampleFormGambar">Gambar</label>
                                                        <input type="file" name="gambar" class="form-control-file" id="exampleFormGambar">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlIsi">Deskripsi</label>
                                                        <textarea class="form-control" name="deskripsi" id="exampleFormControlIsi" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputLinkYt">Lokasi</label>
                                                        <input type="text" class="form-control" id="exampleInputLinkYt" placeholder="Lokasi" name="lokasi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputLinkGf">Pariwisata</label><br>
                                                        <select name="pariwisata_id" class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            @foreach($pariwisata as $p)
                                                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFive">
                                            <h2 class="mb-0">

                                            </h2>
                                            </div>
                                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                            <div class="container">
                                                <center><h3>Pariwisata</h3></center>
                                                <table id="Penjagasite" class="table bootstrap-datatable countries">
                                                    <thead>

                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Deskripsi</th>
                                                        <th>Gambar</th>
                                                        <th>Link YT</th>
                                                    </tr>

                                                    </thead>
                                                    <tbody>
                                                    @foreach($pariwisata as $p)
                                                    <tr>
                                                        <td>{{ $p->nama }}</td>
                                                        <td>
                                                            <?php
                                                                echo (str_word_count($p->deskripsi) > 15  ? substr($p->deskripsi,0,30)." ..." : $p->deskripsi);
                                                            ?>
                                                        </td>
                                                        <td><img src="{{url('/Pariwisata/'.$p->gambar) }}" style="width:40%;"></td>
                                                        <td>{{ $p->linkyt }}</td>
                                                        <td> <a href='{{ url('admins/pariwisata/delete/'.$p->id) }}'>Delete</a>   |||   <a href='{{ url('pariwisata/edit/'.$p->id) }}'>Edit</a></td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <form method="post" action="/admins/pariwisata/proses" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <center><h3>Pariwisata</h3></center>
                                                    <div class="form-group">
                                                        <label for="exampleInputJudul">Nama</label>
                                                        <input type="text" class="form-control"  name="nama" id="exampleInputText" placeholder="Judul" required>
                                                    </div class="form-group">
                                                    <div>
                                                        <label for="exampleFormGambar">Gambar</label>
                                                        <input type="file" class="form-control-file" id="exampleFormGambar" name="gambar" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlIsi">Deskripsi</label>
                                                        <textarea class="form-control" id="exampleFormControlIsi" name="deskripsii" rows="3" required></textarea>
                                                        <script>
                                                                CKEDITOR.replace( 'deskripsii' );
                                                        </script>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputLinkYt">Link Youtube</label>
                                                        <input type="text" name="linkyt" class="form-control" id="exampleInputLinkYt" placeholder="Link Youtube" required>
                                                    </div>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFive">
                                            <h2 class="mb-0">

                                            </h2>
                                            </div>
                                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                            <div class="container">
                                                <center><h3>Saran & Masukan</h3></center>
                                                <table id="Penjagasite" class="table bootstrap-datatable countries">
                                                    <thead>

                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Nohp</th>
                                                        <th>Isi</th>
                                                        <th>Aksi</th>
                                                    </tr>

                                                    </thead>
                                                    <tbody>
                                                    @foreach($masukan as $ma)
                                                    <tr>
                                                        <td>{{ $ma->nama }}</td>
                                                        <td>{{ $ma->nohp }}</td>
                                                        <td>{{ $ma->isi }}</td>
                                                        <td> <a href='{{ url('admins/masukan/delete/'.$ma->id) }}'>Delete</a></td>
                                                        
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>
