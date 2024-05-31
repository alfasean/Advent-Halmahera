<?php
session_start();
require_once "./../connections/connections.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tgl = $_POST["tgl"];
    $uraian = $_POST["uraian"];
    $jumlah = $_POST["jumlah"];
    $harga = $_POST["harga"];
    $total_harga = $jumlah * $harga;

        $sql = "INSERT INTO tb_laporan_pengeluaran (tgl, uraian, jumlah, harga, total_harga)
                VALUES ('$tgl', '$uraian', '$jumlah', '$harga', '$total_harga')";

        if ($conn->query($sql) === TRUE) {

            $conn->close();

            echo '<script>window.location.href = "admin.php?p=lap_pengeluaran";</script>';
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Laporan Pengeluaran</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="form-container mt-2">
        <h2>Tambah Lap Pengeluaran</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="tgl">Waktu</label>
                <input type="date" id="tgl" name="tgl" required>
            </div>
            <div class="form-group">
                <label for="uraian">Uraian</label>
                <input type="text" id="uraian" name="uraian" required>
            </div>
            <div class="d-flex">
            <div class="form-group mx-3">
                <label for="jumlah">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" id="harga" name="harga" required>
            </div>
            </div>
            <div class="form-group submit-button">
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>