<?php 
session_start();
require_once "./../connections/connections.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <link href="../img/logo-advent.png" rel="icon">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css?v=2">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="#" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE</span>
      </a>

      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="admin.php?p=dashboard" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
                <p>
                  Departement
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="admin.php?p=pengurus_inti" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pengurus Inti</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=depart_anak" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Anak-Anak</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=pemuda" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pemuda</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=depart_penata_layanan" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Penata Layanan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=depart_sekolah_sabat" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sekolah Sabat</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=diakon" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Diakon</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=diakones" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Diakones</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=bwa" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bakti Wanita Advent</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=rumah_tangga" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rumah Tangga</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=pemimpin_lagu" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pemimpin Lagu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=pembangunan" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pembangunan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=komunikasi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Komunikasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=kostor" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kostor</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hand-holding-heart"></i>
                <p>
                  Pelayanan
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="admin.php?p=baptis" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Baptisan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin.php?p=nikah" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nikah</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-money-bill-alt"></i>
        <p>
            Keuangan
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    Laporan Keuangan
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="admin.php?p=lap_keuangan_ud" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Daerah</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="admin.php?p=lap_keuangan_uj" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Jemaat</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="admin.php?p=lap_pengeluaran" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan Pengeluaran</p>
            </a>
        </li>
    </ul>
</li>

            <li class="nav-item">
              <a href="admin.php?p=jadwal_ibadah" class="nav-link">
              <i class="nav-icon fas fa-calendar-day"></i>
                <p>
                  Jadwal Ibadah
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="admin.php?p=galeri" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
                <p>
                  Galeri
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <?php
    error_reporting(0);
    switch($_GET['p'])
    {
    default:
    include 'dashboard.php';
    break;
    		case "pengurus_inti";
    		include 'pengurus_inti.php';
    		break;
    		case "depart_anak";
    			include 'depart_anak.php';
    		break;
    		case "depart_penata_layanan";
    			include 'depart_penata_layanan.php';
    		break;
    		case "depart_sekolah_sabat";
    			include 'depart_sekolah_sabat.php';
    		break;
    		case "diakones";
    			include 'diakones.php';
    		break;
    		case "diakon";
    			include 'diakon.php';
    		break;
    		case "pemuda";
    			include 'pemuda.php';
    		break;
    		case "bwa";
    			include 'bwa.php';
    		break;
    		case "galeri";
    			include 'galeri.php';
    		break;
    		case "lap_pengeluaran";
    			include 'lap_pengeluaran.php';
    		break;
    		case "lap_keuangan_ud";
    			include 'lap_keuangan_ud.php';
    		break;
    		case "lap_keuangan_uj";
    			include 'lap_keuangan_uj.php';
    		break;
    		case "baptis";
    			include 'baptis.php';
    		break;
    		case "nikah";
    			include 'nikah.php';
    		break;
    		case "jadwal_ibadah";
    			include 'jadwal_ibadah.php';
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
    		case "add_pembangunan";
    			include 'tambah_pembangunan.php';
    		break;
    		case "add_jadwal_ibadah";
    			include 'tambah_jadwal_ibadah.php';
    		break;
    		case "add_komunikasi";
    			include 'tambah_komunikasi.php';
    		break;
    		case "add_kostor";
    			include 'tambah_kostor.php';
    		break;
    		case "add_pengurus_inti";
    			include 'tambah_pengurus_inti.php';
    		break;
    		case "add_depart_anak";
    			include 'tambah_depart_anak.php';
    		break;
    		case "add_depart_penata_layanan";
    			include 'tambah_depart_penata_layanan.php';
    		break;
    		case "add_depart_sekolah_sabat";
    			include 'tambah_depart_sekolah_sabat.php';
    		break;
    		case "add_diakon";
    			include 'tambah_diakon.php';
    		break;
    		case "add_diakones";
    			include 'tambah_diakones.php';
    		break;
    		case "add_bwa";
    			include 'tambah_bwa.php';
    		break;
    		case "add_pemuda";
    			include 'tambah_pemuda.php';
    		break;
    		case "add_pemimpin_lagu";
    			include 'tambah_pemimpin_lagu.php';
    		break;
    		case "add_galeri";
    			include 'tambah_galeri.php';
    		break;
    		case "add_rumah_tangga";
    			include 'tambah_rumah_tangga.php';
    		break;
    		case "add_lap_pengeluaran";
    			include 'tambah_lap_pengeluaran.php';
    		break;
    		case "add_lap_keuangan_ud";
    			include 'tambah_lap_keuangan_ud.php';
    		break;
    		case "add_lap_keuangan_uj";
    			include 'tambah_lap_keuangan_uj.php';
    		break;
    		case "edit_pengurus_inti";
    			include 'edit_pengurus_inti.php';
    		break;
    		case "edit_depart_anak";
    			include 'edit_depart_anak.php';
    		break;
    		case "edit_depart_penata_layanan";
    			include 'edit_depart_penata_layanan.php';
    		break;
    		case "edit_depart_sekolah_sabat";
    			include 'edit_depart_sekolah_sabat.php';
    		break;
    		case "edit_diakon";
    			include 'edit_diakon.php';
    		break;
    		case "edit_diakones";
    			include 'edit_diakones.php';
    		break;
    		case "edit_bwa";
    			include 'edit_bwa.php';
    		break;
    		case "edit_pemuda";
    			include 'edit_pemuda.php';
    		break;
    		case "edit_pemimpin_lagu";
    			include 'edit_pemimpin_lagu.php';
    		break;
    		case "edit_rumah_tangga";
    			include 'edit_rumah_tangga.php';
    		break;
    		case "edit_galeri";
    			include 'edit_galeri.php';
    		break;
    		case "edit_lap_pengeluaran";
    			include 'edit_lap_pengeluaran.php';
    		break;
    		case "edit_lap_keuangan_ud";
    			include 'edit_lap_keuangan_ud.php';
    		break;
    		case "edit_lap_keuangan_uj";
    			include 'edit_lap_keuangan_uj.php';
    		break;
    		case "edit_baptis";
    			include 'edit_baptis.php';
    		break;
    		case "edit_jadwal_ibadah";
    			include 'edit_jadwal_ibadah.php';
    		break;
        case "edit_pembangunan";
    			include 'edit_pembangunan.php';
    		break;
    		case "edit_komunikasi";
    			include 'edit_komunikasi.php';
    		break;
    		case "edit_kostor";
    			include 'edit_kostor.php';
    		break;
    	}
    	?>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="plugins/sparklines/sparkline.js"></script>
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>