<?php
require_once "./../connections/connections.php";

error_reporting(0);

session_start();

mysqli_query($conn, "DELETE FROM tb_pemuda WHERE id_pemuda = '" . $_GET['menu_del'] . "'");

header("location:admin.php?p=pemuda");
?>
