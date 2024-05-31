<?php
require_once "./../connections/connections.php";

error_reporting(0);

session_start();

mysqli_query($conn, "DELETE FROM tb_depart_penata_layanan WHERE id_depart_pl = '" . $_GET['menu_del'] . "'");

header("location:admin.php?p=depart_penata_layanan");
?>
