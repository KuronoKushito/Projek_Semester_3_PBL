-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2023 pada 16.23
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Bambang', 'admin', '0192023a7bbd73250516f069df18b500'),
(12, 'Sutrisno', 'sutris', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `gambar_berita` varchar(50) DEFAULT NULL,
  `tgl_berita` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_admin`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`) VALUES
(6, 12, 'Mini Expo SMANTAKS 2023', 'mini-expo-smantaks-2023', '<p>Di desa Gunung Makmur tepatnya di SMA Negeri 1 Takisung telah selesai diadakan Mini Expo SMANTAKS 2023, selama dua hari yaitu pada tanggal 12-13 januari 2023 pada kegiatan tersebut dibuka bapak Sutiyo selaku kepala sekolah Sma Negeri 1 Takisung dan kegiatan ini di isi dengan beberapa kegiatan diantaranya, pentas pertunjukkan seni rupa kerajinan tangan hasil karya dari para siswa Sma Negeri 1 Takisung seperti miniatur dari replika rumah adat dan alat transportasi umum, selain itu juga turut dipamerkan kain sasirangan khas kalimantan yang tentunya juga dibuat oleh para siswa di Sma Negeri 1 Takisung. Kegiatan Mini Expo ini juga dimeriahkan dengan tampilan kesenian tari dan drama selain itu juga acara ini dihadiri oleh para tamu undangan seperti bapak Muhammad Luthfi Akbar, S.IP selaku Sekretaris Camat takisung, kepala desa setempat, dan para tamu undangan yang terdiri dari perwakilan seluruh Smp yang ada di Takisung dan para alumni Sma Negeri 1 Takisung.</p>\r\n', '123(1).jpg', '2023-10-16'),
(9, 1, 'Perayaan Hut RI', 'perayaan-hut-ri', '<p>Dalam Rangka perayaan Hut RI yang ke 78 dengan tema &ldquo;Terus Melaju Untuk Indonesia Maju&rdquo;. Tema tersebut memiliki latar belakang yang kuat, dimana pencapaian yang telah diraih negara Indonesia dipandang sangat baik oleh dunia. Dengan ini Sma Negeri 1 Takisung megadakan kegiatan runtinitas khas setiap perayaan Hut RI yaitu karnaval yang diikuti selururuh siswa, staf dan guru, kegiatan ini disambut dengan antusias yang sangat tinggi diliat dari banyaknya kreativitas yang ditampilkan para siswanya melalui kostum kostum yang mereka kenakan, Bapak sulistyo selaku kepala sekolah berharap melalui kehiatan ini mampu terus menumbuhkan nilai nilai juang dan semangat dalam meraih prestasi dan mewujudkan cita-cita para siswa Sma Negeri 1 Takisung dan dapat memotivasi banyak orang.</p>\r\n', '20220819_073439(1).jpg', '2023-10-18'),
(10, 1, 'Siswa SMA Negeri 1 Takisung mengikuti pemecahan rekor muri 10 ribu pesilat KAL-SEL', 'siswa-sma-negeri-1-takisung-mengikuti-pemecahan-rekor-muri-10-ribu-pesilat-kal-sel', '<p>Pemerintah Provinsi Kalimantan Selatan melalui Dinas Kepemudaan dan Olahraga Kalsel tengah menyiapkan 10 ribu pesilat untuk melakukan pemecahan Museum Rekor Dunia Indonesia (MURI) pada cabang olahraga pencak silat. Pemecahan Rekor MURI silat nantinya akan dilaksanakan bertepatan dengan peringatan Hari Sumpah Pemuda pada Sabtu, 28 Oktober 2023 di halaman Kantor Gubernur Kalsel di Banjarbaru. Gubernur Kalsel H. Sahbirin Noor pun mengajak para pesilat-pesilat di Banua untuk bersama-sama memecahkan rekor MURI dengan mengumpulkan 10 ribu lebih pesilat berlatih bersama. Dalam hal ini Siswa SMA Negeri 1 Takisung juga turut ambil andil dalam mengikuti pemecahan rekor muri 10 ribu pesilat KAL-SEL.</p>\r\n', 'Screenshot_2023-12-06_212007.png', '2023-12-06'),
(11, 1, 'Ekstrakulikuler baru', 'ekstrakulikuler-baru', '<p>Drum band adalah sekelompok barisan orang yang memainkan satu atau beberapa lagu dengan menggunakan sejumlah kombinasi alat musik (tiup, perkusi, dan sejumlah instrumen pit) secara bersama-sama. Kemudian Pengembangan drumband pada tingkat siswa SMA memiliki manfaat yang signifikan yaitu Pengembangan Keterampilan Musikal Siswa dapat mengembangkan keterampilan musikal mereka dan belajar menghargai seni musik perkusi selain itu juga dpat melatih Kerja Sama Tim karena Drumband membutuhkan kerja sama tim yang erat. Sedangkan Drum band sendiri di Sma Negeri 1 Takisung masih merupakan ekstrakulikuler yang baru, dibawah pelatihan bapak Datuya Wangbang Ekstrakulikuler ini sudah berjalan kurang lebih 1 tahun telah terbentuk sejak tahun 2022. Meliahat dari banyaknya peminat ekstrakulikuler ini kepala sekolah mendukung penuh pembentukan ekstrakulikuler ini</p>\r\n', 'drumband.jpg', '2023-12-06'),
(12, 1, 'Memberantas prilaku perundungan disekolah', 'memberantas-prilaku-perundungan-disekolah', '<p>Perundungan ataupun <em>bullying </em>menjadi salah satu dari tiga dosa besar di dunia pendidikan, yang menjadi salah satu fokus Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) untuk ditangani. Dua unit dari Kemendikbudristek yang paling terlibat dalam program pencegahan dan penanganan perundungan adalah Pusat Pengembangan Karakter (Puspeka) untuk pencegahan, dan Inspektorat Jenderal&nbsp; (Itjen) untuk penanganan. Walaupun telah banyak kasus perundungan terungkap, ternyata semakin ditelisik, semakin diketahui bahwa semua kasus tersebut hanyalah puncak gunung es. Hal tersebut diungkap dalam Rapat Koordinasi Pengawasan (Rakorwas) Praktik Kekerasan di Dunia Pendidikan yang digelar oleh Itjen pada Februari 2023 lalu. Di satuan pendidikan, masih banyak sekali perundungan ataupun bibit perundungan yang terjadi, dan inilah yang menjadi pekerjaan rumah bersama, tidak hanya bagi Kemendikbudristek, namun juga guru, kepala sekolah, komite sekolah, orang tua siswa, maupun siswa itu sendiri. Dengan ini Sma Negeri 1 Takisung berupaya keras untuk melakukan pencegaran prilaku perundungan dengan cara meningkatkan kesadaran dan pemahaman siswa tentang dampak buruk dari tindakan perundungan. Dengan ini Sma Negeri 1 Takisung memiliki program pencegahan yang efektif dan dapat memfasilitasi diskusi terbuka tentang perundungan, serta mengajarkan keterampilan sosial untuk membangun hubungan yang sehat dengan teman sekelas.</p>\r\n', 'sad.jpeg', '2023-12-07'),
(15, 1, 'Upacara Hari Pramuka', 'upacara-hari-pramuka', '<p>Di gunung Makmur pada 14 agustus telah halaman sekolah Sma Negeri 1 Takisung telah dilakukan apel pagi dalam rangka Peringatan Hari Pramuka Nasional. Hari pramuka tahun ini memiliki tema yang dimuat Dalam SK yang sama, disebutkan bahwa Kwartir Nasional mengusung tema besar pada Hari Pramuka ke-62 tahun 2023 ini, yaitu &quot;Sumber Daya Manusia yang Profesional dan Proporsional&quot;.</p>\r\n', 'logo.png', '2023-12-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `nama_guru` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pendidikan` varchar(10) DEFAULT NULL,
  `foto_guru` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `id_mapel`, `id_admin`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `pendidikan`, `foto_guru`) VALUES
