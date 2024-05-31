<?php
session_start();

require_once "./../connections/connections.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_ibadah = $_POST["nama_ibadah"];
    $hari = $_POST["hari"];
    $tgl_ibadah = $_POST["tgl_ibadah"];
    $jam_ibadah = $_POST["jam_ibadah"];

    $sql = "UPDATE tb_jadwal_ibadah SET nama_ibadah='$nama_ibadah', hari ='$hari', tgl_ibadah='$tgl_ibadah', jam_ibadah='$jam_ibadah' WHERE id_jadwal_ibadah='$_GET[menu_upd]'";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        echo '<script>window.location.href = "admin.php?p=jadwal_ibadah";</script>';
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
        $sql = "SELECT * FROM tb_jadwal_ibadah WHERE id_jadwal_ibadah='$_GET[menu_upd]'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Invalid request.";
        exit();
    }
    ?>

    <div class="form-container mt-2">
        <h2>Edit Jadwal Ibadah</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama_ibadah">Nama Ibadah:</label>
                <input type="text" id="nama_ibadah" value="<?php echo $row['nama_ibadah']; ?>" name="nama_ibadah" required>
                <label for="hari">Hari:</label>
                <input type="text" id="hari" value="<?php echo $row['hari']; ?>" name="hari" required>
                <label for="tgl_ibadah">Tanggal Ibadah:</label>
                <input type="date" id="tgl_ibadah" value="<?php echo $row['tgl_ibadah']; ?>" name="tgl_ibadah" required>
                <label for="jam_ibadah">Jam Ibadah:</label>
                <input type="text" id="jam_ibadah" value="<?php echo $row['jam_ibadah']; ?>" name="jam_ibadah" required>
            </div>
            <div class="form-group submit-button">
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
