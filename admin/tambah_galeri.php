<?php
session_start();
require_once "./../connections/connections.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];

    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $foto_tmp = $_FILES['foto']['tmp_name'];
        $foto_path = "uploads/galeri/" . $foto;
        
        if (move_uploaded_file($foto_tmp, $foto_path)) {
            $sql = "INSERT INTO tb_galeri (judul, foto)
                    VALUES ('$judul', '$foto')";
        } else {
            echo "Gagal mengunggah foto.";
            exit();
        }
    } else {
        $sql = "INSERT INTO tb_galeri (judul)
                VALUES ('$judul', '$status')";
    }

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        echo '<script>window.location.href = "admin.php?p=galeri";</script>';
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
        <h2>Tambah Galeri</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="foto" name="foto" accept="image/*" required>
            </div>
            <div class="form-group submit-button">
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
