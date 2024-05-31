<!DOCTYPE html>
<html>

<head>
    <title>Data Pernikahan</title>
    <style>
         .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 60%;
         
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
<div class="content-wrapper">
    <h2>Data Pernikahan:</h2>
    <div class="card-container">
    <?php
    require_once "../connections/connections.php";

    $query = "SELECT * FROM tb_nikah";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
            <div class="card">
                <p>Nama Lengkap Suami: <?php echo $row["nama_lengkap_suami"]; ?></p>
                <p>Tempat Lahir Suami: <?php echo $row["tempat_lahir_suami"]; ?></p>
                <p>Tanggal Lahir Suami: <?php echo $row["tgl_lahir_suami"]; ?></p>
                <p>Alamat Suami: <?php echo $row["alamat_suami"]; ?></p>
                <p>Kecamatan Suami: <?php echo $row["kecamatan_suami"]; ?></p>
                <p>Kota/Kabupaten Suami: <?php echo $row["kota_kabupaten_suami"]; ?></p>
                <p>Provinsi Suami: <?php echo $row["provinsi_suami"]; ?></p>
                <p>Nama Lengkap Istri: <?php echo $row["nama_lengkap_istri"]; ?></p>
                <p>Tempat Lahir Istri: <?php echo $row["tempat_lahir_istri"]; ?></p>
                <p>Tanggal Lahir Istri: <?php echo $row["tgl_lahir_istri"]; ?></p>
                <p>Alamat Istri: <?php echo $row["alamat_istri"]; ?></p>
                <p>Kecamatan Istri: <?php echo $row["kecamatan_istri"]; ?></p>
                <p>Kota/Kabupaten Istri: <?php echo $row["kota_kabupaten_istri"]; ?></p>
                <p>Provinsi Istri: <?php echo $row["provinsi_istri"]; ?></p>
                <p>Nomor Whatsapp: <?php echo $row["no_wa"]; ?></p>
                <p>Email: <?php echo $row["gmail"]; ?></p>
                <p>Jemaat: <?php echo $row["jemaat"]; ?></p>
                <p>Pendeta: <?php echo $row["pendeta"]; ?></p>

                <p><a href='./uploads/nikah/<?php echo $row["ktp_suami"]; ?>' target='_blank'>Download KTP Suami</a></p>
                <p><a href='./uploads/nikah/<?php echo $row["akta_lahir_suami"]; ?>' target='_blank'>Download Akta Lahir Suami</a></p>
                <p><a href='./uploads/nikah/<?php echo $row["ktp_istri"]; ?>' target='_blank'>Download KTP Istri</a></p>
                <p><a href='./uploads/nikah/<?php echo $row["akta_lahir_istri"]; ?>' target='_blank'>Download Akta Lahir Istri</a></p>
            </div>
    <?php
        }
    } else {
        echo "Tidak ada data yang ditemukan.";
    }

    $conn->close();
    ?>
    </div>
    </div>
</body>

</html>
