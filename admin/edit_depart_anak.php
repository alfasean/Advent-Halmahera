<?php
session_start();

require_once "./../connections/connections.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $status = $_POST["status"];

    $sql = "UPDATE tb_depart_anak SET nama='$nama', status='$status' WHERE id_depart_anak='$_GET[menu_upd]'";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        echo '<script>window.location.href = "admin.php?p=depart_anak";</script>';
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
    <title>Edit Pengurus Inti</title>
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
        $sql = "SELECT * FROM tb_depart_anak WHERE id_depart_anak='$_GET[menu_upd]'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Invalid request.";
        exit();
    }
    ?>

    <div class="form-container mt-2">
        <h2>Edit Departement Anak</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" value="<?php echo $row['nama']; ?>" name="nama" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" id="status" value="<?php echo $row['status']; ?>" name="status" required>
            </div>
            <div class="form-group submit-button">
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
