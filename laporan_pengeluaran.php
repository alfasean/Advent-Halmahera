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
        $totalHargaKeseluruhan = 0;

        $query = "SELECT * FROM tb_laporan_pengeluaran";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo '<table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Waktu</th>
                            <th>Uraian</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>';

            while ($row = mysqli_fetch_assoc($result)) {
                $no++;
                $totalHarga = $row['jumlah'] * $row['harga'];
                $totalHargaKeseluruhan += $totalHarga;

                $tanggal = date("d F Y", strtotime($row['tgl']));

                echo '<tr>
                        <td>' . $no . '</td>
                        <td>' . $tanggal . '</td>
                        <td>' . $row['uraian'] . '</td>
                        <td>Rp. ' . $row['jumlah'] . '</td>
                        <td>Rp. ' . $row['harga'] . '</td>
                        <td>Rp. ' . $totalHarga . '</td>
                    </tr>';
            }
                echo '<tr>
                        <td colspan="6">Total Harga Keseluruhan: Rp.' . $totalHargaKeseluruhan . '</td>
                        
                    </tr>';
            

            echo '</tbody></table>';

        } else {
            echo '<p>Tidak ada data.</p>';
        }

        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
