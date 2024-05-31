<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Gereja Masehi Advent Hari Ketujuh</h6>
            <h1 class="mb-5">Galeri</h1>
        </div>
        <div class="row g-4">
            <?php
     
            require_once "connections/connections.php";

            $query = "SELECT judul, foto FROM tb_galeri";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $judul = $row['judul'];
                $foto = $row['foto'];

                echo '<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">';
                echo '<div class="service-item p-4">';
                echo '<div class="overflow-hidden mb-4">';
                echo '<img class="img-fluid" src="admin/uploads/galeri/' . $foto . '" alt="Foto ' . $judul . '">';
                echo '</div>';
                echo '<h4 class="mb-3">' . $judul . '</h4>';
                echo '</div>';
                echo '</div>';
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>
