<?php
session_start();

require_once "./../connections/connections.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $status = $_POST["status"];

    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $foto_tmp = $_FILES['foto']['tmp_name'];
        $foto_path = "uploads/pengurus/" . $foto;

        if (move_uploaded_file($foto_tmp, $foto_path)) {
            $sql = "UPDATE tb_pengurus_inti SET nama='$nama', status='$status', foto='$foto' WHERE id_pengurus_inti='$_GET[menu_upd]'";
        } else {
            echo "Failed to upload the photo.";
            exit();
        }
    } else {
        $sql = "UPDATE tb_pengurus_inti SET nama='$nama', status='$status' WHERE id_pengurus_inti='$_GET[menu_upd]'";
    }

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        echo '<script>window.location.href = "admin.php?p=pengurus_inti";</script>';
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
        $sql = "SELECT * FROM tb_pengurus_inti WHERE id_pengurus_inti='$_GET[menu_upd]'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Invalid request.";
        exit();
    }
    ?>

    <div class="form-container mt-2">
        <h2>Edit Pengurus Inti</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" value="<?php echo $row['nama']; ?>" name="nama" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" id="status" value="<?php echo $row['status']; ?>" name="status" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <img src="uploads/pengurus/<?php echo $row['foto']; ?>" alt="Foto Pengurus" width="100">
                <input type="file" name="foto" accept="image/*">
            </div>
            <div class="form-group submit-button">
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
