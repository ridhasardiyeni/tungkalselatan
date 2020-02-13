-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2018 at 12:17 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `aparatur`
--

CREATE TABLE IF NOT EXISTS `aparatur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aparatur`
--

INSERT INTO `aparatur` (`id`, `title`, `foto`, `keterangan`) VALUES
(1, 'Kepala Desa', '2018-01-27_Kepala Desa Tungkal Selatan_icon.png', 'Rahayadi Nigrad,S.Pd.I');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(10000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `keterangan`, `foto`, `tanggal`) VALUES
(2, 'Langkah Pemkot Pariaman kurangi bencana kebakaran', '<p>Pariaman, (Antaranews Sumbar) - Pemerintah Kota Pariaman, Sumatera Barat, melalui Dinas Satuan Polisi Pamong Praja dan Pemadam Kebakaran mengedukasi pelajar tentang penanggulangan bencana kebakaran, salah satu cara menggunakan Alat Pemadam Api Ringan (Apar).<br /><br />"Kegiatan mengedukasi anak didik tentang cara penggunaan alat pemadam api ringan dinilai penting agar mengetahui sejak dini cara penanggulangan apabila terjadi kebakaran," kata Kepala Dinas Satuan Polisi Pamong Praja dan Pemadam Kebakaran Kota Pariaman, Handrizal Fitri, di Pariaman, Kamis.<br /><br />Ia mengatakan sasaran edukasi kali ini adalah anak pendidikan usia dini. Lebih kurang 80 anak PAUD yang diberikan pengetahuan cara menggunakan alat pemadam api ringan, cara menghubungi pemadam kebakaran dan cara menyelamatkan diri apabila terjadi kebakaran.<br /><br />Pemberian pengetahuan tersebut tidak hanya berupa materi, namun sekaligus dilakukan simulasi kepada anak PAUD cara memadamkan api menggunakan alat pemadam ringan.<br /><br />"Simulasi ini dilakukan dengan tujuan agar mereka bisa merasakan langsung dan memahami apa yang perlu dilakukan jika terjadi kebakaran," ujar dia.<br /><br />Dinas Satpol PP dan Pemadam Kebakaran akan berkoordinasi bersama Dinas Pendidikan Kota Pariaman agar pengetahuan cara penggunaan alat pemadam api ringan dapat dilakukan di seluruh tingkat pendidikan.<br /><br />Menurutnya pembelajaran terkait penggunaan alat pemadam api ringan dibutuhkan seluruh masyarakat dari berbagai elemen termasuk anak didik.<br /><br />"Kita berencana kegiatan mengedukasi ini dilakukan sejak dini secara berlanjut, sehingga mereka memiliki pengetahuan lebih apabila menghadapi situasi terburuk seperti kebakaran," katanya.<br /><br />Sementara itu Kepala Dinas Pendidikan Pemuda dan Olahraga Kota Pariaman Kanderi, mengatakan kegiatan pengenalan dan penggunaan alat pemadam api ringan dibutuhkan oleh anak didik.<br /><br />Pihaknya menilai kegiatan tersebut merupakan metode yang dinilai tepat dalam mengenalkan penggunaan alat pemadam api ringan kepada anak-anak.<br /><br />"Praktek secara langsung akan lebih memudahkan anak didik dalam memahami materi yang diberikan oleh instruktur," katanya.<br /><br />Pihaknya mengatakan akan melakukan koordinasi dengan Dinas Satuan Polisi Pamong Praja dan Pemadam Kebakaran agar kegiatan tersebut juga dilakukan pada seluruh tingkat pendidikan.</p>', '2018-01-28_Langkah Pemkot Pariaman kurangi bencana kebakaran_20171117Kerbakaran_Pasar_Aur.jpg', '0000-00-00 00:00:00'),
(3, 'Genius Motivasi Peserta Pariaman Campus Expo 2018  28.1.18  Redaksi', '<p>Pada kesempatan itu, Genius Umar memberi motivasi kepada seluruh peserta yang merupakan para calon mahasiswa.<br /><br />Ia menilai akan banyak keuntungan bagi calon mahasiswa dalam seminar Campus Expo 2018, khususnya bagi yang tengah mencari informasi pendaftaran kampus.<br /><br />Genius menyatakan saat ini para pemuda dihadapkan pada sejumlah tantangan global. Oleh sebab itu ia mengimbau agar mereka menyiapkan diri dengan pendidikan yang mumpuni untuk bersaing di era saat ini.<br /><br />"Tantangan kedepan cukup berat karena kita akan masuk dalam era perdagangan bebas tertama di tingkat ASEAN. Hal ini menjadi sebuah pertanyaan apakah kita mampu menghadapi era kemajuan seperti itu untuk bersaing dengan mereka?" ujar Genius.<br /><br />Jawabannya, sambung Genius, ada pada skill dan kemampuan siswa sendiri, juga komunikasi. Era perdagangan bebas menuntut daya saing tinggi. <br /><br />"Lanjutkan pendidikan ke jenjang yang lebih tinggi yakni universitas agar mampu bersaing dalam menyambut era perdagangan bebas tersebut," imbuhnya.<br /><br />Seminar juga menghadirkan narasumber. Di antaranya Ketua Panitia Lokal SBMPTN 17 Padang, Amril Amir dan Kepala Sekolah SMA/SMK se Kota Pariaman. Peserta umumnya berlatar siswa yang akan menamatkan studi belajar di SMA/SMK se Kota Pariaman. (Phaik/OLP)</p>', '2018-01-28_Genius Motivasi Peserta Pariaman Campus Expo 2018  28.1.18  Redaksi_-campus.jpg', '0000-00-00 00:00:00'),
(5, 'Polres Pariaman Tangkap Pengguna Shabu, Dua Masih Anak Bawah Umur', '<p>Polisi membekuk 4 orang remaja saat menggelar pesta shabu di salah satu rumah di Kelurahan Jawi-Jawi II Kecamatan Pariaman Tengah, Kota Parianan, Sabtu (8/4/2017) pukul 16.30 WIB.<br /><br />RN (22), warga Kelurahan Jawi-Jawi II merupakan salah satu yang ikut diciduk saat penangkapan tersebut. RN sendiri merupakan target operasi Satresnarkoba Polres Pariaman karena sepak terjangnya dalam peredaran narkoba.<br /><br />Sementara tiga orang lainnya, masing-masing, RP (16), warga Kelurahan Jawi-Jawi II, A (16), warga Desa Kampung Baru Kecamatan Pariaman Tengah dan&nbsp; FE (27), warga Nagari Gunung Padang Alai Kecamatan V Koto Timur, Padangpariaman.<br /><br />Kapolres Pariaman AKBP Rico Junaldy, S.IK menuturkan, penangkapan keempat tersangka berawal dari penyelidikan peredaran shabu oleh RN.<br /><br />"Setelah mendapatkan informasi, tim langsung bergerak ke TKP dan mengamankan keempat pelaku beserta barang bukti," tuturnya.<br /><br />Dari keempat pelaku, polisi mengamankan barang bukti berupa 5 paket kecil shabu, 4 buah HP, dan uang tunai Rp745.000.<br /><br />Sementara itu, terkait dengan 2 orang tersangka, RP dan A yang masih berada di bawah umur dan berstatus sebagai pelajar di Kota Pariaman itu, kata Rico, hal tersebut akan dikoordinasikan dengan KPAI-- diarahkan untuk dilakukan rehabilitasi.<br /><br />"Dua orang tersangka, RP dan A masih di bawah umur dan pelajar, kita akan koordinasi dengan KPAI untuk diarahkan untuk rehabilitasi," sebutnya.<br /><br />Ditemui terpisah Ketua BNK Kota Pariaman, Genius Umar, Minggu (9/4/2017), di Pantai Gandoriah Pariaman mengatakan, peredaran narkoba di Kota Pariaman harus mendapatkan perhatian khusus dari seluruh pihak. Mengingat, peringkat Kota Pariaman menempati peringkat 3 tertinggi peredaran narkoba di Provinsi Sumatera Barat.<br /><br />"Kita akan terus gencarkan perang terhadap narkoba. Melalui pencegahan dengan pendekatan sosialisasi kepada masyarakat di Kota Pariaman," ujarnya.<br /><br />Menyikapi ditangkapnya 2 orang pelajar Kota Pariaman terkait penyalahgunaan narkoba oleh tim 3 CN Polres Pariaman, ia mendukung hal tersebut sebagai bentuk upaya perang terhadap narkoba. Namun ia menekankan dan mengimbau agar orang tua dan pihak sekolah lebih aktif lagi mengawasi anak, baik di rumah ataupun di sekolah.<br /><br />"Dengan ditangkapnya pelaku penyalahgunaan narkoba yang masih berstatus pelajar di Kota Pariaman, menjadi kegawatdaruratan narkoba. Makanya diperlukan dukungan seluruh pihak untuk memberantas peredaran gelap narkoba dengan peningkatan pengawasan kepada anak dan siswa di sekolah," terangnya.<br /><br />Genius mendorong pihak terkait, dalam hal ini Polres Pariaman agar dapat memutus rantai peredaran gelap narkoba di Kota Pariaman. Melalui BNK ia akan berkoordinasi dengan Polres Pariaman untuk menyisir titik yang rawan penyalahgunaan narkoba di Kota Pariaman.<br /><br />"Harus ada gerakan bersama untuk memutus rantai peredaran gelap narkoba di Kota Pariaman. Kita sisir nantinya," pungkasnya.</p>', '2018-01-28Polres Pariaman Tangkap Pengguna Shabu, Dua Masih Anak Bawah Umura a a a bawha.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `title`, `foto`, `keterangan`) VALUES
(18, 'Galeri', '2018-01-28_Galeri_DSCN9152.JPG', '2'),
(17, 'Galeri', '2018-01-28_Galeri_DSCN9151.JPG', '1'),
(24, 'Galeri', '2018-01-28_Galeri_DSCN9189.JPG', '8'),
(25, 'Galeri', '2018-01-28_Galeri_DSCN9190.JPG', '9'),
(26, 'Galeri', '2018-01-28_Galeri_DSCN9205.JPG', '10');

-- --------------------------------------------------------

--
-- Table structure for table `jasa_masyarakat`
--

CREATE TABLE IF NOT EXISTS `jasa_masyarakat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(10000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jasa_masyarakat`
--

INSERT INTO `jasa_masyarakat` (`id`, `judul`, `keterangan`, `foto`, `notelp`) VALUES
(2, 'Usaha Jasa Katering', 'Di zaman sekarang ini hampir semua orang menyukai sesuatu yang isntan termasuk di dalam menyediakan dan menyajikan konsumsi makanan di dalam suatu acara  Karena selain lebih mudah dan simple, dengan menggunakan jasa Katering juga bisa lebih menghemat waktu dalam penyajian di dalam suatu acara, itulah mengapa hampir setiap orang banyak yang menggunakan jasa Katering  Nah tentu ini suatu peluang yang bagus bagi kita yang ingin punya usaha di bidang jasa yang menjanjikan  Sahabat bisa memulainya dengan bekerja sama dengan saudara maupun orang tua sehingga bisa lebih mudah dalam menjalankan usaha jasa catering ini', '2018-01-28_Usaha Jasa Katering_katering.jpg', '0812xxxxxxx'),
(3, 'Usaha Jasa Ekspedisi', 'asa expidisi atau layanan pengiriman barang juga merupakan salah satu usaha jasa yang menguntungkan dan banyak di butuhkan masyarakat, terutama dalam hal pengiriman barang barang yang cukup besar dan berat yang tidak mampu di lakukan oleh kantor pos  Namun tentunya kita harus memiliki jaringan yang luas yang ada di seluruh indonesia untuk membuka usaha jasa yang satu ini  Atau minimal kita mempunyai rekan bisnis di setiap daerah yang bisa menjamin barang ekspedisi kita sampai ke tempat tujuan dengan aman  Sehingga kelak usaha ini bisa kita jadikan usaha jangka panjang', '2018-01-28_Usaha Jasa Ekspedisi_expedisi.png', '0812xxxxxxx'),
(4, 'Usaha Jasa Pengetikan', 'Jika anda tinggal di sekitar kampus atau perkantoran dan memiliki kemampuan mengetik yang baik maka usaha jasa pengetikan merupakan bidang usaha yang layak anda coba. Selain mudah dan tidak memerlukan modal besar usaha ini dapat dilakukan secara sampingan sehingga tidak mengganggu pekerjaan utama anda.  Bisnis usaha jasa pengetikan ini sangat potensial dilakukan di sekitar kampus karena tidak semua mahasiswa memiliki komputer dan kalaupun punya terkadang kesibukan kuliah membuat mereka tidak sempat mengetik skripsi. Selain itu jasa ini juga dimanfaatkan oleh para karyawan yang harus membuat laporan namun terlalu sibuk dengan pekerjaannya sehingga menggunakan jasa pengetikan.', '2018-01-28_Usaha Jasa Pengetikan_Peluang-usaha-jasa-pengetikan.jpg', '0812xxxxxxx'),
(5, 'Jasa Cleaning Service', 'Meskipun terdengar remeh dan mudah namun peluang usaha jasa cleaning service atau layanan kebersihan tidak bisa dipandang sebelah mata. Usaha ini sangat menjanjikan karena selalu dibutuhkan untuk perawatan tempat, bangunan, atau rumah.  Bahkan kini ada usaha layanan kebersihan keliling yang mendatangi konsumen secara langsung sehingga lebih banyak calon konsumsumen yang bisa dijangkau. Dengan menjaga kualitas pekerjaan dan harga terjangkau usaha anda akan bertahan dan berkembang.', '2018-01-28_Jasa Cleaning Service_Peluang-Usaha-Bidang-Jasa-Cleaning-Service.png', '0812xxxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `karangtaruna`
--

CREATE TABLE IF NOT EXISTS `karangtaruna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `karangtaruna`
--

INSERT INTO `karangtaruna` (`id`, `title`, `foto`, `keterangan`) VALUES
(1, 'Struktur Organisasi', '2018-01-28Struktur OrganisasiKARANG TARUNA.jpg', 'Karang Taruna Desa Tungkal Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE IF NOT EXISTS `masyarakat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `title`, `foto`, `keterangan`) VALUES
(1, 'Struktur Organisasi', '2018-01-28Struktur OrganisasiLPM.jpg', 'Masyarakat DesaTungkal Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `pemerintahan`
--

CREATE TABLE IF NOT EXISTS `pemerintahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pemerintahan`
--

INSERT INTO `pemerintahan` (`id`, `title`, `foto`, `keterangan`) VALUES
(1, 'Struktur Organisasi', '2018-01-28Struktur OrganisasiBPD.jpg', 'Pemerintahan Desa Tungkal Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `pkk`
--

CREATE TABLE IF NOT EXISTS `pkk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pkk`
--

INSERT INTO `pkk` (`id`, `title`, `foto`, `keterangan`) VALUES
(2, 'PKK Desa Tungkal Selatan', '2018-01-28PKK Desa Tungkal SelatanTIM PKK.jpg', 'Tim PKK');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(10000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `judul`, `keterangan`, `foto`) VALUES
(7, 'Panen Padi Setiap Hari di Kabupaten Sijunjung, Verietas Batang Piaman', 'Muaro (antara sumbar) Kabupaten Sijunjung, Sumatera Barat ikut berpartisipasi dalam menunjang kedaulatan pangan untuk Indonesia, karena hampir setiap hari panen padi di daerah itu.  Setelah sebelumnya panen padi di Kecamatan Tanjung Gadang pada 17 Desember 17, dan dua hari kemudian kembali Kelompok Tani Bunduang Jaya di Nagari Kotobaru Kecamatan IV Nagari Kabupaten Sijunjung, melakukan panen padi sawah seluas 20 hektare dengan jenis varietas yang dipanen adalah varietas Batang Piaman, kata Kepala BPTP Chandra baru-baru ini.  Varietas ini memiliki rasa nasi pera yang disukai masyarakat Sumatera Barat. Berdasarkan hasil ubinan, rata rata produktivitas padi yang di dapat adalah 5.51 ton Gabah Kering Panen (GKP) per hektare dengan kisaran 4.80-6.93 ton GKP/ha.   Hasil ini dinilai petani cukup baik, apalagi dengan dilakukannya tanam serentak yang dilakukan kelompok tani ini ternyata dapat menghindari serangan OPT, utamanya tikus.  Harga GKP untuk varietas Batang Piaman senilai Rp.4.500 kg/ha sehingga didapatkan pendapatan sebesar Rp.24.795.000/ha.  Total nilai ekonomi hasil panen 20 ha adalah Rp.495.900.000.-. Bila dikurangi biaya usahatani sebesar Rp.12.540.000/ha, maka keuntungan yang didapat adalah Rp.12.255.000/ha.   Keuntungan total yang diperoleh Keltan Bunduang Jaya dari pertanaman padi 20 ha pada musim ini adalah Rp.245.100.000.-.   Untuk kelancaran usahatani padi sawah dan meningkatkan IP, petani berharap pada pemerintah untuk pengadaan irigasi.  Sukses ini berkat kerja keras para petani yang didukung oleh para penyuluh, Dinas Tanaman Pangan serta pihak lainnya termasuk BPTP yang mengintroduksi teknologi budidaya sesuai spesifik lokasi yang memberikan hasil sangat baik.  "Mari tingkatkan terus produksi padi. Dukung kedaulatan pangan. Tiada hari tanpa panen," ujar Chandra.***', '2018-01-28_a_20171221IMG-20171221-WA0001_2.jpg'),
(13, 'Sala Lauak Pariaman yang Nikmat', 'Sala Lauak adalah cemilan khas Pariaman, Sumatera Barat, hampir semua orang suka cemilan ini. Resep ini hasil permintaan dari teman-teman kantor saya. Dicoba yuk...', '2018-01-30_Sala Lauak Pariaman yang Nikmat_sala-lauak.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE IF NOT EXISTS `sejarah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `judul`, `keterangan`) VALUES
(1, 'Sejarah Desa Tungkal Selatan', '<p style="text-align: center;"><strong>Sejarah Desa Tungkal selatan&nbsp;</strong></p>\r\n<p style="text-align: justify;">Desa Tungkal Selatan ini terletak pada daerah Kota Pariaman yaitu di bagian Pariaman Utara. Asal Mula nama Desa Tungkal Selatan yaitu.....................</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;">.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE IF NOT EXISTS `struktur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `title`, `foto`, `keterangan`) VALUES
(1, 'Struktur Organisasi', '2018-01-28Struktur OrganisasiDESA.jpg', 'Desa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(200) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `url`, `keterangan`, `title`) VALUES
(4, 'https://www.youtube.com/watch?v=ITBgljMH4ow&spfreload=10', 'asdasdsa', 'Coba');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE IF NOT EXISTS `visimisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `judul`, `keterangan`) VALUES
(1, 'Visi dan Misi Desa Tungkal Selatan', '<ul>\r\n<li>\r\n<h2 style="text-align: justify;"><strong>VISI</strong></h2>\r\n</li>\r\n</ul>\r\n<p style="text-align: center;"><strong>Melayani Masyarakat Desa Tungkal Selatan Secara Menyeluruh dan Terciptanya Desa Tungkal Selatan Yang Maju, Mandiri, Sehat, Sejahtera dan Religius.</strong></p>\r\n<p style="text-align: center;"><strong>Visi tersebut memiliki 4 (empat) pokok pikiran yang diuraikan sebagai berikut :</strong></p>\r\n<ol>\r\n<li><strong>Maju yaitu bergerak kearah yang lebih baik dari sebelumnya dalam segala bidang</strong></li>\r\n<li><strong>Mandiri yaitu mampu berkarya sendiri tanpa bantuan orang lain</strong></li>\r\n<li><strong>Sehat yaitu bebas dari penyakit baik jasmani dan rohani</strong></li>\r\n<li><strong>Sejahtera yaitu merupakan perwujudan cita-cita masyarakat tungkal selatan yang terbebas dari ketergantungan dan ketertinggalan terutama dalam penumbuhan kebutuhan hidupnya baik primer maupun sekunder.</strong></li>\r\n<li><strong>Religius yaitu berjiwa islami</strong></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>\r\n<h2><strong>MISI</strong></h2>\r\n</li>\r\n</ul>\r\n<p style="text-align: center;"><strong>Dalam mencapai Visi &ldquo;Melayani Masyarakat Desa Tungkal Selatan Secara Menyeluruh Dan Terciptanya Desa Tungkal Selatan Yang Maju, Mandiri, Sehat, Sejahtera Dan Relegius&rdquo; maka ditetapkan misi sebagai berikut :</strong></p>\r\n<ol>\r\n<li><strong>Menciptakan pelayanan prima bagi masyarakat Tungkal Selatan</strong></li>\r\n<li><strong>Melaksanakan kerjasama dengan lembaga pemerintahan dan para tokoh masyarakat desa Tungkal Selatan.</strong></li>\r\n<li><strong>Menumbuhkembangkan magrib mengaji disetiap dusun lingkungan desa tungkal selatan.</strong></li>\r\n<li><strong>Meningkatkan sarana dan prasarana dari segi fisik , ekonomi, pendidikan, kesehatan dan melestarikan budaya dan bidang agama.</strong></li>\r\n<li><strong>Menumbuh kembangkan gotoroyong dan persatuan di Desa Tungkal Selatan. </strong></li>\r\n</ol>\r\n<p>&nbsp;</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
