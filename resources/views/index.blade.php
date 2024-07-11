<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>E-commerce Kelompok 1</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('landing') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="{{ asset('landing') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('landing') }}/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('landing') }}/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-info" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-info d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-info"></i> <a href="#" class="text-white">Jl. Hj.Compek No.32,Serengseng Sawah</a></small>   
                        <small class="me-3"><i class="fas fa-envelope me-2 text-info"></i><a href="#" class="text-white">BouquetBeauty@gmail.com</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                        <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="index.html" class="navbar-brand"><h1 class="text-info display-6">Bouquet Beauty</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-info"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <div class="nav-item dropdown">
                                <div class="dropdown-menu m-0 bg-info rounded-0">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex m-3 me-0 mx-5">
                            @if (Route::has('login'))
                                <a class="btn btn-info text-white me-2" href="{{ route('login') }}" role="button">Login</a>
                            @endif
                            @if (Route::has('register'))
                                <a class="btn btn-info text-white" href="{{ route('register') }}" role="button">Register</a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

         <!-- carousel Start -->
         <div class="container-fluid py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <h4 class="mb-3 text-info">Buket Spesial Untuk Hari Spesial</h4>
                        <h3 class="mb-5 display-3 text-info">"Buket Terbaik Hanya untuk Anda"</h3>
                        <div class="position-relative mx-auto">
                            <input class="form-control border-2 border-info w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">
                            <button type="submit" class="btn btn-info border-2 border-info py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Submit Now</button>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active rounded">
                                    <img src="{{ asset('landing') }}/img/hero 3.jpg" class="img-fluid w-100 h-50 bg-info rounded" alt="First slide">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="{{ asset('landing') }}/img/caraousel 2.jpg" class="img-fluid w-100 h-50 rounded" alt="Second slide">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Featurs Section Start -->
        <div class="container-fluid featurs py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-info mb-5 mx-auto">
                                <i class="fas fa-car-side fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Free Ongkir</h5>
                                <p class="mb-0">Diskon 20% Min Pemesanan Rp.100.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-info mb-5 mx-auto">
                                <i class="fas fa-user-shield fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Keamanan Pembayaran</h5>
                                <p class="mb-0">100% terjamin aman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-info mb-5 mx-auto">
                                <i class="fas fa-exchange-alt fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>7 Hari Pengembalian</h5>
                                <p class="mb-0">Maksimal 7 Hari Untuk Pengembalian Produk</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-info mb-5 mx-auto">
                                <i class="fa fa-phone-alt fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Layanan yang Baik</h5>
                                <p class="mb-0">Kenyamanan Anda Saat Berbelanja</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs Section End -->

        <!-- Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <div class="tab-class text-center">
                    <div class="row g-4">
                        <div class="col-lg-4 text-start">
                            <h1>Produk Kami</h1>
                        </div>
                        <div class="col-lg-8 text-end">
                            <ul class="nav nav-pills d-inline-flex text-center mb-5">
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                        <span class="text-dark" style="width: 130px;">All Products</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('landing') }}/img/buket 1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="p-4 border border-info border-top-0 rounded-bottom">
                                                    <h4>Sweet Serenade</h4>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp.45.000</p>
                                                        <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('landing') }}/img/buket 3.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="p-4 border border-info border-top-0 rounded-bottom">
                                                    <h4>Lilac Dream</h4>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp.45.000</p>
                                                        <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('landing') }}/img/buket 2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="p-4 border border-info border-top-0 rounded-bottom">
                                                    <h4>Soft Serenity</h4>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp.50.000</p>
                                                        <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('landing') }}/img/buket 4.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="p-4 border border-info border-top-0 rounded-bottom">
                                                    <h4>Fuchsia Fantasy</h4>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp.70.000</p>
                                                        <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('landing') }}/img/buket 5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="p-4 border border-info border-top-0 rounded-bottom">
                                                    <h4>Purple Paradise</h4>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp.70.000</p>
                                                        <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('landing') }}/img/buket 9.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="p-4 border border-info border-top-0 rounded-bottom">
                                                    <h4>Blazing Beauty</h4>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp.65.000</p>
                                                        <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('landing') }}/img/buket 8.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="p-4 border border-info border-top-0 rounded-bottom">
                                                    <h4>Sunny Delight</h4>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp.70.000</p>
                                                        <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="{{ asset('landing') }}/img/buket 6.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="p-4 border border-info border-top-0 rounded-bottom">
                                                    <h4>Ocean Whisper</h4>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rp.80.000</p>
                                                        <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content py-4">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="row g-4">
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="{{ asset('landing') }}/img/buket 7.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="p-4 border border-info border-top-0 rounded-bottom">
                                                        <h4>Mint Magic</h4>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">Rp.85.000</p>
                                                            <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="{{ asset('landing') }}/img/buket 10.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="p-4 border border-info border-top-0 rounded-bottom">
                                                        <h4>Gray Elegance</h4>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">Rp.75.000</p>
                                                            <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="{{ asset('landing') }}/img/buket 11.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="p-4 border border-info border-top-0 rounded-bottom">
                                                        <h4>Dark Desire</h4>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">Rp.70.000</p>
                                                            <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="{{ asset('landing') }}/img/buket 13.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="p-4 border border-info border-top-0 rounded-bottom">
                                                        <h4>Sweet Dream</h4>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">Rp.35.000</p>
                                                            <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                                        </div>
                                                    </div>
                                                </div>
                                   </div>
            </div>
        </div>
         <!-- Shop End-->

         <!-- Bestsaler Product Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                    <h1 class="display-4">Bestseller Bouquet</h1>
                    <p>Tidak ada yang salah dengan buket bunga yang selalu laris manis, Buktikan Keindahannya</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('landing') }}/img/buket 3.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Lilac Dream</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                    <h4 class="mb-3">Rp.45.000</h4>
                                    <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('landing') }}/img/buket 1.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Sweet Serenade</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">Rp.45.0000</h4>
                                    <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('landing') }}/img/buket 8.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Sunny Delight</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">Rp.70.000</h4>
                                    <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('landing') }}/img/buket 13.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Sweet Dream</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">Rp.35.000</h4>
                                    <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('landing') }}/img/buket 9.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Blazing Beauty</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">Rp.65.000</h4>
                                    <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('landing') }}/img/buket 6.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Ocean Whisper</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">Rp.80.000</h4>
                                    <a href="#" class="btn border border-info rounded-pill px-3 text-info"><i class="fa-solid fa-cart-shopping"></i> +</a>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- Bestsaler Product End -->

        <!-- Tastimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="testimonial-header text-center">
                    <h4 class="text-info">Testimoni Kita</h4>
                    <h1 class="display-5 mb-5 text-dark">Apa yang Pelanggan Katakan</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-info position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-info">
                                <p class="mb-0">"Nggak nyesel beli buket ini! Warnanya sesuai sama foto, bahkan lebih bagus lagi aslinya.Recommended banget!"
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-info rounded">
                                    <img src="{{ asset('landing') }}/img/testimoni 2.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Annisa Rastanti</h4>
                                    <p class="m-0 pb-3">Pelajar</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-info position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-info">
                                <p class="mb-0">"Udah dua kali pesan buket di sini dan selalu puas. Kualitas bunga dan desain buketnya nggak pernah mengecewakan!"
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-info rounded">
                                    <img src="{{ asset('landing') }}/img/testimoni 3.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Kiranti Nugroho</h4>
                                    <p class="m-0 pb-3">Data Analyst</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-info position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-info">
                                <p class="mb-0"> "Pelayanannya juara! Pesan buat ultah pacar dan dia langsung senyum lebar. Bakal pesan lagi deh di sini!"
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-info rounded">
                                    <img src="{{ asset('landing') }}/img/testimoni 1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Sagara Pratama</h4>
                                    <p class="m-0 pb-3">Gitaris</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->

        <!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(178, 206, 244, 0.5);">
            <div class="row g-4">
                <div class="col-lg-6">
                    <a href="#">
                        <h3 class="text-info mb-0">Bouquet Beauty</h3>
                        <p class="text-info mb-0">Buket Bunga</p>
                    </a>
                </div>
                <div class="col-lg-6 d-flex justify-content-end align-items">
                    <a class="btn btn-outline-info me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-info me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-info me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-info btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Mengapa Orang Menyukai Kami!</h4>
                    <p class="mb-4">Buket bunga kami dirancang dengan cinta dan perhatian, menggunakan hanya bunga segar.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Akun</h4>
                    <a class="btn btn-link text-white-50 mb-2" href="">Akun Saya</a>
                    <a class="btn btn-link text-white-50 mb-2" href="">Detail Toko</a>
                    <a class="btn btn-link text-white-50 mb-2" href="">Keranjang Belanja</a>
                    <a class="btn btn-link text-white-50 mb-2" href="">Riwayat Pesanan</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Kontak</h4>
                    <p class="mb-2">Alamat: Jl.Hj Compek No.32, Serengseng Sawah</p>
                    <p class="mb-2">Email: BouquetBeauty@gmail.com</p>
                    <p class="mb-2">Telepon: +6283153407968</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Pembayaran Diterima</h4>
                    <img src="{{ asset('landing') }}/img/payment.png" class="img-fluid" alt="Metode Pembayaran">
                </div>
            </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Bouquet Beauty</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 my-auto text-center text-md-end text-white">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('landing') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('landing') }}/lib/lightbox/js/lightbox.min.js"></script>
    <script src="{{ asset('landing') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landing') }}/js/main.js"></script>
    </body>

</html>
