<?php
require_once "./../connections/connections.php";

error_reporting(0);

session_start();

mysqli_query($conn, "DELETE FROM tb_pengurus_inti WHERE id_pengurus_inti = '" . $_GET['menu_del'] . "'");

header("location:admin.php?p=pengurus_inti");
?>
