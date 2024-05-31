-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2023 pada 17.36
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gereja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_baptis`
--

CREATE TABLE `tb_baptis` (
  `id_baptis` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `waktu_baptis` date NOT NULL,
  `no_wa` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `akta_kelahiran` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_baptis`
--

INSERT INTO `tb_baptis` (`id_baptis`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `waktu_baptis`, `no_wa`, `gmail`, `akta_kelahiran`, `kk`) VALUES
(1, 'dsasd', 'Bali', '2023-08-18', '2023-08-07', '08323221', 'alfasean22@gmail.com', 'Red Modern Flash Sale Facebook App Ad.png', 'Red Modern Flash Sale Facebook App Ad (1).png'),
(5, 'Afa', 'Palu', '2023-08-16', '2023-08-13', '08323221', 'alfasean22@gmail.com', 'CV grimonia.pdf', 'CV JONATHAN.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bwa`
--

CREATE TABLE `tb_bwa` (
  `id_bwa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_bwa`
--

INSERT INTO `tb_bwa` (`id_bwa`, `nama`, `status`) VALUES
(2, 'alfa', 'Tersedia updated');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_depart_anak`
--

CREATE TABLE `tb_depart_anak` (
  `id_depart_anak` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_depart_anak`
--

INSERT INTO `tb_depart_anak` (`id_depart_anak`, `nama`, `status`) VALUES
(1, 'alfa', 'Tersedia updated2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_depart_penata_layanan`
--

CREATE TABLE `tb_depart_penata_layanan` (
  `id_depart_pl` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_depart_penata_layanan`
--

INSERT INTO `tb_depart_penata_layanan` (`id_depart_pl`, `nama`, `status`) VALUES
(1, 'alfa', 'PNS2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_depart_sekolah_sabat`
--

CREATE TABLE `tb_depart_sekolah_sabat` (
  `id_depart_ss` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_depart_sekolah_sabat`
--

INSERT INTO `tb_depart_sekolah_sabat` (`id_depart_ss`, `nama`, `status`) VALUES
(2, 'Alfa Seandsdsfs', 'PNS2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diakon`
--

CREATE TABLE `tb_diakon` (
  `id_diakon` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_diakon`
--

INSERT INTO `tb_diakon` (`id_diakon`, `nama`, `status`) VALUES
(2, 'Alfa Sean', 'Tersedia updated'),
(3, 'Alfa Sean Kalapadang Lonteng', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diakones`
--

CREATE TABLE `tb_diakones` (
  `id_diakones` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_diakones`
--

INSERT INTO `tb_diakones` (`id_diakones`, `nama`, `status`) VALUES
(2, 'Alfa Sean', 'Ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `judul`, `foto`) VALUES
(1, 'Ibadah Pemuda', 'Wardeka-Game-1.png'),
(2, 'Perjamuan Kudus', 'oblsd.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komunikasi`
--

CREATE TABLE `tb_komunikasi` (
  `id_komunikasi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_komunikasi`
--

INSERT INTO `tb_komunikasi` (`id_komunikasi`, `nama`, `status`) VALUES
(2, 'Alfa Sean', 'Ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kostor`
--

CREATE TABLE `tb_kostor` (
  `id_kostor` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kostor`
--

INSERT INTO `tb_kostor` (`id_kostor`, `nama`, `status`) VALUES
(1, 'Alfa Sean', 'Ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan_keuangan_ud`
--

CREATE TABLE `tb_laporan_keuangan_ud` (
  `id_laporan_keuangan` int(11) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `saldo_januari` varchar(255) NOT NULL,
  `masuk_februari` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `pengeluaran` varchar(255) NOT NULL,
  `saldo_saat_ini` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_laporan_keuangan_ud`
--

INSERT INTO `tb_laporan_keuangan_ud` (`id_laporan_keuangan`, `uraian`, `saldo_januari`, `masuk_februari`, `jumlah`, `pengeluaran`, `saldo_saat_ini`) VALUES
(1, 'perpuluhan', '10000', '40000', '50000', '30000', '20000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan_keuangan_uj`
--

CREATE TABLE `tb_laporan_keuangan_uj` (
  `id_laporan_keuangan_uj` int(11) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `saldo_januari` varchar(255) NOT NULL,
  `masuk_februari` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `pengeluaran` varchar(255) NOT NULL,
  `saldo_saat_ini` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_laporan_keuangan_uj`
--

INSERT INTO `tb_laporan_keuangan_uj` (`id_laporan_keuangan_uj`, `uraian`, `saldo_januari`, `masuk_februari`, `jumlah`, `pengeluaran`, `saldo_saat_ini`) VALUES
(1, 'Perjamuan', '100000', '100000', '200000', '50000', '150000'),
(2, 'Evang Pemuda', '50000', '30000', '80000', '30000', '50000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan_pengeluaran`
--

CREATE TABLE `tb_laporan_pengeluaran` (
  `id_laporan_pengeluaran` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_laporan_pengeluaran`
--

INSERT INTO `tb_laporan_pengeluaran` (`id_laporan_pengeluaran`, `tgl`, `uraian`, `jumlah`, `harga`, `total_harga`) VALUES
(1, '2023-08-11', 'Kertas', '100', '1000', '100000'),
(4, '2023-08-09', 'Gorden', '4', '25000', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nikah`
--

CREATE TABLE `tb_nikah` (
  `id_nikah` int(11) NOT NULL,
  `nama_lengkap_suami` varchar(50) NOT NULL,
  `tempat_lahir_suami` varchar(50) NOT NULL,
  `tgl_lahir_suami` date NOT NULL,
  `alamat_suami` varchar(50) NOT NULL,
  `kecamatan_suami` varchar(255) NOT NULL,
  `kota_kabupaten_suami` varchar(255) NOT NULL,
  `provinsi_suami` varchar(255) NOT NULL,
  `akta_lahir_suami` varchar(255) NOT NULL,
  `ktp_suami` varchar(255) NOT NULL,
  `nama_lengkap_istri` varchar(255) NOT NULL,
  `tempat_lahir_istri` varchar(255) NOT NULL,
  `tgl_lahir_istri` date NOT NULL,
  `alamat_istri` varchar(255) NOT NULL,
  `kecamatan_istri` varchar(255) NOT NULL,
  `kota_kabupaten_istri` varchar(255) NOT NULL,
  `provinsi_istri` varchar(255) NOT NULL,
  `akta_lahir_istri` varchar(255) NOT NULL,
  `ktp_istri` varchar(255) NOT NULL,
  `jemaat` varchar(255) NOT NULL,
  `pendeta` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `no_wa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_nikah`
--

INSERT INTO `tb_nikah` (`id_nikah`, `nama_lengkap_suami`, `tempat_lahir_suami`, `tgl_lahir_suami`, `alamat_suami`, `kecamatan_suami`, `kota_kabupaten_suami`, `provinsi_suami`, `akta_lahir_suami`, `ktp_suami`, `nama_lengkap_istri`, `tempat_lahir_istri`, `tgl_lahir_istri`, `alamat_istri`, `kecamatan_istri`, `kota_kabupaten_istri`, `provinsi_istri`, `akta_lahir_istri`, `ktp_istri`, `jemaat`, `pendeta`, `gmail`, `no_wa`) VALUES
(4, 'Alfa Sean', 'Palu', '2023-08-30', 'Bahu, Manado', 'asasda', 'Manado', 'sdasddafda', '81e36e1fc5291c6051a4fba151aaa7c8.jpg', '81e36e1fc5291c6051a4fba151aaa7c8.jpg', 'Alfa Sean Kalapadang Lonteng', 'medan', '2023-08-28', 'Tallulolo', 'sadsd', 'Toraja Utara', 'ddscs', '81e36e1fc5291c6051a4fba151aaa7c8.jpg', '81e36e1fc5291c6051a4fba151aaa7c8.jpg', 'Betshda', 'Pdt. Ida', 'alfasean22@gmail.com', '08323221');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembangunan`
--

CREATE TABLE `tb_pembangunan` (
  `id_pembangunan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pembangunan`
--

INSERT INTO `tb_pembangunan` (`id_pembangunan`, `nama`, `status`) VALUES
(1, 'Alfa Sean', 'Ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemimpin_lagu`
--

CREATE TABLE `tb_pemimpin_lagu` (
  `id_pemimpin_lagu` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pemimpin_lagu`
--

INSERT INTO `tb_pemimpin_lagu` (`id_pemimpin_lagu`, `nama`, `status`) VALUES
(1, 'Alfa Sean', 'Ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemuda`
--

CREATE TABLE `tb_pemuda` (
  `id_pemuda` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pemuda`
--

INSERT INTO `tb_pemuda` (`id_pemuda`, `nama`, `status`) VALUES
(1, 'Alfa Sean', 'Ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengurus_inti`
--

CREATE TABLE `tb_pengurus_inti` (
  `id_pengurus_inti` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pengurus_inti`
--

INSERT INTO `tb_pengurus_inti` (`id_pengurus_inti`, `nama`, `status`, `foto`) VALUES
(16, 'Sdr. Fence Pangalila', 'Ketua Jemaat', 'panda.png'),
(17, 'Str. Rispa Muskitta', 'Sekretaris Jemaat', 'panda.png'),
(18, 'Str. Erni Awa', 'Bendahara Jemaat', 'panda.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rumah tangga`
--

CREATE TABLE `tb_rumah tangga` (
  `id_rumah_tangga` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rumah_tangga`
--

CREATE TABLE `tb_rumah_tangga` (
  `id_rumah_tangga` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_rumah_tangga`
--

INSERT INTO `tb_rumah_tangga` (`id_rumah_tangga`, `nama`, `status`) VALUES
(1, 'Alfa Sean L', 'Ketua');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_baptis`
--
ALTER TABLE `tb_baptis`
  ADD PRIMARY KEY (`id_baptis`);

--
-- Indeks untuk tabel `tb_bwa`
--
ALTER TABLE `tb_bwa`
  ADD PRIMARY KEY (`id_bwa`);

--
-- Indeks untuk tabel `tb_depart_anak`
--
ALTER TABLE `tb_depart_anak`
  ADD PRIMARY KEY (`id_depart_anak`);

--
-- Indeks untuk tabel `tb_depart_penata_layanan`
--
ALTER TABLE `tb_depart_penata_layanan`
  ADD PRIMARY KEY (`id_depart_pl`);

--
-- Indeks untuk tabel `tb_depart_sekolah_sabat`
--
ALTER TABLE `tb_depart_sekolah_sabat`
  ADD PRIMARY KEY (`id_depart_ss`);

--
-- Indeks untuk tabel `tb_diakon`
--
ALTER TABLE `tb_diakon`
  ADD PRIMARY KEY (`id_diakon`);

--
-- Indeks untuk tabel `tb_diakones`
--
ALTER TABLE `tb_diakones`
  ADD PRIMARY KEY (`id_diakones`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tb_komunikasi`
--
ALTER TABLE `tb_komunikasi`
  ADD PRIMARY KEY (`id_komunikasi`);

--
-- Indeks untuk tabel `tb_kostor`
--
ALTER TABLE `tb_kostor`
  ADD PRIMARY KEY (`id_kostor`);

--
-- Indeks untuk tabel `tb_laporan_keuangan_ud`
--
ALTER TABLE `tb_laporan_keuangan_ud`
  ADD PRIMARY KEY (`id_laporan_keuangan`);

--
-- Indeks untuk tabel `tb_laporan_keuangan_uj`
--
ALTER TABLE `tb_laporan_keuangan_uj`
  ADD PRIMARY KEY (`id_laporan_keuangan_uj`);

--
-- Indeks untuk tabel `tb_laporan_pengeluaran`
--
ALTER TABLE `tb_laporan_pengeluaran`
  ADD PRIMARY KEY (`id_laporan_pengeluaran`);

--
-- Indeks untuk tabel `tb_nikah`
--
ALTER TABLE `tb_nikah`
  ADD PRIMARY KEY (`id_nikah`);

--
-- Indeks untuk tabel `tb_pembangunan`
--
ALTER TABLE `tb_pembangunan`
  ADD PRIMARY KEY (`id_pembangunan`);

--
-- Indeks untuk tabel `tb_pemimpin_lagu`
--
ALTER TABLE `tb_pemimpin_lagu`
  ADD PRIMARY KEY (`id_pemimpin_lagu`);

--
-- Indeks untuk tabel `tb_pemuda`
--
ALTER TABLE `tb_pemuda`
  ADD PRIMARY KEY (`id_pemuda`);

--
-- Indeks untuk tabel `tb_pengurus_inti`
--
ALTER TABLE `tb_pengurus_inti`
  ADD PRIMARY KEY (`id_pengurus_inti`);

--
-- Indeks untuk tabel `tb_rumah tangga`
--
ALTER TABLE `tb_rumah tangga`
  ADD PRIMARY KEY (`id_rumah_tangga`);

--
-- Indeks untuk tabel `tb_rumah_tangga`
--
ALTER TABLE `tb_rumah_tangga`
  ADD PRIMARY KEY (`id_rumah_tangga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_baptis`
--
ALTER TABLE `tb_baptis`
  MODIFY `id_baptis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_bwa`
--
ALTER TABLE `tb_bwa`
  MODIFY `id_bwa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_depart_anak`
--
ALTER TABLE `tb_depart_anak`
  MODIFY `id_depart_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_depart_penata_layanan`
--
ALTER TABLE `tb_depart_penata_layanan`
  MODIFY `id_depart_pl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_depart_sekolah_sabat`
--
ALTER TABLE `tb_depart_sekolah_sabat`
  MODIFY `id_depart_ss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_diakon`
--
ALTER TABLE `tb_diakon`
  MODIFY `id_diakon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_diakones`
--
ALTER TABLE `tb_diakones`
  MODIFY `id_diakones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_komunikasi`
--
ALTER TABLE `tb_komunikasi`
  MODIFY `id_komunikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kostor`
--
ALTER TABLE `tb_kostor`
  MODIFY `id_kostor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_laporan_keuangan_ud`
--
ALTER TABLE `tb_laporan_keuangan_ud`
  MODIFY `id_laporan_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_laporan_keuangan_uj`
--
ALTER TABLE `tb_laporan_keuangan_uj`
  MODIFY `id_laporan_keuangan_uj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_laporan_pengeluaran`
--
ALTER TABLE `tb_laporan_pengeluaran`
  MODIFY `id_laporan_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_nikah`
--
ALTER TABLE `tb_nikah`
  MODIFY `id_nikah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_pembangunan`
--
ALTER TABLE `tb_pembangunan`
  MODIFY `id_pembangunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pemimpin_lagu`
--
ALTER TABLE `tb_pemimpin_lagu`
  MODIFY `id_pemimpin_lagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pemuda`
--
ALTER TABLE `tb_pemuda`
  MODIFY `id_pemuda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pengurus_inti`
--
ALTER TABLE `tb_pengurus_inti`
  MODIFY `id_pengurus_inti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_rumah tangga`
--
ALTER TABLE `tb_rumah tangga`
  MODIFY `id_rumah_tangga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_rumah_tangga`
--
ALTER TABLE `tb_rumah_tangga`
  MODIFY `id_rumah_tangga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
