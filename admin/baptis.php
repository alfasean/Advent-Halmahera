<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css?v=2">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="content-wrapper">
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper mt-5">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                <h2><b>Data Baptis</b></h2>
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

                    $query = "SELECT * FROM tb_baptis";
                    $result = mysqli_query($conn, $query);


                    if (mysqli_num_rows($result) > 0) {
                        echo '<table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Waktu Baptis</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Gmail</th>
                                    <th>Nomor WA</th>
                                    <th>Akta Lahir</th>
                                    <th>Kartu Keluarga</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>';
                    
                        while ($row = mysqli_fetch_assoc($result)) {
                            $no++;
                            echo '<tr>
                                    <td>' . $no . '</td>
                                    <td>' . $row['nama_lengkap'] . '</td>
                                    <td>' . $row['waktu_baptis'] . '</td>
                                    <td>' . $row['tempat_lahir'] . '</td>
                                    <td>' . $row['tgl_lahir'] . '</td>
                                    <td>' . $row['gmail'] . '</td>
                                    <td>' . $row['no_wa'] . '</td>
                                    <td>';
                    
                            if (pathinfo($row['akta_kelahiran'], PATHINFO_EXTENSION) == 'pdf' || pathinfo($row['akta_kelahiran'], PATHINFO_EXTENSION) == 'docx') {
                                echo '<a href="uploads/baptis/' . $row['akta_kelahiran'] . '" target="_blank">' . $row['akta_kelahiran'] . '</a>';
                            } else {
                                echo '<img src="uploads/baptis/' . $row['akta_kelahiran'] . '" style="max-width: 100px;" alt="Akta Kelahiran">';
                            }
                    
                            echo '</td><td>';
                            if (pathinfo($row['kk'], PATHINFO_EXTENSION) == 'pdf' || pathinfo($row['kk'], PATHINFO_EXTENSION) == 'docx') {
                                echo '<a href="uploads/baptis/' . $row['kk'] . '" target="_blank">' . $row['kk'] . '</a>';
                            } else {
                                echo '<img src="uploads/baptis/' . $row['kk'] . '" style="max-width: 100px;" alt="Kartu Keluarga">';
                            }
                    
                            echo '</td>
                            <td>' . $row['status'] . '</td>
                                    <td>    
                                        <a style="color: #CD1818;" href="delete_baptis.php?menu_del=' . $row['id_baptis'] . '" class="delete"><i class="material-icons" data-toggle="tooltip" title="Hapus">&#xE872;</i></a>
                                    </td>
                                </tr>';
                        }
                    
                        echo '</table>';
                    } else {
                        echo 'Tidak ada data.';
                    }

                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
