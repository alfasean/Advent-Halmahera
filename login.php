<?php
session_start();

require_once "connections/connections.php";

$err = "";
$username = "";

if (isset($_SESSION['session_id_user'])) {
    header("location:index.php");
    exit();
}

if (isset($_POST['tb_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '' or $password == '') {
        $err .= "<p class='text-danger' style='margin: 10px 30px 0px 30px;'>Silakan masukkan username dan juga password</p>";
    } else {
        $sql1 = "SELECT * FROM tb_user WHERE username = ?";
        $stmt = $conn->prepare($sql1);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if (!$user) {
            $err .= "<p class='text-danger' style='margin: 10px 30px 0px 30px;'>Username <b>$username</b> tidak tersedia</p>";
        } elseif ($user['password'] != md5($password)) {
            $err .= "<p class='text-danger' style='margin: 10px 30px 0px 30px;'>Password yang dimasukkan tidak sesuai</p>";
        }

        if (empty($err)) {
            $_SESSION['session_id_user'] = $user['id_user'];
            $_SESSION['session_username'] = $username;
            $_SESSION['session_password'] = md5($password);
            header("location:index.php");
        }
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
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                <?php echo $err; ?>
                <form class="mx-1 mx-md-4" method="post" enctype="multipart/form-data">
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
                      Belum punya akun? <a href="regis.php">Registrasi</a>
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
