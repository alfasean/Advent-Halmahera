<?php
require_once "./../connections/connections.php";

error_reporting(0);

session_start();

mysqli_query($conn, "DELETE FROM tb_baptis WHERE id_baptis = '" . $_GET['menu_del'] . "'");

header("location:admin.php?p=baptis");
?>
