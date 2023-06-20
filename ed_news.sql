-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 06:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ed_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl_publish` datetime NOT NULL,
  `isi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tgl_publish`, `isi`, `id_kategori`, `id_penulis`, `gambar`) VALUES
(1, 'Sejarah Kembang Waru, Makanan Khas Kerajaan Mataram Islam', '2023-06-03 17:17:00', 'Kembang waru merupakan roti berbentuk bunga yang diproduksi dengan metode tradisional. Metode yang digunakan secara turun-temurun tersebut menjadikan kembang waru memiliki cita rasa yang khas.  Kembang waru terbuat dari tepung terigu, telur ayam, gula, susu, vanili, dan mentega. Bahan-bahan tersebut dicampur menjadi adonan lalu dimasukkan ke dalam cetakan berbentuk bunga waru yang sudah dioles mentega. Adonan tersebut kemudian dipanggang di oven kuno yang masih menggunakan arang sebagai bahan bakarnya.  Kembang waru dipercaya sebagai warisan Kerajaan Mataram Islam. Mengutip laman Dinas Kebudayaan DIY, tidak diketahui secara persis siapa penemu roti khas Kotagede tersebut. Namun, pada zaman Mataram Islam, kembang waru selalu menjadi hidangan favorit yang selalu ada dalam setiap hajatan ataupun acara adat.  Kembang waru dibuat oleh para sahabat keraton pada zaman dulu karena di Kotagede banyak terdapat pohon waru, selain itu bentuk bunga waru lebih mudah ditiru jika dibandingkan dengan bunga mawar atau bunga kenanga.  Awalnya, kembang waru hanya boleh dikonsumsi oleh para bangsawan dan keluarga kerajaan pada acara-acara tertentu di kerajaan. Tetapi seiring berkembangnya zaman, kue ini dapat dinikmati oleh berbagai kalangan masyarakat.  Kembang waru berbentuk bunga waru yang memiliki delapan sisi. Bentuk kembang tersebut memiliki makna delapan laku seorang pemimpin yang merupakan personifikasi dari delapan elemen unsur alam yakni tanah, air, angin, api, matahari, bulan, bintang dan langit.  Jika seorang pemimpin mampu menerapkan delapan laku tersebut, maka ia akan menjadi pemimpin yang berwibawa dan mampu mengayomi semua rakyatnya. Selain itu, terdapat pengharapan bagi siapapun yang memakan kembang waru dimana ia diharapkan akan selalu mengingat nasihat leluhur sehingga dapat menjalani kehidupan dengan penuh penghargaan.', 5, 3, '1463025845_berita1.jpeg'),
(2, 'Tapai Ngambeng, Takjil Legendaris Bondowoso yang Legit Enak', '2023-06-03 18:30:00', 'Dikenal sebagai Kota Tapai, Bondowoso memiliki beragam olahan makanan dan minuman berbahan dasar tapai. Salah satunya tapai ngambeng yang berasal dari bahasa lokal (Madura). Ngambeng artinya mengambang. Karena saat diolah, tapai akan terlihat mengambang atau muncul di atas permukaan gelas.  Minuman tapai ngambeng konon sudah ada sejak zaman dahulu dan menjadi minuman turun-temurun. Meski saat ini sudah jarang terlihat karena tergerus kuliner kekinian.  Namun bisa dipastikan, olahan minuman ini selalu muncul saat bulan puasa Ramadan. Karena, manis dan segarnya memang sangat pas sebagai takjil puasa. Tapai ngambeng bisa disajikan hangat maupun dingin, menyesuaikan dengan kondisi cuaca.  Resep untuk mengolah tapai ngambeng ini terbilang sangat sederhana. Tapai singkong diiris kecil-kecil. Lantas diguyur air yang sudah dicampur gula aren. Jika suka, bisa ditambahkan jahe.  Air bercampur gula aren dan jahe tersebut diberi sedikit air kapur sirih. Fungsinya untuk membuat irisan tapai tak lumer atau lembek saat bercampur air sehingga, bentuknya pun tetap utuh dan cantik.  Kendati sangat cocok sebagai takjil puasa, menikmati minuman tapai ngambeng tak disarankan terlalu banyak dan berlebihan. Karena, bahan dasar tapai berasal dari singkong yang difermentasi dalam waktu tertentu.  Karenanya dikhawatirkan mempengaruhi proses pencernaan di lambung, setelah seharian perut kosong dan tak terisi.', 5, 3, '525454052_berita2.jpeg'),
(3, 'Anti Mainstream, Ada Es Kopi Susu Campur Tape di Cirebon', '2023-06-03 20:44:00', 'Di Cirebon, Jawa Barat, misalnya, ada satu sajian minuman kopi yang cukup menarik dan mungkin jarang ditemui di tempat lain. Namanya adalah Kopsus Tape Bakung.  Minuman kopi ini merupakan salah satu menu andalan dan yang menjadi best seller di Warung Mimi Sepuh. Kafe atau tempat makan ini berlokasi Jalan Ir Soekarno, Kecamatan Talun, Kabupaten Cirebon.  Sama seperti namanya, Kopsus Tape Bakung merupakan sajian minuman yang terdiri dari racikan kopi susu dikombinasikan dengan tape ketan khas Bakung. Bakung sendiri merupakan salah satu daerah di Cirebon yang dikenal dengan produksi tape ketannya.  Bagi Anda pecinta kopi, menu satu ini mungkin akan memberikan sensasi rasa yang berbeda. Nikmatnya kopi susu yang creamy berpadu dengan manis dan legitnya tape ketan khas Bakung membuat minuman ini memiliki cita rasa yang cukup menarik.  Uday, sang Barista di Warung Mimi Sepuh menceritakan awal mula terciptanya menu Kopsus Tape Bakung yang ia buat. Menurut Uday, dibuatnya menu minuman ini berangkat dari keinginannya untuk memadukan minuman kekinian dengan jajanan tradisional khas Cirebon, yaitu tape ketan.  \"Kalau di sini (Warung Mimi Sepuh) kan memang konsepnya nuansa Cirebon. Jadi saya mendapat tantangan untuk membuat menu minuman dengan memadukan kuliner khas Cirebon. Dan saya pilih lah tape bakung ini,\" kata Uday.  Sebelum siap untuk dipasarkan dan dihidangkan kepada konsumen, Uday sendiri mengaku telah melakukan riset sekitar satu minggu dalam menciptakan menu minuman ini. Hal ini dilakukan Uday demi mendapatkan cita rasa terbaik. Dan hasilnya, terciptalah menu minuman yang ia beri nama Kopsus Tape Bakung. Hanya saja, kata Uday, menu minuman satu ini hanya bisa dihidangkan dalam keadaan dingin.  Kafe atau tempat makan ini buka setiap hari mulai dari jam 12.00 WIB - 22.00 WIB. Jika ingin mencoba sensasi rasa dari Kopsus Tape Bakung di Warung Mimi Sepuh, Anda cukup merogoh kocek Rp25.000 untuk setiap satu gelasnya.', 5, 3, '1546956525_berita3.jpeg'),
(4, 'Uniknya Rujak Werak Khas Morodemak Demak, Berbumbu Air Kelapa Asam', '2023-06-03 21:48:00', 'Rujak werak hanya ada di Desa Morodemak, Kecamatan Bonang, Demak. Rujak ini khas dengan rasa kecut dari guyuran air kelapa yang disimpan selama empat hari. Cocok dinikmati saat berkunjung ke pesisir Demak.  Selain kecut atau asam, rujak parutan bengkuang ini juga memadukan rasa manis dari lutis gula jawa dan pedasnya sambal cabai campur asem. Rujak ini biasanya dinikmati dengan kerupuk rambak atau kerupuk triplek yang digoreng menggunakan pasir.  Salah satu penjual rujak werak, Rosidah (43) mengatakan werak merupakan sebutan untuk air kelapa yang telah disimpan sebagai kuah rujak ini.  \"Bengkuang diparut, dikasih sambel lutis. Sambel weraknya yang pedas dikasih asem, garam, lombok, terasi,\" kata Rosidah saat ditemui di teras rumahnya.  \"Airnya kelapanya disimpan dalam botol empat hari, biar seger. Kalau manis kan nggak enak, harus kecut,\" imbuhnya.  Rosidah menjelaskan, resep tersebut ia warisi secara turun-temurun. Ia sudah berjualan rujak werak selama 13 tahun, meneruskan usaha ibunya.  Peminat rujak werak saat ini dari kalangan orang tua dan pengunjung dari luar daerah. Selain lezat, rujak werak menurut Rosidah juga berkhasiat. \"Ceritanya kalau mencret makan rujak werak bisa sembuh. Nggak tahu, karena air kelapanya atau apa,\" ujarnya.  Rosidah berjualan rujak werak tiap pukul 10.00 - 20.30 WIB. Harganya per porsinya mulai Rp 3 ribu, Rp 4 ribu, sampai Rp 10 ribu.  Menurut Sekdes Morodemak, M Syaifudin, rujak werak merupakan warisan leluhur Desa Morodemak.  \"Rujak werak memang salah satu kuliner warisan leluhur desa Morodemak. Racikan bumbunya tidak bisa ditemui di daerah lain,\" kata Syaifudin saat dihubungi detikJateng.  Zaman dulu, rujak werak menggunakan parutan ubi atau ketela pohon. Namun sekarang rujak werak menggunakan bengkuang.  \"Uniknya menggunakan air kelapa tua yang didiamkan minimal sebulan. Sepertinya ada rahasia tersendiri,\" ujar Syaifudin.', 5, 3, '1615401369_berita4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Kesehatan'),
(2, 'Olahraga'),
(3, 'Pendidikan'),
(4, 'Politik'),
(5, 'Makanan dan Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` datetime NOT NULL,
  `id_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama`) VALUES
(1, 'Feki Dui Marinda'),
(2, 'Dandi Gus'),
(3, 'Elvina Rosanti'),
(4, 'Fadlan Fauzi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_penulis` (`id_penulis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id_penulis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
