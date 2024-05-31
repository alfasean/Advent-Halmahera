<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css?v=2">

    <style>
        table {
            margin-top: 70px;
            margin-bottom: 250px !important;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
                    session_start();
                    require_once "connections/connections.php";

                    $no = 0;
                    $totalJumlah = 0;

                    $query = "SELECT * FROM tb_laporan_keuangan_uj";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        echo '<table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Uraian</th>
                                        <th>Saldo Januari 2021</th>
                                        <th>Masuk Februari 2021</th>
                                        <th>Jumlah</th>
                                        <th>Pengeluaran</th>
                                        <th>Saldo Saat Ini</th>
                                    </tr>
                                </thead>
                                <tbody>';

                        while ($row = mysqli_fetch_assoc($result)) {
                            $no++;
                            $totalJumlah += intval($row['jumlah']);

                            echo '<tr>
                                    <td>' . $no . '</td>
                                    <td>' . $row['uraian'] . '</td>
                                    <td>Rp. ' . $row['saldo_januari'] . '</td>
                                    <td>Rp. ' . $row['masuk_februari'] . '</td>
                                    <td>Rp. ' . $row['jumlah'] . '</td>
                                    <td>Rp. ' . $row['pengeluaran'] . '</td>
                                    <td>Rp. ' . $row['saldo_saat_ini'] . '</td>
                                </tr>';
                        }

                        echo '<tr>
                                <td colspan="4" style="font-size: 20px;"><b>Total</b></td>
                                <td><b>Rp. ' . $totalJumlah . '</b></td>
                                <td colspan="3"></td>
                            </tr>';

                        echo '</tbody></table>';
                    } else {
                        echo 'Tidak ada data.';
                    }

                    mysqli_close($conn);
                    ?>
    </div>
</body>
</html>
