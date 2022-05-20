<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>4K - MP3 Download</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-download me-2"></i>4K - MP3</h3>
                </a>

                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-home me-2"></i>Ana Sayfa</a>
                    <a href="yeni_music.php" class="nav-item nav-link"><i class="fa fa-music me-2"></i>Yeni Müzikler</a>
                    <a href="yeni_video.php" class="nav-item nav-link"><i class="fa fa-play me-2"></i>Yeni Videolar</a>
                    <a href="iletisim.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>İletişim</a>
                    <a href="muzik_dinle.php" class="nav-item nav-link"><i class="fa fa-volume-up me-2"></i>Müzik Dinle</a>
                
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-download"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4" method="get" action="search.php">
                    <input class="form-control bg-dark border-0" name="p" type="search" placeholder="Video Veya Müzik Ara"><input class="btn btn-primary" value="🔍">
                </form>
                <div class="navbar-nav align-items-center ms-auto">



                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bullhorn me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Duyurular</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">



                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>



                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Tüm Bildirimler Git</a>
                        </div>
                    </div>


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-globe me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Dil Seçiniz</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">



                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Türkçe</h6>

                            </a>
                            <hr class="dropdown-divider">

                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">İngilizce</h6>

                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Almanca</h6>

                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Fıransça</h6>

                            </a>


                            <hr class="dropdown-divider">
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->