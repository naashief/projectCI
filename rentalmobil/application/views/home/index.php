<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rental Mobil - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url('assets/img/carr.png')?>">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url('assets/lib/animate/animate.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-blue" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-blue me-2"></small>
                    <small>Jl. Djuanda, Depok, Indonesia</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-blue me-2"></small>
                    <small>Senin - Sabtu : 08.00 AM - 04.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-blue me-2"></small>
                    <small>+62 813 772 853 15</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-blue me-1" href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-blue me-0" href="https://www.instagram.com/?hl=id"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="<?=base_url('index.php/home')?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-blue"><img style="width: 55px;" src="<?=base_url('assets/img/carr.png')?>" alt=""> Rental Mobil</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?=base_url('index.php/home')?>" class="nav-item nav-link active">Home</a>
                <a href="<?=base_url('index.php/home/about')?>" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <!-- <a href="<?=base_url('index.php/home/booking')?>" class="dropdown-item">Booking</a> -->
                        <a href="<?=base_url('index.php/home/managemen')?>" class="dropdown-item">Managemen</a>
                        <a href="<?=base_url('index.php/home/rental')?>" class="dropdown-item">Rental</a>
                    </div>
                </div>
                <a href="<?=base_url('index.php/home/kontak')?>" class="nav-item nav-link">Contact</a>
            </div>
            <a href="<?=base_url('index.php/login/login')?>" class="btn btn-outline-blue py-4 px-lg-5 d-none d-lg-block">Sign In<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?=base_url('assets/img/bugatti.jpg')?>" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown"></h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Sewa kendaraan lebih aman dan nyaman</h1>
                                    <a href="<?=base_url('index.php/home/kontak')?>" class="btn btn-blue py-3 px-5 animated slideInDown">Hubungi<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="<?=base_url('assets/img/avanza.png')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?=base_url('assets/img/bugatti.jpg')?>" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown"></h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Layanan 24 Jam</h1>
                                    <a href="<?=base_url('index.php/home/kontak')?>" class="btn btn-blue py-3 px-5 animated slideInDown">Hubungi<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="<?=base_url('assets/img/rush.png')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <div class="ps-4">
                            <h5 class="mb-3">Layanan 24 Jam</h5>
                            <p>Kami siap melayani anda</p>
                            <!-- <a class="text-secondary border-bottom" href="">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <div class="ps-4">
                            <h5 class="mb-3">15 Tahun Pengalaman</h5>
                            <p>Dikelola oleh orang yang sudah berpengalaman dalam rental mobil</p>
                            <!-- <a class="text-secondary border-bottom" href="">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <div class="ps-4">
                            <h5 class="mb-3"> Mobil Terbaru</h5>
                            <p>Kondisi mesin mobil bagus membuat perjalanan pengendara tearasa nyaman</p>
                            <!-- <a class="text-secondary border-bottom" href="">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?=base_url('assets/img/stir.jpg')?>" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .19);">
                            <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Tahun</span></h1>
                            <h4 class="text-white">Pengalaman</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <h1 class="mb-4">Mengapa memilih <span class="text-blue">Rental Mobil</span>?</h1>
                    <p class="mb-4"></p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">
                                    </span>
                                </div>
                                <div class="ps-3">
                                    <h6>Akses Mudah & Jaringan Luas</h6>
                                    <span>perjalanan semakin mudah melalui website Rental Mobil. Dengan dukungan yang luas, tersebar di kota di Indonesia</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">
                                   
                                    </span>
                                </div>
                                <div class="ps-3">
                                    <h6>Harga Terjangkau</h6>
                                    <span>Dengan menawarkan harga mobil yang terjangkau, kualitas servis baik dan menyediakan mobil - mobil berkualitas.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">
                                   
                                    </span>
                                </div>
                                <div class="ps-3">
                                    <h6>Keluaran Terbaru</h6>
                                    <span>Tidak Perlu khawatir di jamin mobil keluaran terbaru!.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?=base_url('index.php/home/about')?>" class="btn btn-blue py-3 px-5">Baca Selengkapnya<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h1 class="mb-5">Mobil</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="<?=base_url('assets/img/alpard.png')?>">
                    <h5 class="mb-0">Rp. 800.000/Hari</h5>
                    <p>TOYOTA ALPHARD</p>
                    <a href="<?=base_url('index.php/login/login')?>" class="btn btn-blue py-1 px-5">Pilih</a>
                    <!-- <div class="testimonial-text bg-light text-center p-3">
                    <h2 class="mb-0">Rp. 500.000/Hari</h2>
                    </div> -->
                </div>
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="<?=base_url('assets/img/avanza.png')?>">
                    <h5 class="mb-0">Rp. 350.000/Hari</h5>
                    <p>HONDA AVANZA</p>
                    <a href="<?=base_url('index.php/login/login')?>" class="btn btn-blue py-1 px-5">Pilih</a>
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="<?=base_url('assets/img/xpander.png')?>" >
                    <h5 class="mb-0">Rp. 400.000/Hari</h5>
                    <p>MITSUBISHI XPANDER</p>
                    <a href="<?=base_url('index.php/login/login')?>" class="btn btn-blue py-1 px-5">Pilih</a>
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="<?=base_url('assets/img/rush.png')?>" >
                    <h5 class="mb-0">Rp. 500.000/Hari</h5>
                    <p>TOYOTA RUSH</p>
                    <a href="<?=base_url('index.php/login/login')?>" class="btn btn-blue py-1 px-5">Pilih</a>
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
   


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-blue text-uppercase"> PENGELOLA</h6>
                <h1 class="mb-5">PENGELOLA RENTAL MOBIL</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?=base_url('assets/img/shief.jpg')?>" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/naashief/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Sayyid Nashief Ar-Rafi</h5>
                            <small>Marketing</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?=base_url('assets/img/yul.jpeg')?>" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/yuliaananda_sr/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Yulia Ananda Siregar</h5>
                            <small>Manager</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?=base_url('assets/img/deriyamsi.jpeg')?>" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/deriyamsi/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Deriyamsi Ritonga</h5>
                            <small>Staff</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?=base_url('assets/img/ser.jpeg')?>" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/seriani22/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Seri Ani Ritonga</h5>
                            <small>Staff</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Djuanda, Depok</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 813 772 853 15</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>rentalmobil@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Jam Buka</h4>
                    <h6 class="text-light">Senin - Sabtu:</h6>
                    <p class="mb-4">08.00 AM - 04.00 PM</p>
                    <h6 class="text-light">Sabtu - Minggu:</h6>
                    <p class="mb-0">10.00 AM - 01.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Sewa</h4>
                    <a class="btn btn-link" href="">Acara Keluarga</a>
                    <a class="btn btn-link" href="">Acara Perpisahan</a>
                    <a class="btn btn-link" href="">Acara Pernikahan</a>
                    <a class="btn btn-link" href="">dll</a>
                </div>
                <div class="col-lg-3 col-md-6">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Rental Mobil</a>

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        2022 <a class="border-bottom" href="https://htmlcodex.com"></a> ||
                        Distributed By : <a class="border-bottom" href="https://themewagon.com" target="_blank"> 4 Serangkai - Project2</a>
                     </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <!-- <a href="">Home</a>
                            <a href="">Cookies</a> -->
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-blue btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets/lib/wow/wow.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/easing/easing.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/counterup/counterup.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/tempusdominus/js/moment.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/tempusdominus/js/moment-timezone.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')?>"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url('assets/js/main.js')?>"></script>
</body>

</html>