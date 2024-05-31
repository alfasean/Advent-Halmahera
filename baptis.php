<?php
require_once "connections/connections.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = $_POST["nama_lengkap"];
    $waktu_baptis = $_POST["waktu_baptis"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $no_wa = $_POST["no_wa"];
    $gmail = $_POST["gmail"];
    $kk = $_FILES["kk"]["name"]; 
    $akta_kelahiran = $_FILES["akta_kelahiran"]["name"]; 

    $upload_dir = "admin/uploads/baptis/"; 

    move_uploaded_file($_FILES["kk"]["tmp_name"], $upload_dir . $kk);
    move_uploaded_file($_FILES["akta_kelahiran"]["tmp_name"], $upload_dir . $akta_kelahiran);

    $sql = "INSERT INTO tb_baptis (nama_lengkap, waktu_baptis, tempat_lahir, tgl_lahir, no_wa, gmail, kk, akta_kelahiran)
            VALUES ('$nama_lengkap', '$waktu_baptis', '$tempat_lahir', '$tgl_lahir', '$no_wa', '$gmail', '$kk', '$akta_kelahiran')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="container mt-3"><div class="alert alert-success alert-dismissible">
          <strong>Success!</strong> Data kamu berhasil disimpan.
        </div></div>';
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
</head>

<body>
    <div class="container">
        <h2>Formulir Pendaftaran Baptisan</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required><br><br>

                <label for="waktu_baptis">Waktu Baptisan:</label>
                <input type="date" id="waktu_baptis" name="waktu_baptis" required><br><br>

                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required><br><br>

                <label for="tgl_lahir">Tanggal Lahir:</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" required><br><br>

                <label for="no_wa">Nomor Whatsapp:</label>
                <input type="tel" id="no_wa" name="no_wa" required><br><br>

                <label for="gmail">Alamat Email:</label>
                <input type="email" id="gmail" name="gmail" required><br><br>

                <label for="kk">Upload Kartu Keluarga:</label>
                <input type="file" id="kk" name="kk" accept=".pdf, .jpg, .jpeg, .png"
                    required><br><br>

                <label for="akta_kelahiran">Upload Akta Kelahiran:</label>
                <input type="file" id="akta_kelahiran" name="akta_kelahiran" accept=".pdf, .jpg, .jpeg, .png"
                    required><br><br>

                <input type="submit" value="Kirim">
            </form>

        </form>
    </div>
</body>

</html>