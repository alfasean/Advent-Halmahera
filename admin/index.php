<?php 
session_start();

require_once "./../connections/connections.php";

$err        = "";
$username   = "";

if(isset($_SESSION['session_username'])){
    header("location:admin.php");
    exit();
}

if(isset($_POST['tb_admin'])){
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    if($username == '' or $password == ''){
        $err .= "<p style='margin: 10px 30px 0px 30px; color: #D21312 !important;'>Silakan masukkan username dan juga password</p>";
    }else{
        $sql1 = "select * from tb_admin where username = '$username'";
        $q1   = mysqli_query($conn,$sql1);
        $r1   = mysqli_fetch_array($q1);

        if(isset($r1['username']) == ''){
            $err .= "<p style='margin: 10px 30px 0px 30px; color: #D21312 !important;'>Username <b>$username</b> tidak tersedia</p>";
        }elseif($r1['password'] != md5($password)){
            $err .= "<p style='margin: 10px 30px 0px 30px; color: #D21312 !important;'>Password yang dimasukkan tidak sesuai</p>";
        }       
        
        if(empty($err)){
            $_SESSION['session_username'] = $username; 
            $_SESSION['session_password'] = md5($password);
            header("location:admin.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login | Gereja Advent</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>

<style>
    body {
    background-color: #9f9da7;
    font-size: 1.6rem;
    color: #2b3e51;
}

h2 {
  font-weight: 300;
  text-align: center;
}

p {
  position: relative;
}

#login-form-wrap {
  background-color: #fff;
  width: 35%;
  margin: 100px auto;
  text-align: center;
  padding: 20px 0 0 0;
  border-radius: 4px;
  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
}

#login-form {
  padding: 0 60px;
}

input {
  display: block;
  box-sizing: border-box;
  width: 100%;
  outline: none;
  height: 60px;
  line-height: 60px;
  border-radius: 4px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 0 0 0 10px;
  margin: 0;
  color: #8a8b8e;
  border: 1px solid #c2c0ca;
  font-style: normal;
  font-size: 16px;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  position: relative;
  display: inline-block;
  background: none;
}
input[type="text"]:focus,
input[type="password"]:focus {
  border-color: #3ca9e2;
}
input[type="text"]:focus:invalid,
input[type="password"]:focus:invalid {
  color: #cc1e2b;
  border-color: #cc1e2b;
}
input[type="text"]:valid ~ .validation,
input[type="password"]:valid ~ .validation {
  display: block;
  border-color: #0C0;
}
input[type="text"]:valid ~ .validation span,
input[type="password"]:valid ~ .validation span {
  background: #0C0;
  position: absolute;
  border-radius: 6px;
}
input[type="text"]:valid ~ .validation span:first-child,
input[type="password"]:valid ~ .validation span:first-child {
  top: 30px;
  left: 14px;
  width: 20px;
  height: 3px;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
input[type="text"]:valid ~ .validation span:last-child,
input[type="password"]:valid ~ .validation span:last-child {
  top: 35px;
  left: 8px;
  width: 11px;
  height: 3px;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

input[type="submit"] {
  border: none;
  display: block;
  background-color: #3ca9e2;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  cursor: pointer;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
  font-size: 18px;
  position: relative;
  display: inline-block;
  cursor: pointer;
  text-align: center;
}
input[type="submit"]:hover {
  background-color: #329dd5;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

#create-account-wrap {
  background-color: #eeedf1;
  color: #8a8b8e;
  font-size: 14px;
  width: 100%;
  padding: 10px 0;
  border-radius: 0 0 4px 4px;
}
</style>

<body>
<div id="login-form-wrap">
  <h2>Login Admin</h2>
  <form id="login-form" method="POST">
    <p>
    <input type="text" id="username" name="username" placeholder="Username" required>
    </p>
    <p>
    <input type="password" id="password" name="password" placeholder="Password" required>
    </p>
    <p>
    <button type="submit" class="btn btn-primary ms-auto" name="tb_admin">Login</button>
    </p>
  </form>
  <div id="create-account-wrap">
  </div>
</div>
  
</body>
</html>