(2, 7, 1, '19720701 199702 1 002', 'Sutiyo,S.pd', 'Batola', '1972-04-06', 'S1', 'upcrabagiangru26.jpg'),
(3, 2, 1, '19800215 200604 1 009', 'Sulistiyanto, S. Pd  ', 'Batang', '1980-10-05', 'S1', 'upcrabagiangru25.jpg'),
(4, 7, 1, '19810507 200801 1 014', 'Iswadi, S. Pd', 'Tanah Laut', '1981-10-05', 'S1', 'upcrabagiangru24.jpg'),
(6, 17, 1, '19691013 200801 2 013', 'Halisah, S. Pd ', 'Brebes', '1982-12-02', 'S1', 'upcrabagiangru23.jpg'),
(7, 18, 1, '19810603 200801 1 019', 'Awaluddin, S. Pd', 'Barabai', '1981-10-06', 'S1', 'upcrabagiangru22.jpg'),
(8, 19, 1, '19830626 200803 1 001', 'Datwya Wangbang S, M.Pd', 'Blora', '0000-00-00', 'S2', 'upcrabagiangru21.jpg'),
(9, 8, 1, '19700131 200604 1 007', 'Agus Salim, S. Pd', 'Malang', '1970-01-31', 'S1', 'upcrabagiangru20.jpg'),
(10, 20, 1, '19720818200701 2 013', 'Agustina Yanne. S.pd', 'medan', '1972-08-22', 'S1', 'upcrabagiangru19.jpg'),
(11, 21, 1, '9780522 200801 2 019', 'Herlina, S. Pd ', 'Tanah Laut', '1885-02-25', 'S1', 'upcrabagiangru18.jpg'),
(12, 17, 1, '19810418 200604 2 013', 'Titin Mariyani, S. Pd ', 'Barabai', '1981-04-18', 'S1', 'upcrabagiangru.jpg'),
(13, 2, 1, '19790204 201406 2 003', 'Fatimah, S.Pd.M.Pd', 'Tanah Laut', '1979-04-02', 'S2', 'upcrabagiangru1.jpg'),
(14, 2, 1, '19820522 200801 2 021', 'Revina Budhi Ani, S. Pd   ', 'Hulu Sungai Selatan', '1982-05-22', 'S1', 'upcrabagiangru2.jpg'),
(15, 23, 1, '19850617 201001 2 013', 'Fitria Yunita, S. Pd  ', 'Batola', '1985-06-17', 'S1', 'upcrabagiangru3.jpg'),
(16, 1, 1, '19820420 200604 2 17', 'Sri Mugiyoningsih, M. Pd ', 'Tanah Laut', '1982-04-20', 'S2', 'upcrabagiangru4.jpg'),
(17, 4, 1, '19840622 200903 2 007', 'Fairawati, S.pd', 'Banjarnegara', '1984-04-22', 'S1', 'upcrabagiangru5.jpg'),
(18, 24, 1, '19820921 200903 2 007', 'Rina Suwarni, S. Pd ', 'Banjarbaru', '1982-09-21', 'S1', 'upcrabagiangru6.jpg'),
(19, 21, 1, '19810624 201001 2 007', 'Ida Fahriani,S.Pd ', 'Tanah Laut', '1981-06-24', 'S1', 'upcrabagiangru7.jpg'),
(20, 3, 1, '19910202 201502 1 003', 'Ari Santoso, S Pd ', 'Tanah Laut', '1991-02-02', 'S1', 'upcrabagiangru8.jpg'),
(21, 1, 1, '19931006 201903 2 022', 'Eef Asiskawati, S.Pd  ', 'Tanah Laut', '1993-06-10', 'S1', 'upcrabagiangru9.jpg'),
(22, 22, 1, '19841122 202221 2 005', 'Nida Sarimadinah, S. Pd. I ', 'Banjarmasin', '1984-11-22', 'S1', 'upcrabagiangru10.jpg'),
(23, 4, 1, '19691013 200801 2 013', 'Like Prabowo, S. Pd', 'Tanah Laut', '1990-01-12', 'S1', 'upcrabagiangru11.jpg'),
(24, 22, 1, '19700131 200604 1 007', 'Sukani, S. Pd. I', 'Tanah Laut', '1991-12-02', 'S1', 'upcrabagiangru12.jpg'),
(25, 25, 1, '19720818200701 2 013', 'Budiono, S.Pd', 'Tanah Laut', '1991-02-13', 'S1', 'upcrabagiangru13.jpg'),
(26, 14, 1, '19820802 202221 1 003', 'Kasmani, S.Pd.I ', 'Tanah Laut', '1982-02-08', 'D3', 'upcrabagiangru14.jpg'),
(27, 25, 1, '6301021805880001', 'Fitriansyah, S. Pd ', 'Tanah Laut', '1996-08-23', 'S1', 'upcrabagiangru15.jpg'),
(28, 18, 1, '6398765432125409', 'Rizki Yulistirani, S.Pd', 'Tanah Laut', '1993-12-20', 'S1', 'upcrabagiangru16.jpg'),
(29, 7, 1, '19890717 202221 2 005', 'Nelly Ernida, S.Pd ', 'Barabai', '1989-07-17', 'S1', 'upcrabagiangru17.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_galeri` int(11) DEFAULT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id_foto`, `id_galeri`, `ket_foto`, `foto`) VALUES
(19, 1, 'penyerahan hadiah untuk siswa terbaik', 'pesantren_kilat.jpg'),
(20, 1, 'penyerahan hadiah untuk siswa terbaik', 'kilat.jpg'),
(21, 1, 'Sholat Duha bersama', 'pkilat.jpg'),
(22, 2, 'latihan bersama', 'silatttt.jpg'),
(23, 2, 'latihan bersama', '20231007_091000(2).jpg'),
(24, 2, 'latihan bersama', '20231003_173110(1).jpg'),
(25, 4, 'Kepala Sekolah mendampingi para tamu', '123(1).jpg'),
(26, 4, 'para Siswa unjuk bakat pada acara mini expo', '20230112_103619(1).jpg'),
(27, 6, 'kegiatan belajar dikelas', 'bljrdklas.jpg'),
(28, 6, 'suasana belajar dikelas', 'bljrdkls.jpg'),
(29, 7, 'Barisan para guru', 'upcrabagiangru.jpg'),
(30, 7, 'siswa', 'upacaraharipramuka.jpg'),
(32, 8, 'Tim voli putra', 'vli1.jpg'),
(33, 8, 'Tim voli putri', 'vlp.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `nama_galeri` varchar(50) NOT NULL,
  `sampul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_admin`, `nama_galeri`, `sampul`) VALUES
(1, 1, 'Kegiatan pesantren Kilat ', 'pembukaan.jpg'),
(2, 1, 'Latihan Silat', 'silat.png'),
(4, 1, 'Mini Expo Smantaks 2023', '20230112_115707(1).jpg'),
(6, 1, 'kegiatan belajar mengajar', 'alam(1)(1)(1)(1).jpg'),
(7, 1, 'Apel pagi peringatan hari Pramuka ke 62', 'logo.png'),
(8, 1, 'Tim voli Smantaks 2023', 'Screenshot_2023-12-07_062613.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Matematika'),
(2, 'Bahasa Indonesia'),
(3, 'Seni Budaya'),
(4, 'Bahasa Inggris'),
(5, 'Ilmu Pengetahuan Alam'),
(7, 'Fisika'),
(8, 'Kimia'),
(14, 'Teknologi Informasi'),
(17, 'Ekonomi'),
(18, 'Sejarah Indonesia'),
(19, 'Geografi'),
(20, 'Biologi'),
(21, 'Bimbingan Konseling'),
(22, 'pendidikan agama Islam'),
(23, 'Sosiologi'),
(24, 'Pendidikan kewarganegaraan'),
(25, 'PJOK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `tgl_pengumuman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `id_admin`, `judul_pengumuman`, `isi_pengumuman`, `tgl_pengumuman`) VALUES
(2, 1, 'Libur semester', 'Libur semester di mulai pada tanggal\r\n20 agustus sampe sekian', '2023-12-16'),
(21, 1, 'Persiapan besok olahraga', '<p>Manusia hidup sekali terus mati berkali kali lalu hidup lagi abadi</p>', '2023-12-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `kepala_sekolah` varchar(30) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `foto_kepsek` varchar(255) DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `sejarah` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_sekolah`, `alamat`, `no_telepon`, `kepala_sekolah`, `nip`, `foto_kepsek`, `visi`, `misi`, `sejarah`) VALUES
(1, 'SMAN 1 TAKISUNG', 'Gn. Makmur, Takisung, Kabupaten Tanah Laut, Kalimantan Selatan 70861', '082913919191', 'Sutiyo,S.pd ', '19720701 199702 1 00', '33236.jpg', '<p>Berakhlak Mulia,Berprestasi,Kreatif</p>', '<p>1. Meningkatkan Penghayatan Terhadap Ajaran Agama</p><p>2. Melaksanakan Pembelajaran dan Bimbingan Yang Efektif Dengan Optimal</p><p>3. Mengoptimalkan Penerapan Program Sekolah Secara Efektif Dan Kompetitif</p><p>4. Membantu Peserta Didik Untuk Mengenal Potensi Dirinya Agara Berkembang Baik</p><p>5. Membantu Memotivasi Kreativitas Peserta DIdik Dibidang Akademik Dan Non Akademik</p>', '<p>SMA NEGERI 1 TAKISUNG tepat nya terletak di Desa Gunung Makmur Kec. Takisung Kab. Tanah Laut.</p><p>SMA NEGERI 1 TAKISUNG adalah sekolah yang letaknya sangat strategis berdekatan dengan tempat wisata Pantai Takisung dan tak kalah menariknya, suasana yang begitu tenang sejuk tanpa polusi,, jauh dr keramaian jalan rasa membuat suasana belajar menjadi tenang dan nyaman.apalagi gedung gedung ruang kelas semua baru masih terjaga kebersihannya tata bangunan semuanya tertata rapi disesuaikan dengan fungsi ruangan...</p><p>Hal lain yg membuat nyaman adalah lingkungan disekeliling sekolah bagai melihat alam bebas yg masih alami dan sejuk karena pepohonan pepohonan yg masih banyak,, salah satunya pohon durian ... yg setiap musim berbuah anak anak rame pada nunggu buah durian jatuh tuk dinikmatin rame rame hahaha pokok na seru abiess.itu baru sebagian belum masalah pendidikannya dan kegiatan ekstrakulikuler nyaa jg banyak disana ..pokoknya ampe kriting law nyeritain tentang SMA NEGERI 1 TAKISUNG</p>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_galeri` (`id_galeri`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD CONSTRAINT `data_guru_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `data_guru_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`id_galeri`) REFERENCES `galeri` (`id_galeri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `pengumuman_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
