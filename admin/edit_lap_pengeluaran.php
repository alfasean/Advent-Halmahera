<?php
session_start();

require_once "./../connections/connections.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tgl = $_POST["tgl"];
    $uraian = $_POST["uraian"];
    $jumlah = $_POST["jumlah"];
    $harga = $_POST["harga"];
    $total_harga = $jumlah * $harga;

    $sql = "UPDATE tb_laporan_pengeluaran SET tgl='$tgl', uraian='$uraian', jumlah='$jumlah', harga='$harga', total_harga='$total_harga' WHERE id_laporan_pengeluaran='$_GET[menu_upd]'";

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
    <title>Edit Laporan Pengeluaran</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <?php
    require_once "./../connections/connections.php";

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    if (isset($_GET['menu_upd'])) {
        $sql = "SELECT * FROM tb_laporan_pengeluaran WHERE id_laporan_pengeluaran='$_GET[menu_upd]'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Invalid request.";
        exit();
    }
    ?>

    <div class="form-container mt-2">
        <h2>Edit Laporan Pengeluaran</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="tgl">Waktu:</label>
                <input type="date" id="tgl" value="<?php echo $row['tgl']; ?>" name="tgl" required>
            </div>
            <div class="form-group">
                <label for="uraian">Uraian:</label>
                <input type="text" id="uraian" value="<?php echo $row['uraian']; ?>" name="uraian" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" id="jumlah" value="<?php echo $row['jumlah']; ?>" name="jumlah" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" id="harga" value="<?php echo $row['harga']; ?>" name="harga" required>
            </div>
            <div class="form-group submit-button">
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
