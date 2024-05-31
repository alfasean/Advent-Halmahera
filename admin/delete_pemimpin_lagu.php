<?php
require_once "./../connections/connections.php";

error_reporting(0);

session_start();

mysqli_query($conn, "DELETE FROM tb_pemimpin_lagu WHERE id_pemimpin_lagu = '" . $_GET['menu_del'] . "'");

header("location:admin.php?p=pemimpin_lagu");
?>
