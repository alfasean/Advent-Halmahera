<?php
require_once "connections/connections.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap_suami = $_POST["nama_lengkap_suami"];
    $tempat_lahir_suami = $_POST["tempat_lahir_suami"];
    $tgl_lahir_suami = $_POST["tgl_lahir_suami"];
    $alamat_suami = $_POST["alamat_suami"];
    $kecamatan_suami = $_POST["kecamatan_suami"];
    $kota_kabupaten_suami = $_POST["kota_kabupaten_suami"];
    $provinsi_suami = $_POST["provinsi_suami"];
    $status = "Data sedang diproses";

    $nama_lengkap_istri = $_POST["nama_lengkap_istri"];
    $tempat_lahir_istri = $_POST["tempat_lahir_istri"];
    $tgl_lahir_istri = $_POST["tgl_lahir_istri"];
    $alamat_istri = $_POST["alamat_istri"];
    $kecamatan_istri = $_POST["kecamatan_istri"];
    $kota_kabupaten_istri = $_POST["kota_kabupaten_istri"];
    $provinsi_istri = $_POST["provinsi_istri"];

    $no_wa = $_POST["no_wa"];
    $gmail = $_POST["gmail"];
    $jemaat = $_POST["jemaat"];
    $pendeta = $_POST["pendeta"];

    $id_user = $_SESSION['session_id_user'];

    $ktp_suami_name = $_FILES["ktp_suami"]["name"];
    $akta_kelahiran_suami_name = $_FILES["akta_lahir_suami"]["name"];
    $upload_dir = "admin/uploads/nikah/";

    move_uploaded_file($_FILES["ktp_suami"]["tmp_name"], $upload_dir . $ktp_suami_name);
    move_uploaded_file($_FILES["akta_lahir_suami"]["tmp_name"], $upload_dir . $akta_kelahiran_suami_name);

    $ktp_istri_name = $_FILES["ktp_istri"]["name"];
    $akta_kelahiran_istri_name = $_FILES["akta_lahir_istri"]["name"];

    move_uploaded_file($_FILES["ktp_istri"]["tmp_name"], $upload_dir . $ktp_istri_name);
    move_uploaded_file($_FILES["akta_lahir_istri"]["tmp_name"], $upload_dir . $akta_kelahiran_istri_name);

    $sql = "INSERT INTO tb_nikah (
        id_user, nama_lengkap_suami, tempat_lahir_suami, tgl_lahir_suami, alamat_suami, 
        kecamatan_suami, kota_kabupaten_suami, provinsi_suami, 
        nama_lengkap_istri, tempat_lahir_istri, tgl_lahir_istri, alamat_istri, 
        kecamatan_istri, kota_kabupaten_istri, provinsi_istri, 
        no_wa, gmail, ktp_suami, akta_lahir_suami, ktp_istri, akta_lahir_istri, jemaat, pendeta, status
    ) VALUES (
        '$id_user', '$nama_lengkap_suami', '$tempat_lahir_suami', '$tgl_lahir_suami', '$alamat_suami', 
        '$kecamatan_suami', '$kota_kabupaten_suami', '$provinsi_suami', 
        '$nama_lengkap_istri', '$tempat_lahir_istri', '$tgl_lahir_istri', '$alamat_istri', 
        '$kecamatan_istri', '$kota_kabupaten_istri', '$provinsi_istri', 
        '$no_wa', '$gmail', '$ktp_suami_name', '$akta_kelahiran_suami_name', '$ktp_istri_name', '$akta_kelahiran_istri_name',  '$jemaat', '$pendeta', '$status'
    )";

    if ($conn->query($sql) === TRUE) {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo '<script>
                Swal.fire({
                    title: "Success!",
                    text: "Data berhasil dikirim.",
                    icon: "success"
                }).then(function() {
                    window.location.href = "index.php?p=data_nikah";
                });
              </script>';
    } else {
        echo '<div class="container mt-3"><div class="alert alert-danger alert-dismissible">
            <strong>Error:</strong> ' . $sql . '<br>' . $conn->error . '
        </div></div>';
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            /* background-color: #ffffff; */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            margin: 0 auto;
            margin-top: 20px;
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="datetime-local"],
        input[type="date"],
        input[type="tel"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <h2>Formulir Pendaftaran Nikah</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <form action="" method="post" enctype="multipart/form-data">
                <h5>Suami</h5>
                <div class="d-flex">
                <input placeholder="Nama Lengkap" type="text" id="nama_lengkap_suami" name="nama_lengkap_suami" required><br><br>
                
                <input placeholder="Tempat Lahir" type="text" id="tempat_lahir_suami" name="tempat_lahir_suami" required><br><br>
                </div>

                <div class="d-flex">
                <input placeholder="Tanggal Lahir" type="date" id="tgl_lahir_suami" name="tgl_lahir_suami" required><br><br>

                <input placeholder="Alamat" type="text" id="alamat_suami" name="alamat_suami" required><br><br>
                </div>


                <div class="d-flex">
                <input placeholder="Kecamatan" type="text" id="kecamatan_suami" name="kecamatan_suami" required><br><br>
           
                <input placeholder="Kota/Kabupaten" type="text" id="kota_kabupaten_suami" name="kota_kabupaten_suami" required><br><br>
                </div>
                
                <div class="d-flex">
                <input placeholder="Provinsi" type="text" id="provinsi_suami" name="provinsi_suami" required><br><br>
                </div>

                <h5>Istri</h5>
                <div class="d-flex">
                <input placeholder="Nama Lengkap" type="text" id="nama_lengkap_istri" name="nama_lengkap_istri" required><br><br>
                
                <input placeholder="Tempat Lahir" type="text" id="tempat_lahir_istri" name="tempat_lahir_istri" required><br><br>
                </div>

                <div class="d-flex">
                <input placeholder="Tanggal Lahir" type="date" id="tgl_lahir_istri" name="tgl_lahir_istri" required><br><br>

                <input placeholder="Alamat" type="text" id="alamat_istri" name="alamat_istri" required><br><br>
                </div>


                <div class="d-flex">
                <input placeholder="Kecamatan" type="text" id="kecamatan_istri" name="kecamatan_istri" required><br><br>
           
                <input placeholder="Kota/Kabupaten" type="text" id="kota_kabupaten_istri" name="kota_kabupaten_istri" required><br><br>
                </div>
                
                <div class="d-flex">
                <input placeholder="Provinsi" type="text" id="provinsi_istri" name="provinsi_istri" required><br><br>
                </div>


                <hr>

                <input placeholder="Nomor Whatsapp" type="tel" id="no_wa" name="no_wa" required><br><br>


                <input placeholder="Alamat Email" type="email" id="gmail" name="gmail" required><br><br>

                <input placeholder="Diteguhkan di Jemaat" type="text" id="jemaat" name="jemaat" required><br><br>
               
                <input placeholder="Diteguhkan Oleh Pendeta" type="text" id="pendeta" name="pendeta" required><br><br>

                <label for="ktp_suami">Kartu Tanda Penduduk Suami:</label>
                <input type="file" id="ktp" name="ktp_suami" accept=".pdf, .jpg, .jpeg, .png"
                    required><br><br>

                <label for="akta_kelahiran_suami">Upload Akta Kelahiran Suami:</label>
                <input type="file" id="akta_lahir_suami" name="akta_lahir_suami" accept=".pdf, .jpg, .jpeg, .png"
                    required><br><br>

                <label for="ktp_istri">Kartu Tanda Penduduk Istri:</label>
                <input type="file" id="ktp" name="ktp_istri" accept=".pdf, .jpg, .jpeg, .png"
                    required><br><br>

                <label for="akta_kelahiran_istri">Upload Akta Kelahiran Istri:</label>
                <input type="file" id="akta_lahir_istri" name="akta_lahir_istri" accept=".pdf, .jpg, .jpeg, .png"
                    required><br><br>

                <input type="submit" value="Kirim">
            </form>

        </form>
    </div>
</body>

</html>