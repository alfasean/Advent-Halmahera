<?php
session_start();
require_once "./../connections/connections.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $status = $_POST["status"];

        $sql = "INSERT INTO tb_depart_penata_layanan (nama, status)
                VALUES ('$nama', '$status')";

        if ($conn->query($sql) === TRUE) {

            $conn->close();

            echo '<script>window.location.href = "admin.php?p=depart_penata_layanan";</script>';
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
    <div class="form-container mt-2">
        <h2>Tambah Departement Anak</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" id="status" name="status" required>
            </div>
            <div class="form-group submit-button">
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>