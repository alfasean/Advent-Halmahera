<?php
require_once "./../connections/connections.php";

error_reporting(0);

session_start();

mysqli_query($conn, "DELETE FROM tb_laporan_pengeluaran WHERE id_laporan_pengeluaran = '" . $_GET['menu_del'] . "'");

header("location:admin.php?p=lap_pengeluaran");
?>
