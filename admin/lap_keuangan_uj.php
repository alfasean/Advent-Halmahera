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
                                <h2><b>Data Laporan Keuangan Jemaat</b></h2>
                                <a href="admin.php?p=add_lap_keuangan_uj" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true"> <i class="fa fa-plus mr-1"></i>Tambah Data</a>
                            </div>
                        </div>
                    </div>

                    <?php
                    session_start();
                    require_once "./../connections/connections.php";

                    $no = 0;
                    $totalJumlah = 0;
                    $saldoJanuari = 0;
                    $masukFebuari = 0;
                    $pengeluaran = 0;
                    $saldoSaatIni = 0;

                    $query = "SELECT * FROM tb_laporan_keuangan_uj";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        echo '<table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Uraian</th>
                                        <th>Saldo Januari</th>
                                        <th>Masuk Februari</th>
                                        <th>Jumlah</th>
                                        <th>Pengeluaran</th>
                                        <th>Saldo Saat Ini</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>';

                        while ($row = mysqli_fetch_assoc($result)) {
                            $no++;
                            $totalJumlah += intval($row['jumlah']);
                            $saldoJanuari += intval($row['saldo_januari']);
                            $masukFebuari += intval($row['masuk_februari']);
                            $pengeluaran += intval($row['pengeluaran']);
                            $saldoSaatIni += intval($row['saldo_saat_ini']);

                            echo '<tr>
                                    <td>' . $no . '</td>
                                    <td>' . $row['uraian'] . '</td>
                                    <td>Rp. ' . $row['saldo_januari'] . '</td>
                                    <td>Rp. ' . $row['masuk_februari'] . '</td>
                                    <td>Rp. ' . $row['jumlah'] . '</td>
                                    <td>Rp. ' . $row['pengeluaran'] . '</td>
                                    <td>Rp. ' . $row['saldo_saat_ini'] . '</td>
                                    <td>
                                        <a style="color: #F2BE22;" href="admin.php?p=edit_lap_keuangan_uj&menu_upd=' . $row['id_laporan_keuangan_uj'] . '"" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                        <a style="color: #CD1818;" href="delete_lap_keuangan_uj.php?menu_del=' . $row['id_laporan_keuangan_uj'] . '" class="delete"><i class="material-icons" data-toggle="tooltip" title="Hapus">&#xE872;</i></a>
                                    </td>
                                </tr>';
                        }

                        echo '<tr>
                                <td colspan="2"><b>TOTAL KAS KESELURUH</b></td>
                                <td><b>Rp.' . $saldoJanuari . '</b></td>
                                <td><b>Rp.' . $masukFebuari . '</b></td>
                                <td><b>Rp.' . $totalJumlah . '</b></td>
                                <td><b>Rp.' . $pengeluaran . '</b></td>
                                <td><b>Rp.' . $saldoSaatIni . '</b></td>
                                <td colspan="3"></td>
                            </tr>';

                        echo '<tr>
                        <td colspan="8"><b> Uang Jemaat Bulan Februari 2021 <br> Rp.  ' . $saldoSaatIni . ' </b></td>
                        </tr>';

                        echo '</tbody></table>';
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
