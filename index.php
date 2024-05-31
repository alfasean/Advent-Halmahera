<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gereja Advent</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/logo-advent.png" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css?v=2" rel="stylesheet">
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="img/logo-advent.png" alt="logo-advent" width="60" height="60">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php?p=home" class="nav-item nav-link">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Laporan</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="index.php?p=laporan_pengeluaran" class="dropdown-item">Pengeluaran Jemaat</a>
                        <div class="dropdown-divider"></div>
                        <a href="index.php?p=laporan_keuangan_ud" class="dropdown-item">Keuangan Daerah</a>
                        <a href="index.php?p=laporan_keuangan_uj" class="dropdown-item">Keuangan Jemaat</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Departement</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="index.php?p=diakon" class="dropdown-item">Diakon</a>
                        <a href="index.php?p=diakones" class="dropdown-item">Diakones</a>
                        <a href="index.php?p=sekolah_sabat" class="dropdown-item">Sekolah Sabat</a>
                        <a href="index.php?p=anak" class="dropdown-item">Anak-Anak</a>
                        <a href="index.php?p=bwa" class="dropdown-item">BWA</a>
                        <a href="index.php?p=pemuda" class="dropdown-item">Pemuda</a>
                        <a href="index.php?p=penata_layanan" class="dropdown-item">Penata layanan</a>
                        <a href="index.php?p=rumah_tangga" class="dropdown-item">Rumah Tangga</a>
                        <a href="index.php?p=pemimpin_lagu" class="dropdown-item">Pemimpin Lagu</a>
                        <a href="index.php?p=pembangunan" class="dropdown-item">Pembangunan</a>
                        <a href="index.php?p=komunikasi" class="dropdown-item">Komunikasi</a>
                        <a href="index.php?p=kostor" class="dropdown-item">Kostor</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pelayanan</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="index.php?p=baptis" class="dropdown-item">Baptisan</a>
                        <a href="index.php?p=nikah" class="dropdown-item">Nikah</a>
                    </div>
                </div>
                <a href="index.php?p=galeri" class="nav-item nav-link">Galeri</a>
            </div>
        </div>
    </nav>

    <?php
    error_reporting(0);
    switch($_GET['p'])
    {
    default:
    include 'home.php';
    break;
    		case "anak";
    		include 'anak.php';
    		break;
    		case "sekolah_sabat";
    		include 'sekolah_sabat.php';
    		break;
    		case "penata_layanan";
    		include 'penata_layanan.php';
    		break;
    		case "diakon";
    		include 'diakon.php';
    		break;
    		case "diakones";
    		include 'diakones.php';
    		break;
    		case "galeri";
    		include 'galeri.php';
    		break;
    		case "baptis";
    		include 'baptis.php';
    		break;
            case"nikah";
            include "nikah.php";
            break;
            case"bwa";
            include "bwa.php";
            break;
            case"pemuda";
            include "pemuda.php";
            break;
            case"laporan_pengeluaran";
            include "laporan_pengeluaran.php";
            break;
            case"laporan_keuangan_uj";
            include "laporan_keuangan_uj.php";
            break;
            case"laporan_keuangan_ud";
            include "laporan_keuangan_ud.php";
            break;
            case "rumah_tangga";
            include 'rumah_tangga.php';
            break;
            case "pemimpin_lagu";
                include 'pemimpin_lagu.php';
            break;
            case "pembangunan";
                include 'pembangunan.php';
            break;
            case "komunikasi";
                include 'komunikasi.php';
            break;
            case "kostor";
                include 'kostor.php';
            break;
    	}
    	?>

    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        <div class="container">
            <div class="copyright">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; 2023 <a class="border-bottom" href="#">Gereja Advent Jemaat Kalipitu Kabupaten Halut</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>


    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>