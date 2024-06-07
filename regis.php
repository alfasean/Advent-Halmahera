<?php
session_start();
require_once "connections/connections.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $sql = "INSERT INTO tb_user (nama, username, password)
            VALUES (?, ?, ?)";
            
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sss", $nama, $username, $password);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        echo '<script>window.location.href = "login.php";</script>';
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
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<section class="vh-100 bg-light">
  <div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card border-0" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Regis Akun</p>
                <form class="mx-1 mx-md-4" method="post" enctype="multipart/form-data">
                  <div class="mb-4">
                    <i class="fas fa-lock fa-lg me-3"></i>
                    <div class="form-floating flex-fill mb-0">
                      <input type="text" id="form3Example4c" class="form-control" name="nama"/>
                      <label class="form-label" for="form3Example4c">Nama Lengkap</label>
                    </div>
                  </div>
                  <div class="mb-4">
                    <i class="fas fa-lock fa-lg me-3"></i>
                    <div class="form-floating flex-fill mb-0">
                      <input type="text" id="form3Example4c" class="form-control" name="username"/>
                      <label class="form-label" for="form3Example4c">Username</label>
                    </div>
                  </div>
                  <div class="mb-4">
                    <i class="fas fa-key fa-lg me-3"></i>
                    <div class="form-floating flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" name="password"/>
                      <label class="form-label" for="form3Example4cd">Password</label>
                    </div>
                  </div>
                  <div class="form-check mb-5">
                    <p>
                      Sudah punya akun? <a href="login.php">Masuk</a>
                    </p>
                  </div>
                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <button type="submit" name="tb_user" class="btn btn-primary btn-lg">Masuk</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
