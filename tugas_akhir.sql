-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 06:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul`, `deskripsi`, `foto`, `keterangan`, `point`) VALUES
(1, 'KAMI ADALAH ALUMNI REKAYASA PERANGKAT LUNAK', 'Dalam industri teknologi yang terus berkembang dengan cepat, alumni rekayasa perangkat lunak yang lulus pada tahun 2023 akan menjadi aset yang sangat berharga bagi perusahaan dan organisasi yang mencari talenta teknologi yang terampil dan inovatif.', 'Konten Instagram Kolase Foto Sederhana Minimalis Hitam Putih (3).png', 'Mereka akan mampu bekerja secara mandiri atau dalam tim, memiliki kemampuan untuk berkomunikasi dengan jelas dan efektif, serta mampu mengelola proyek dengan baik. Selain itu, mereka juga memiliki kemampuan untuk terus belajar dan beradaptasi dengan teknologi terbaru dan tren industri.', 'Kreatif,  Solidaritas Yang Tinggi,  Pengalaman kerja,  Keterampilan teknis, Prestasi dan penghargaan,  Bekerja Sama Dengan Tim');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `nisn` varchar(12) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `motto` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `nama_universitas` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`nisn`, `nama_lengkap`, `email`, `alamat`, `pekerjaan`, `nama_perusahaan`, `motto`, `foto`, `password`, `angkatan`, `prodi`, `nama_universitas`, `no_hp`) VALUES
('112233444', 'Novan Sahar Ramadan', 'Novan@gmail.com', 'Banjar-Langen', 'Freelancer', 'PT Mega Jaya', 'Semua dimulai dari sini, tapi tak akan berakhir di sini', '6461e671ccbf0.jpg', '2f7b52aacfbf6f44e13d27656ecb1f59', 2022, 'Akuntansi', 'Universitas Indonesia', '08123432123344'),
('12345111110', 'puji isnanto', 'haipuji@gmail.com', 'banjar', 'data analis', 'OpenAI Technologies Inc.', '&quot;Jadilah versi terbaik dari dirimu yang kemarin.&quot;', '6461ea778cf62.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'teknik informatika', 'University of Zurich (Swiss)', '089838011122'),
('1234512345', 'kamaliyatun', 'kamal@gmail.com', 'banjar', 'atlet', 'pt.djarum', '&quot;Keberanian adalah memulai tanpa jaminan kesuksesan.&quot;', '6461e89acf236.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'atlet ', 'pt. djarum', '0863251109'),
('12345123451', 'yuda saputra', 'yuda@gmail.com', 'ciamis', '', '', '&quot;Jadilah inspirasi bagi orang di sekitarmu.&quot;', '6461e5f39bfaf.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, '', '', '086376255222'),
('12345123452', 'teguh tri widodo', 'teguh@gmail.com', 'banjar', '', '', '&quot;Hidupmu adalah karya seni, buatlah menjadi yang indah.&quot;', '6461e663ece29.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, '', '', '08737636255222'),
('12345123453', 'naila nofianti', 'naila@gmail.com', 'ciamis', 'pengusaha', 'pt.abadi', '&quot;Berani mengambil risiko, berani mengubah hidupmu.&quot;', '6461e7487d638.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'managemen keuangan', 'universitas indonesia', '08747664664'),
('12345123454', 'geo prima jovi', 'geo@gmail.com', 'ciamis', 'data analys', 'PT Garuda Indonesia (Persero) Tbk', '&quot;Kebahagiaan ada di dalam perjalanan, bukan hanya di akhir tujuan.&quot;', '6461e8188a2e5.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'data analisis', 'universitas gajah mada', '087376636262'),
('12345123456', 'rikki maulana guffron', 'rikki@gmail.com', 'banjar', 'penguasa tambah', 'pt.perikanan indonesia', '&quot;Ketekunan adalah kunci utama meraih impianmu.&quot;', '6461e9340197a.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'perikanan', 'universitas  padjajaran', '0877366466464'),
('123456789', 'Ari', 'Ari@gmail.com', 'Jl. Diponegoro No. 1, Jakarta Pusat', 'Manager Keuangan', 'PT Mega Jaya', ' &quot;Ketika kamu menetapkan pikiran untuk mencapai sesuatu, kamu harus memberi kesempatan dirimu sendiri untuk menyelesaikannya.&quot;', 'Ari Firmansyah.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'Akuntansi', 'Universitas Indonesia', '08123432123'),
('12412432435', 'Mario Mulyana', 'Mario@gmail.com', 'Banjar', 'Manager Keuangan', 'Amazon.com, Inc.', ' &quot;Besar kecilnya masalah yang ada di hidupmu, percayalah bahwa Tuhan pasti ada bersamamu.&quot;', '6461e36b38a96.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'Akuntansi', 'Stanford University', '085373456673'),
('135790864', 'Agus Dwi Sugiarto', 'Agus@gmail.com', 'Jl. Sudirman No. 4, Jakarta Selatan', 'Pengusaha', 'PT Sukses Makmur', '&quot;Jangan pernah menyerah pada kegagalan, karena kegagalan adalah pelajaran berharga untuk sukses.&quot;', 'Agus Dwi Sugiarto.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'Manajemen Bisnis', 'Universitas Trisakti', '0898408442'),
('1988489484', 'prasetyanto tri prabowo', 'bowo@gmail.com', 'banjar', 'freelancer', 'pt.abadi', '&quot;Kegagalan adalah pelajaran berharga untuk meraih kesuksesan.&quot;', '6461ebb4c3b74.jpeg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'programmer', 'unversitas indonesia', '08736636333'),
('232323232', 'Rofina Afriani', 'Rofina12@gmail.com', 'Ciamis-Lakbok', 'Selebgaram', 'Instagram', ' &quot;Pergi karena tugas, pulang karena beras.&quot;', '645ca175bd1b3.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'siswa', 'SMK', '08253617217'),
('23536457774', 'Yudi Ardianto', 'YudiArdianto@gmail.com', 'Cikawung', '', 'PT Mega Jaya', ' &quot;Bermimpilah sesuka hati tentang apa yang kamu inginkan, sebab itu hanya mimpi.&quot;', '645ca47e1d96f.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'Akuntansi', 'University of Cambridge', '0836647343833'),
('2425364757', 'Fina Luthfiyyatul Hamidah', 'Finannn@gmail.com', 'Ciamis-Majingklak', 'Aktris', 'Instagram', '&quot;Dia yang tahu, tidak bicara. Dia yang bicara, tidak tahu.&quot;', '645ca2f98b2b4.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'Teknik Informatika', 'Yale University', '087356283578'),
('246813579', 'Ali Ramdani', 'aliramdani@hotmail.com', ' Jl. Menteng No. 3, Jakarta Pusat', 'Aktris', ' PT Seni Budaya', '&quot;Jangan pernah takut untuk bermimpi, karena mimpi adalah awal dari segala kesuksesan.&quot;', 'Ali Ramdani.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, ' Sastra Inggris', 'Universitas Indonesia', '083773611'),
('2636237222', 'Faqih Shohih Qorbi', 'Qorby@gmail.com', 'Ciamis-Cikawung', 'Ilmu Politik', 'Facebook, Inc.', ' &quot;Emas dan perak akan kalah nilainya dengan kesehatan.&quot;', '6461e47335dee.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'Ilmu Komputer', 'Princeton University', '082321323288'),
('27374288822', 'soni sudrajat', 'soni@gmail.com', 'Banjar', 'Freelancer', 'PT Mega Jaya', '&quot;Hidup akan lebih sempurna saat memiliki kesehatan yang bagus.&quot;', '6461e4f3418ac.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'Teknik Informatika', 'Universitas Indonesia', '08123432123'),
('2781900288', 'Irva Nurhajizah', 'Irva@gmail.com', 'Ciamis', '', 'PT Mega Jaya', '&quot;Hidup itu sederhana, ketika sudah membuat pilihan, tidak perlu menoleh ke belakang.&quot;', '6461e9303a9d8.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'Teknik Informatika', ' Universitas Padjajaran', '081232399022'),
('31723462882', 'Anisa Kumalasari', 'Anisa@gmail.com', 'Langensari', 'Selebgaram', 'PT Laubwa', '&quot;Balas dendam terbaik adalah dengan menunjukkan kesuksesan yang hakiki.&quot;', '6461ea36f1313.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'Akuntansi', 'Universitas Indonesia', '08543382999'),
('3172981111', 'Aftiatunisa', 'Aftiatun@gmail.com', 'Banjar', 'Manager Keuangan', 'Apple Inc', '&quot;Bekerja keraslah, bermimpilah lebih besar dan jadilah yang terbaik.&quot;', 'Aftiatunisa.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'Akuntansi', 'Harvard University', '085372839299'),
('3172981112', 'Muhammad Nabil Pasha Radhitya', 'muhammadnabilpasharadhitya@gmail.com', 'Ciamis-Lakbok', 'Freelancerr', 'PT Laubwa', '&quot;Miliki keyakinan yang tak tergoyahkan pada dirimu untuk menjadi semua yang kamu inginkan.&quot;', 'M.Nabil Pasha Radhitya.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'Teknik Informatika', 'University of California, Berkeley', '09859847747'),
('3172981776', 'Satrya Mulya Ramadhan', 'Satrya@gmail.com', 'Wanarja', 'Manager Keuangan', 'PT Mega Jaya', 'jadilah orang yang berharga untuk orang lain', '6461e7a792799.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, ' Sastra Inggris', 'Universitas Trisakti', '08537345622'),
('317298333', 'Wahyu Samsul Arifin', 'Wahyu@gmail.com', 'Manganti', 'Manager Keuangan', 'Coca-Cola Company', '&quot;Kebahagiaan tidak akan pernah datang kepada mereka yang gagal menghargai berkat yang sudah mereka miliki.&quot;', '6461e87d07d3c.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'Akuntansi', 'Universitas Indonesia', '085373456344'),
('31757773991', 'Tantia Kusnadewi', 'Tantia@gmail.com', 'Manganti', 'Manager Keuangan', 'Instagram', '&quot;jangan menyerah sebelum mencoba&quot;', '6461e8c883c24.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'Teknik Informatika', 'Universitas Trisakti', '0898408442'),
('3435465768', 'Intan Fatimah', 'Intannn@gmail.com', 'Ciamis-Betekong', 'Selebgaram', 'Instagram', '&quot;Masa depan itu bagaimana nanti, masa depan itu nanti bagaimana, jadi bingung.&quot;', '645ca24139b00.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'siswa', 'SMK', '08378238723'),
('3535547464', 'Gerin Sela Romdoni', 'Gerin@gmail.com', 'banjar', 'Freelancerr', 'PT Laubwa', '&quot;jangan menyerah sebelum mencoba&quot;', 'Gerin Sela Romdoni.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'siswa', 'smk', '083120743665'),
('5050500', 'yakub fathurahman', 'yakub@gmail.com', 'ciamis', '', '', '&quot;Berani mencoba, berani gagal, berani bangkit kembali.&quot;', '6461e503400c1.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, '', '', '087367367363'),
('536635622', 'Dinar Annisa Zahra', 'Dinar@gmail.com', 'banjar', 'Freelancer', 'Coca-Cola Company', '&quot;belajar bersungguh- sungguh demi menggapai cita-cita&quot;', 'Dinar Annisa Zahra.jpg', 'b59c67bf196a4758191e42f76670ceba', 2022, 'Arsitektur', 'California Institute of Technology (Caltech)', '086373663553'),
('5366733883', 'Diana Rizki', 'diana@gmail.com', 'bandung', 'Freelancer', '', 'ayo hidup ', 'Diana Rizqi.jpg', 'b59c67bf196a4758191e42f76670ceba', 2012, 'siswa', 'smk', '08374746644'),
('73772838283', 'Majinatun Nisa', 'Nisa@gmail.com', 'Wanarja', 'Selebgaram', 'Coca-Cola Company', '“Tidak ada yang tidak berhasil jika kamu melakukannya dengan sungguh-sungguh.” - Maya Angelou', '6461e5647708b.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'Akuntansi', 'Universitas Trisakti', '083237459444'),
('92342445324', 'Alika Apriliani', 'Alika@gmail.com', 'Langensari', 'Manager Keuangan', 'Coca-Cola Company', ' &quot;Ciptakan sebuah kehidupan yang terasa baik di dalam, bukan hanya yang terlihat bagus dari luar.&quot;', '6461e9dd792f5.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, ' Sastra Inggris', '', '083627122'),
('94884773633', 'Lukman Nur Hakim', 'Lukman@gmail.com', 'banjar', 'Manager Keuangan', 'PT Mega Jaya', '&quot;Tinggalkan pikiran yang membuat lemah dan peganglah pikiran yang memberi kekuatan.&quot;', 'Lukman Nurhakim.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'Akuntansi', 'Universitas Indonesia', '08372382889'),
('98765432122', 'Dika Cahya', 'dika@yahoo.com', ' Jl. Pemuda No. 2, Bandung', 'Programer', 'PT Teknologi Terbaru', '&quot;Berusaha dan berdoa, semua bisa terwujud.&quot;', 'Dika Cahya Nugraha.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'Teknik Informatika', ' Universitas Padjajaran', '0873636346544'),
('987654321223', 'Rhomi Jus Saropi Roj Biyi', 'Rhomi@gmail.com', 'Banjar-Langkap', 'Manager Keuangan', 'Coca-Cola Company', '&quot;Kesederhanaan adalah sumber kedamaian.&quot;', '6461e71ea3c1e.jpg', 'b59c67bf196a4758191e42f76670ceba', 2021, 'Teknik Informatika', 'Universitas Indonesia', '0853728323');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id`, `judul`, `foto`) VALUES
(1, 'REKAYASA PERANGKAT LUNAK', 'IMG-20230511-WA0000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `judul`, `alamat`, `deskripsi`, `email`, `no_hp`, `instagram`) VALUES
(1, 'Daftar ALumni', 'Jl. Julaeni, Langensari, Kec. Langensari, Kota Banjar, Jawa Barat 46324', 'Dengan latar belakang pendidikan dan pengalaman kerja yang kuat, alumni Rekayasa Perangkat Lunak siap untuk mengambil peran penting dalam mengembangkan solusi teknologi informasi yang inovatif dan membantu mendorong kemajuan industri secara keseluruhan.', 'banjar@gmail.com', '087366746644', 'https://www.instagram.com/smkn3banjarhitz/');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '1admin23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
