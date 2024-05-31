<?php
require_once "./../connections/connections.php";

error_reporting(0);

session_start();

mysqli_query($conn, "DELETE FROM tb_depart_sekolah_sabat WHERE id_depart_ss = '" . $_GET['menu_del'] . "'");

header("location:admin.php?p=depart_sekolah_sabat");
?>
