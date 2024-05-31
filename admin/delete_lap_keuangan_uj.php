<?php
require_once "./../connections/connections.php";

error_reporting(0);

session_start();

mysqli_query($conn, "DELETE FROM tb_laporan_keuangan_uj WHERE id_laporan_keuangan_uj = '" . $_GET['menu_del'] . "'");

header("location:admin.php?p=lap_keuangan_uj");
?>
