 <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/image7.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h8 class="text-white text-uppercase mb-3 animated slideInDown">Gereja Masehi Advent Hari Ketujuh Jemaat Kalipitu Kabupaten Halmahera Utara</h8>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Memeluk Harapan, Menginspirasi Iman</h1>
                                <a href="#ibadah" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Jadwal Ibadah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid overflow-hidden">
        <div class="container vm">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-12 vm-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3 text-center">Gereja Masehi Advent Hari Ketujuh</h6>
                    <h1 class="mb-5 text-center">Visi dan Misi</h1>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <h5 class="text-center">Visi</h5>
                            <p class="m-0 visi">Selaras dengan wahyu Alkitab, Gereja Masehi Advent Hari Ketujuh melihat sebagai klimaks dari rencana Allah untuk memulihkan segenap ciptaanNya untuk menjadi selaras sepenuhnya dengan kehendak dan kebenaranNya.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <h5 class="text-center">Misi</h5>
                            <p class="m-0 misi">Menjadikan murid Yesus Kristus, yang hidup sebagai saksiNya yang penuh kasih dan memberitakan kepada semua orang Injil yang kekal dari Pekabaran Tiga Malaikat sebagai persiapan untuk kedatanganNya yang segera (Matius 28:18–20; Kisah 1;8; Wahyu 14:6–12).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container-xxl py-5" id="ibadah">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Gereja Masehi Advent Hari Ketujuh</h6>
            <h1 class="mb-5">Jadwal Ibadah</h1>
        </div>
        <div class="row g-4">
            <?php
            require_once "connections/connections.php";
            $sqlJadwal = "SELECT * FROM tb_jadwal_ibadah";
            $resultJadwal = $conn->query($sqlJadwal);

            if ($resultJadwal->num_rows > 0) {
                while ($row = $resultJadwal->fetch_assoc()) {
                    echo '<div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">';
                    echo '<div class="ibadah-item">';
                    echo '<div class="border-bottom p-4 mb-4">';
                    echo '<h5 class="text-primary mb-1">' . $row["hari"] . '</h5>';
                    echo '<h1 class="display-5 mb-0">';
                    echo '<small class="align-top" style="font-size: 16px; line-height: 45px;">' . $row["nama_ibadah"] . '</small>';
                    echo '</div>';
                    echo '<div class="p-4 pt-0">';
                    echo '<p><i class="fas fa-calendar-day me-3" style="color: gray;"></i>' . $row["tgl_ibadah"] . '</p>';
                    echo '<p><i class="fa fa-clock me-3" style="color: gray;"></i>' . $row["jam_ibadah"] . ' WIT</p>';
                    echo '<a class="btn-slide mt-2"><i class="fa fa-arrow-right"></i><span >Ayo Ibadah</span></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "Tidak ada jadwal ibadah yang tersedia.";
            }
            ?>
        </div>
    </div>
</div>

<div class="container-xxl py-5" id="pengurus-ksb">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Gereja Masehi Advent Hari Ketujuh Jemaat Kalipitu</h6>
            <h1 class="mb-5">Pengurus KSB</h1>
        </div>
        <div class="row g-4">
            <?php
            $sqlKSB = "SELECT nama, status, foto FROM tb_pengurus_inti";
            $resultKSB = $conn->query($sqlKSB);

            $gambar_path = "admin/uploads/pengurus/";

            if ($resultKSB->num_rows > 0) {
                while ($row = $resultKSB->fetch_assoc()) {
                    echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">';
                    echo '<div class="ksb-item p-4">';
                    echo '<div class="overflow-hidden mb-4">';
                    echo '<img class="img-fluid" src="' . $gambar_path . $row["foto"] . '" alt="Foto ' . $nama . '">';
                    echo '</div>';
                    echo '<h5 class="mb-0">' . $nama  .  $row["nama"] . '</h5>';
                    echo '<p>' . $status .  $row["status"] . '</p>';
                    echo '<div class="btn-slide mt-1">';
                    echo '<i class="fa fa-bible"></i>';
                    echo '<span>';
                    echo 'Allah hadir bagi kita';
                    echo '</span>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "Tidak ada data pengurus KSB yang tersedia.";
            }

            $conn->close();
            ?>
        </div>
    </div>
</div>


</body>
</html>


</div>


