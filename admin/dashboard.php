<?php
    session_start();
    require_once "./../connections/connections.php";

    $queryGaleri = "SELECT COUNT(*) AS totalGaleri FROM tb_galeri";
    $resultGaleri = mysqli_query($conn, $queryGaleri);
    $rowGaleri = mysqli_fetch_assoc($resultGaleri);
    $totalGaleri = $rowGaleri['totalGaleri'];

    $queryNikah = "SELECT COUNT(*) AS totalNikah FROM tb_nikah";
    $resultNikah = mysqli_query($conn, $queryNikah);
    $rowNikah = mysqli_fetch_assoc($resultNikah);
    $totalNikah = $rowNikah['totalNikah'];

    $queryBaptis = "SELECT COUNT(*) AS totalBaptis FROM tb_baptis";
    $resultBaptis = mysqli_query($conn, $queryBaptis);
    $rowBaptis = mysqli_fetch_assoc($resultBaptis);
    $totalBaptis = $rowBaptis['totalBaptis'];

    $totalHargaKeseluruhan = 0;

    $query = "SELECT * FROM tb_laporan_pengeluaran";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $totalHarga = $row['jumlah'] * $row['harga'];
            $totalHargaKeseluruhan += $totalHarga;
        }
    }
?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $totalGaleri; ?></h3>
              <p>Total Galeri</p>
            </div>
            <div class="icon">
                <i class="fas fa-camera"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $totalNikah; ?></h3>
              <p>Total Nikah</p>
            </div>
            <div class="icon">
                <i class="fas fa-ring"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $totalBaptis; ?></h3>
              <p>Total Baptis</p>
            </div>
            <div class="icon">
              <i class="fas fa-baby"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
            <h3><?php echo 'Rp. ' . number_format($totalHargaKeseluruhan, 0, ',', '.'); ?></h3>
              <p>Total Pengeluaran</p>
            </div>
            <div class="icon">
                <i class="fas fa-cash-register"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
