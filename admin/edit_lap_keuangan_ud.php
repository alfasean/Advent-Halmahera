<?php
session_start();

require_once "./../connections/connections.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uraian = $_POST["uraian"];
    $saldo_januari = $_POST["saldo_januari"];
    $masuk_februari = $_POST["masuk_februari"];
    $jumlah = $saldo_januari + $masuk_februari;
    $pengeluaran = $_POST["pengeluaran"];
    $saldo_saat_ini = $jumlah - $pengeluaran;

    $sql = "UPDATE tb_laporan_keuangan_ud SET uraian='$uraian', saldo_januari='$saldo_januari', masuk_februari='$masuk_februari', jumlah='$jumlah', pengeluaran='$pengeluaran', saldo_saat_ini='$saldo_saat_ini' WHERE id_laporan_keuangan='$_GET[menu_upd]'";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        echo '<script>window.location.href = "admin.php?p=lap_keuangan_ud";</script>';
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
    <title>Edit Laporan Keuangan Daerah</title>
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
        $sql = "SELECT * FROM tb_laporan_keuangan_ud WHERE id_laporan_keuangan='$_GET[menu_upd]'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Invalid request.";
        exit();
    }
    ?>

    <div class="form-container mt-2">
        <h2>Edit Laporan keuangan</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="uraian">Uraian:</label>
                <input type="text" id="uraian" value="<?php echo $row['uraian']; ?>" name="uraian" required>
            </div>
            <div class="form-group">
                <label for="saldo_januari">Saldo Januari:</label>
                <input type="number" id="saldo_januari" value="<?php echo $row['saldo_januari']; ?>" name="saldo_januari" required>
            </div>
            <div class="form-group">
                <label for="masuk_februari">Masuk Februari:</label>
                <input type="number" id="masuk_februari" value="<?php echo $row['masuk_februari']; ?>" name="masuk_februari" required>
            </div>
            <div class="form-group">
                <label for="pengeluaran">Pengeluaran:</label>
                <input type="number" id="pengeluaran" value="<?php echo $row['pengeluaran']; ?>" name="pengeluaran" required>
            </div>
            <div class="form-group submit-button">
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
