<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css?v=2">
    
</head>

<body>
    <div class="content-wrapper">
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper mt-5">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                <h2><b>Data Pengurus Inti</b></h2>
                                <a href="admin.php?p=add_pengurus_inti" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true"> <i class="fa fa-plus mr-1"></i>Tambah Data</a>
                            </div>
                        </div>
                    </div>

                    <?php
                    session_start();
                    require_once "./../connections/connections.php";

                    if (!$conn) {
                        die("Koneksi database gagal: " . mysqli_connect_error());
                    }

                    $no = 0;

                    $query = "SELECT * FROM tb_pengurus_inti";
                    $result = mysqli_query($conn, $query);


                    if (mysqli_num_rows($result) > 0) {
                        echo '<table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>';

                        while ($row = mysqli_fetch_assoc($result)) {
                            $no++;
                            echo '<tr>
                                    <td>' . $no . '</td>
                                    <td>' . $row['nama'] . '</td>
                                    <td>' . $row['status'] . '</td>
                                    <td><img src="uploads/pengurus/' . $row['foto'] . '" width="100" height="100"></td>
                                    <td>
                                        <a style="color: #F2BE22;" href="admin.php?p=edit_pengurus_inti&menu_upd=' . $row['id_pengurus_inti'] . '"" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                        <a style="color: #CD1818;" href="delete_pengurus_inti.php?menu_del=' . $row['id_pengurus_inti'] . '" class="delete"><i class="material-icons" data-toggle="tooltip" title="Hapus">&#xE872;</i></a>
                                    </td>
                                </tr>';
                        }

                        echo '</table>';
                    } else {
                        echo 'Tidak ada Pengurus Inti.';
                    }

                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
