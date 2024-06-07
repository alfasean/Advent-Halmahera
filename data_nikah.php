<?php
require_once "connections/connections.php";

session_start();
$id_user = $_SESSION['session_id_user'];

$sql = "SELECT * FROM tb_nikah WHERE id_user = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
            <h1 class="text-center mb-4" style="font-size: 30px;">Data Pernikahan</h1>
            <div style="overflow-x: auto;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Field</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nama Lengkap Suami</td>
                            <td><?php echo $row["nama_lengkap_suami"]; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir Suami</td>
                            <td><?php echo $row["tempat_lahir_suami"]; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir Suami</td>
                            <td><?php echo $row["tgl_lahir_suami"]; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Suami</td>
                            <td><?php echo $row["alamat_suami"]; ?></td>
                        </tr>
                        <tr>
                            <td>Kecamatan Suami</td>
                            <td><?php echo $row["kecamatan_suami"]; ?></td>
                        </tr>
                        <tr>
                            <td>Kota/Kabupaten Suami</td>
                            <td><?php echo $row["kota_kabupaten_suami"]; ?></td>
                        </tr>
                        <tr>
                            <td>Provinsi Suami</td>
                            <td><?php echo $row["provinsi_suami"]; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap Istri</td>
                            <td><?php echo $row["nama_lengkap_istri"]; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir Istri</td>
                            <td><?php echo $row["tempat_lahir_istri"]; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir Istri</td>
                            <td><?php echo $row["tgl_lahir_istri"]; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Istri</td>
                            <td><?php echo $row["alamat_istri"]; ?></td>
                        </tr>
                        <tr>
                            <td>Kecamatan Istri</td>
                            <td><?php echo $row["kecamatan_istri"]; ?></td>
                        </tr>
                        <tr>
                            <td>Kota/Kabupaten Istri</td>
                            <td><?php echo $row["kota_kabupaten_istri"]; ?></td>
                        </tr>
                        <tr>
                            <td>Provinsi Istri</td>
                            <td><?php echo $row["provinsi_istri"]; ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Whatsapp</td>
                            <td><?php echo $row["no_wa"]; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $row["gmail"]; ?></td>
                        </tr>
                        <tr>
                            <td>Jemaat</td>
                            <td><?php echo $row["jemaat"]; ?></td>
                        </tr>
                        <tr>
                            <td>Pendeta</td>
                            <td><?php echo $row["pendeta"]; ?></td>
                        </tr>
                        <tr>
                            <td>KTP Suami</td>
                            <td><a href='admin/uploads/nikah/<?php echo $row["ktp_suami"]; ?>' target='_blank'>Lihat</a></td>
                        </tr>
                        <tr>
                            <td>Akta Lahir Suami</td>
                            <td><a href='admin/uploads/nikah/<?php echo $row["akta_lahir_suami"]; ?>' target='_blank'>Lihat</a></td>
                        </tr>
                        <tr>
                            <td>KTP Istri</td>
                            <td><a href='admin/uploads/nikah/<?php echo $row["ktp_istri"]; ?>' target='_blank'>Lihat</a></td>
                        </tr>
                        <tr>
                            <td>Akta Lahir Istri</td>
                            <td><a href='admin/uploads/nikah/<?php echo $row["akta_lahir_istri"]; ?>' target='_blank'>Lihat</a></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><?php echo $row["status"]; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a class="btn btn-primary mt-3" href="index.php" role="button">Kembali</a>
        </div>
        <?php
    }
} else {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data tidak ditemukan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>';
}
?>
