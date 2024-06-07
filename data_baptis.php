<div class="container" style="margin-top: 80px; margin-bottom: 80px;">
    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        require_once "connections/connections.php";

        $id_user = $_SESSION['session_id_user'];

        $sql = "SELECT * FROM tb_baptis WHERE id_user = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id_user);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            ?>
            <h1 class="text-center mb-4" style="font-size: 30px;">Data Baptis</h1>
            <div style="overflow-x: auto;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Waktu Baptis</th>
                            <th>Nomor Whatsapp</th>
                            <th>Email</th>
                            <th>Akta Kelahiran</th>
                            <th>Kartu Keluarga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['nama_lengkap']; ?></td>
                                <td><?php echo $row['tempat_lahir']; ?></td>
                                <td><?php echo $row['tgl_lahir']; ?></td>
                                <td><?php echo $row['waktu_baptis']; ?></td>
                                <td><?php echo $row['no_wa']; ?></td>
                                <td><?php echo $row['gmail']; ?></td>
                                <td><a href="admin/uploads/baptis/<?php echo $row['akta_kelahiran']; ?>" target="_blank">Lihat</a></td>
                                <td><a href="admin/uploads/baptis/<?php echo $row['kk']; ?>" target="_blank">Lihat</a></td>
                                <td><?php echo $row['status']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Data pengajuan surat tidak ditemukan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
    }
    ?>
    <a class="btn btn-primary mt-3" href="index.php" role="button">Kembali</a>
</div>
