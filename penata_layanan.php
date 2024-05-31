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

                    if (!$conn) {
                        die("Koneksi database gagal: " . mysqli_connect_error());
                    }

                    $no = 0;

                    $query = "SELECT * FROM tb_depart_penata_layanan";
                    $result = mysqli_query($conn, $query);


                    if (mysqli_num_rows($result) > 0) {
                        echo '<table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>status</th>
                                </tr>
                            </thead>';

                        while ($row = mysqli_fetch_assoc($result)) {
                            $no++;
                            echo '<tr>
                                    <td>' . $no . '</td>
                                    <td>' . $row['nama'] . '</td>
                                    <td>' . $row['status'] . '</td>
                                </tr>';
                        }

                        echo '</table>';
                    } else {
                        echo 'Tidak ada data di Departement Penata Layananan.';
                    }

                    mysqli_close($conn);
                    ?>
    </div>
</body>
</html>
