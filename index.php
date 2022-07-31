<?php
session_start();
include 'konek.php';
$level = "pemohon";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Job Agency Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="coba/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="coba/assets/css/fontawesome.css">
    <link rel="stylesheet" href="coba/assets/css/style.css">
    <link rel="stylesheet" href="coba/assets/css/owl.css">
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">

                </div>
                <div class="col-md-4">
                    <ul class="right-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <a class="navbar-brand" href="index.php"><img src="main/img/1.png" width="50" height="54" alt="logo"></a>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Beranda
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pegawai.php">Pegawai</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">

            <!-- Item -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>PELAYANAN PENCATATAN PERKAWINAN</h6>
                        <h4>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL KOTA BANJARBARU</h4>
                        <p>KLIK LOGIN</p>
                        <a href="login.php" class="filled-button">Masuk</a>
                        <a href="register.php" class="filled-button">Daftar</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->

        </div>
    </div>
    <!-- Banner Ends Here -->




    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>PROSEDUR <em>PERMOHONAN PENCATATAN PERKAWINAN</em></h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-testimonials owl-carousel">

                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>Syarat-Syarat Pencatatan Akta Perkawinan</h4>
                                <span>
                                    <p> • Fotocopy Surat Nikah dari Pemuka Agama <br>
                                        • Fotocopy E-KTP Mempelai Pria <br>
                                        • Fotocopy E-KTP Mempelai Wanita <br>
                                        • Akta Kelahiran Mempelai Pria <br>
                                        • Akta Kelahiran Mempelai Wanita <br>
                                        • Kartu Keluarga Mempelai Pria <br>
                                        • Kartu Keluarga Mempelai Wanita<br>
                                    </p>
                                </span>

                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>

                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>Login</h4>

                                <p>Pemohon Pencatatan Perkawinan melakukan login, melalui halaman Login.</p>
                                <br>
                                <h4>Mengajukan Permohonan Pencatatan Akta Perkawinan</h4>

                                <p>Setelah input data pemohon dengan lengkap dan benar, Pemohon memilih Menu Pencatatan Akta Perkawinan serta melengkapi data request, Kemudian Dikirim dan Menunggu persetujuan.</p>
                                <br>
                                <h4>Permohonan Disetujui</h4>

                                <p>Permohonan di setujui, kemudian staf akan mencetak Akta Perkawinan sesuai yang diajukan, pemohon dapat mengunduh Akta Perkawinan.</p>
                                <br>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>


                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>David Wood</h4>
                                <span>Chief Accountant</span>
                                <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>

                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>Andrew Boom</h4>
                                <span>Marketing Head</span>
                                <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Starts Here -->


    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="coba/vendor/jquery/jquery.min.js"></script>
    <script src="coba/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="coba/assets/js/custom.js"></script>
    <script src="coba/assets/js/owl.js"></script>
    <script src="coba/assets/js/slick.js"></script>
    <script src="coba/assets/js/accordions.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

</body>

</html>