-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 06:26 PM
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
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$XTnaHYKTAXRwrclUNJvCu.UpSxpGBRoQ7JRwwT/uelOzmI3g5yBk2');

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
(1, 'Sejarah Kembang Waru , Makanan Khas Kerajaan Mataram Islam', '2023-06-03 17:17:00', 'Kembang waru merupakan roti berbentuk bunga yang diproduksi dengan metode tradisional. Metode yang digunakan secara turun-temurun tersebut menjadikan kembang waru memiliki cita rasa yang khas.  Kembang waru terbuat dari tepung terigu, telur ayam, gula, susu, vanili, dan mentega. Bahan-bahan tersebut dicampur menjadi adonan lalu dimasukkan ke dalam cetakan berbentuk bunga waru yang sudah dioles mentega. Adonan tersebut kemudian dipanggang di oven kuno yang masih menggunakan arang sebagai bahan bakarnya.  Kembang waru dipercaya sebagai warisan Kerajaan Mataram Islam. Mengutip laman Dinas Kebudayaan DIY, tidak diketahui secara persis siapa penemu roti khas Kotagede tersebut. Namun, pada zaman Mataram Islam, kembang waru selalu menjadi hidangan favorit yang selalu ada dalam setiap hajatan ataupun acara adat.  Kembang waru dibuat oleh para sahabat keraton pada zaman dulu karena di Kotagede banyak terdapat pohon waru, selain itu bentuk bunga waru lebih mudah ditiru jika dibandingkan dengan bunga mawar atau bunga kenanga.  Awalnya, kembang waru hanya boleh dikonsumsi oleh para bangsawan dan keluarga kerajaan pada acara-acara tertentu di kerajaan. Tetapi seiring berkembangnya zaman, kue ini dapat dinikmati oleh berbagai kalangan masyarakat.  Kembang waru berbentuk bunga waru yang memiliki delapan sisi. Bentuk kembang tersebut memiliki makna delapan laku seorang pemimpin yang merupakan personifikasi dari delapan elemen unsur alam yakni tanah, air, angin, api, matahari, bulan, bintang dan langit.  Jika seorang pemimpin mampu menerapkan delapan laku tersebut, maka ia akan menjadi pemimpin yang berwibawa dan mampu mengayomi semua rakyatnya. Selain itu, terdapat pengharapan bagi siapapun yang memakan kembang waru dimana ia diharapkan akan selalu mengingat nasihat leluhur sehingga dapat menjalani kehidupan dengan penuh penghargaan.', 5, 3, '1463025845_berita1.jpeg'),
(2, 'Tapai Ngambeng, Takjil Legendaris Bondowoso yang Legit Enak', '2023-06-03 18:30:00', 'Dikenal sebagai Kota Tapai, Bondowoso memiliki beragam olahan makanan dan minuman berbahan dasar tapai. Salah satunya tapai ngambeng yang berasal dari bahasa lokal (Madura). Ngambeng artinya mengambang. Karena saat diolah, tapai akan terlihat mengambang atau muncul di atas permukaan gelas.  Minuman tapai ngambeng konon sudah ada sejak zaman dahulu dan menjadi minuman turun-temurun. Meski saat ini sudah jarang terlihat karena tergerus kuliner kekinian.  Namun bisa dipastikan, olahan minuman ini selalu muncul saat bulan puasa Ramadan. Karena, manis dan segarnya memang sangat pas sebagai takjil puasa. Tapai ngambeng bisa disajikan hangat maupun dingin, menyesuaikan dengan kondisi cuaca.  Resep untuk mengolah tapai ngambeng ini terbilang sangat sederhana. Tapai singkong diiris kecil-kecil. Lantas diguyur air yang sudah dicampur gula aren. Jika suka, bisa ditambahkan jahe.  Air bercampur gula aren dan jahe tersebut diberi sedikit air kapur sirih. Fungsinya untuk membuat irisan tapai tak lumer atau lembek saat bercampur air sehingga, bentuknya pun tetap utuh dan cantik.  Kendati sangat cocok sebagai takjil puasa, menikmati minuman tapai ngambeng tak disarankan terlalu banyak dan berlebihan. Karena, bahan dasar tapai berasal dari singkong yang difermentasi dalam waktu tertentu.  Karenanya dikhawatirkan mempengaruhi proses pencernaan di lambung, setelah seharian perut kosong dan tak terisi.', 5, 3, '525454052_berita2.jpeg'),
(3, 'Anti Mainstream, Ada Es Kopi Susu Campur Tape di Cirebon', '2023-06-03 20:44:00', 'Di Cirebon, Jawa Barat, misalnya, ada satu sajian minuman kopi yang cukup menarik dan mungkin jarang ditemui di tempat lain. Namanya adalah Kopsus Tape Bakung.  Minuman kopi ini merupakan salah satu menu andalan dan yang menjadi best seller di Warung Mimi Sepuh. Kafe atau tempat makan ini berlokasi Jalan Ir Soekarno, Kecamatan Talun, Kabupaten Cirebon.  Sama seperti namanya, Kopsus Tape Bakung merupakan sajian minuman yang terdiri dari racikan kopi susu dikombinasikan dengan tape ketan khas Bakung. Bakung sendiri merupakan salah satu daerah di Cirebon yang dikenal dengan produksi tape ketannya.  Bagi Anda pecinta kopi, menu satu ini mungkin akan memberikan sensasi rasa yang berbeda. Nikmatnya kopi susu yang creamy berpadu dengan manis dan legitnya tape ketan khas Bakung membuat minuman ini memiliki cita rasa yang cukup menarik.  Uday, sang Barista di Warung Mimi Sepuh menceritakan awal mula terciptanya menu Kopsus Tape Bakung yang ia buat. Menurut Uday, dibuatnya menu minuman ini berangkat dari keinginannya untuk memadukan minuman kekinian dengan jajanan tradisional khas Cirebon, yaitu tape ketan.  \"Kalau di sini (Warung Mimi Sepuh) kan memang konsepnya nuansa Cirebon. Jadi saya mendapat tantangan untuk membuat menu minuman dengan memadukan kuliner khas Cirebon. Dan saya pilih lah tape bakung ini,\" kata Uday.  Sebelum siap untuk dipasarkan dan dihidangkan kepada konsumen, Uday sendiri mengaku telah melakukan riset sekitar satu minggu dalam menciptakan menu minuman ini. Hal ini dilakukan Uday demi mendapatkan cita rasa terbaik. Dan hasilnya, terciptalah menu minuman yang ia beri nama Kopsus Tape Bakung. Hanya saja, kata Uday, menu minuman satu ini hanya bisa dihidangkan dalam keadaan dingin.  Kafe atau tempat makan ini buka setiap hari mulai dari jam 12.00 WIB - 22.00 WIB. Jika ingin mencoba sensasi rasa dari Kopsus Tape Bakung di Warung Mimi Sepuh, Anda cukup merogoh kocek Rp25.000 untuk setiap satu gelasnya.', 5, 3, '1546956525_berita3.jpeg'),
(4, 'Uniknya Rujak Werak Khas Morodemak Demak, Berbumbu Air Kelapa Asam', '2023-06-03 21:48:00', 'Rujak werak hanya ada di Desa Morodemak, Kecamatan Bonang, Demak. Rujak ini khas dengan rasa kecut dari guyuran air kelapa yang disimpan selama empat hari. Cocok dinikmati saat berkunjung ke pesisir Demak.  Selain kecut atau asam, rujak parutan bengkuang ini juga memadukan rasa manis dari lutis gula jawa dan pedasnya sambal cabai campur asem. Rujak ini biasanya dinikmati dengan kerupuk rambak atau kerupuk triplek yang digoreng menggunakan pasir.  Salah satu penjual rujak werak, Rosidah (43) mengatakan werak merupakan sebutan untuk air kelapa yang telah disimpan sebagai kuah rujak ini.  \"Bengkuang diparut, dikasih sambel lutis. Sambel weraknya yang pedas dikasih asem, garam, lombok, terasi,\" kata Rosidah saat ditemui di teras rumahnya.  \"Airnya kelapanya disimpan dalam botol empat hari, biar seger. Kalau manis kan nggak enak, harus kecut,\" imbuhnya.  Rosidah menjelaskan, resep tersebut ia warisi secara turun-temurun. Ia sudah berjualan rujak werak selama 13 tahun, meneruskan usaha ibunya.  Peminat rujak werak saat ini dari kalangan orang tua dan pengunjung dari luar daerah. Selain lezat, rujak werak menurut Rosidah juga berkhasiat. \"Ceritanya kalau mencret makan rujak werak bisa sembuh. Nggak tahu, karena air kelapanya atau apa,\" ujarnya.  Rosidah berjualan rujak werak tiap pukul 10.00 - 20.30 WIB. Harganya per porsinya mulai Rp 3 ribu, Rp 4 ribu, sampai Rp 10 ribu.  Menurut Sekdes Morodemak, M Syaifudin, rujak werak merupakan warisan leluhur Desa Morodemak.  \"Rujak werak memang salah satu kuliner warisan leluhur desa Morodemak. Racikan bumbunya tidak bisa ditemui di daerah lain,\" kata Syaifudin saat dihubungi detikJateng.  Zaman dulu, rujak werak menggunakan parutan ubi atau ketela pohon. Namun sekarang rujak werak menggunakan bengkuang.  \"Uniknya menggunakan air kelapa tua yang didiamkan minimal sebulan. Sepertinya ada rahasia tersendiri,\" ujar Syaifudin.', 5, 3, '1615401369_berita4.jpeg'),
(5, 'Jadi Pemicu Kematian Jemaah Haji RI, Gejala Sakit Jantung Ini Kerap Diabaikan', '2023-06-05 10:17:00', 'Kepala Pusat Kesehatan (Puskes) Haji Liliek Marhaendro Susilo mengungkapkan jantung iskemik atau jantung koroner jadi penyebab terbanyak wafatnya jemaah Haji asal Indonesia. Tercatat hingga Minggu (4/6) kemarin, penyakit ini sudah merenggut lima korban jiwa. \"Sampai dengan kemarin jam 4 sore, itu sudah ada 15 orang jemaah yang wafat. Penyakit yang terbanyak menjadi penyebab wafatnya jemaah adalah penyakit jantung iskemik, itu dialami oleh lima orang,\" ujarnya dalam konferensi lewat Zoom, Senin (5/6/2023).  Menanggapi hal tersebut, Kepala Bidang Kesehatan PPIH Arab Saudi dr M Imran menyampaikan penyakit jantung koroner memang selalu menjadi salah satu penyebab kematian terbanyak jemaah Haji setiap tahunnya.  dr Imran menjelaskan serangan jantung koroner dapat dipicu oleh beberapa hal, seperti kelelahan dan dehidrasi. Ia menambahkan jemaah dengan faktor risiko tertentu akan lebih rentan terkena serangan jantung saat sedang menunaikan ibadah Haji.  Kedua, sambung dr Imran, jemaah yang sebelumnya sudah memiliki riwayat penyakit jantung.  \"Kemudian yang ketiga, memiliki riwayat penyakit hipertensi,\" ucapnya.  Lalu, jemaah dengan faktor risiko diabetes melitus juga rentan terkena serangan jantung saat mengalami kelelahan maupun dehidrasi.  \"Ini penyakit-penyakit yang dapat memicu terjadinya serangan jantung atau penyakit jantung koroner. Sehingga memang kita sampaikan jemaah dengan penyakit-penyakit yang kami sebutkan tadi sangat dianjurkan untuk beristirahat,\" imbaunya.  \"Kalau beraktivitas fisik yang berat, seperti melakukan umrah pada saat tawaf atau sai, itu sangat dianjurkan menggunakan kursi roda untuk mencegah terjadinya kelelahan. Kami juga menyarankan untuk menghindari paparan panas dengan memakai payung, dan juga minum air 200 ml per jam,\" tandasnya.', 1, 5, '1000091718_berita5.jpeg'),
(6, 'Sikka KLB Rabies, tapi Stok Vaksin Rabies Habis', '2023-06-05 11:33:00', 'Kabupaten Sikka, Nusa Tenggara Timur (NTT), berstatus kejadian luar biasa (KLB) rabies sejak dua pekan terakhir. Tetapi, stok vaksin rabies untuk anjing malah habis. \"Untuk sementara ini sampai akhir Mei, vaksin (rabies untuk anjing) stoknya habis,\" ungkap Kepala Dinas Pertanian Kabupaten Sikka Yohanes Emil Satriawan, Senin (5/6/2023).  Sejak kasus gigitan anjing rabies mencuat di Sikka, Distan Kabupaten Sikka tercatat hanya memiliki 3.520 dosis vaksin rabies yang seluruhnya sudah habis digunakan.   Vaksin rabies itu terdiri 2.520 dosis berasal bantuan dari Direktorat Peternakan dan Kesehatan Hewan Kementerian Pertanian dan 1.000 dosis bantuan dari Pemerintah Kabupaten Flores Timur.  Sementara itu, populasi anjing di Sikka mencapai 55 ribu ekor. Ini artinya, jumlah anjing yang sudah divaksin masih jauh dari cakupan vaksinasi paling sedikit 70 persen dari total populasi hewan penular rabies (HPR).  Yohanes sendiri mengaku sudah meminta bantuan vaksin rabies kepada Ikatan Dokter Hewan Indonesia. Saat ini pun sedang proses pengadaan vaksin rabies bersumber dari APBD Sikka.  Sembari menunggu, Yohanes meminta masyarakat untuk mengikat dan memasukkan anjing peliharaan mereka ke dalam kandang. Ambulans puskesmas juga berkeliling kampung untuk menyampaikan imbauan untuk mengikat anjing mereka.  Sementara itu, vaksin antirabies (VAR) untuk korban gigitan anjing rabies di Kabupaten Sikka sejauh ini masih mencukupi. Kepala Dinas Kesehatan Kabupaten Sikka Maria Bernadina Sada Nenu mengatakan VAR sudah disebar ke tujuh Rabies Center, pusat perawatan korban gigitan HPR.  Diketahui sebanyak 23 warga Kabupaten Sikka menjadi korban gigitan anjing rabies dalam rentang waktu lima bulan terakhir. Satu orang korban meninggal dunia pada 8 Mei 2023, sedangkan 22 orang lainnya masih menjalani perawatan.  Kepastian ini diperoleh setelah uji laboratorium terhadap 31 sampel kepala anjing yang melakukan gigitan terhadap warga. Di antaranya delapan kasus gigitan anjing negatif rabies.', 1, 5, '1404650192_berita6.jpeg'),
(7, 'Kasus ISPA di Karangasem Lompat 25 Persen Tembus 12.357 Kejadian', '2023-06-05 12:42:00', ' Kasus Infeksi Saluran Pernapasan Akut (ISPA) di Kabupaten Karangasem meningkat pada Januari-April 2023 menjadi sebanyak 12.357 kasus. Jumlahnya naik 25 persen dibandingkan periode yang sama tahun lalu, yaitu 9.841 kasus. ', 1, 5, '1697585464_berita7.jpeg'),
(8, 'Infeksi Langka Meningitis Akibat Jamur Merebak di AS, Picu 3 Orang Tewas', '2023-06-05 12:52:00', 'Sebanyak tiga orang asal Amerika Serikat (AS) meninggal dunia akibat infeksi jamur setelah menjalani prosedur kosmetik di Meksiko. Pusat Pengendalian dan Pencegahan Penyakit AS (CDC) memperingatkan ada lebih dari 200 pasien yang mungkin juga berisiko.  Sejak Januari 2023, CDC telah mengidentifikasi 14 suspek, 11 probable, dan dua kasus meningitis jamur yang dikonfirmasi di AS yang dikaitkan dengan prosedur kosmetik yang dilakukan di Meksiko. Dari angka tersebut 3 di antaranya meninggal dunia.  Badan tersebut mengatakan bahwa 212 warga AS di 25 negara bagian dapat berisiko terinfeksi, yang dapat muncul beberapa minggu setelah melakukan prosedur.  Semua infeksi telah ditelusuri kembali ke 2 klinik di Matamoros, Tamaulipas, Meksiko, River Side Surgical Center dan Clinica K-3. Semua pasien yang terdampak menjalani prosedur di bawah anestesi epidural, ketika obat disuntikkan ke dalam ruang di sekitar sumsum tulang belakang. Belum diketahui prosedur pasti yang telah dilakukan.  Salah satu pasien yang meninggal adalah Lauren Robinson (29), seorang ibu empat anak dari Texas, AS. Menurut suaminya, Lauren mulai mengalami gejala beberapa bulan setelah melakukan prosedur kosmetik pada bulan Februari.  Menurut Organisasi Kesehatan Dunia (WHO), kasus meningitis jamur cukup langka, tetapi dapat mengancam nyawa dan memerlukan perawatan medis segera.  Meningitis, radang cairan dan selaput yang mengelilingi otak dan sumsum tulang belakang, dapat disebabkan oleh sejumlah bakteri, virus, jamur, dan parasit. Dalam hal ini, laboratorium di AS dan Meksiko telah mendeteksi bukti spesies jamur yang disebut Fusarium solani di cairan serebrospinal pasien.  Sementara para penyelidik belum tahu persis apa yang terjadi, ada kemungkinan peralatan medis yang terkontaminasi. Peralatan yang tidak dibersihkan dengan benar dapat memasukkan jamur ke dalam tubuh pasien.', 1, 5, '1498701717_berita8.jpeg'),
(9, 'Kemendikbudristek Selenggarakan Upacara Peringatan Hari Lahir Pancasila', '2023-06-07 07:30:58', 'Jakarta, Kemendikbudristek --- Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) Republik Indonesia menyelenggarakan upacara bendera pada tanggal 1 Juni 2023 memperingati Hari Lahir (Harlah) Pancasila. Keunikan saat penyelenggaraan upacara tersaji lewat kelompok peserta upacara yang disebut Barisan Nusantara, 40 orang perwakilan pegawai menggunakan pakaian adat dari berbagai daerah, mencerminkan kebinekaan dan representasi dari sila ke 3 Persatuan Indonesia.\r\n \r\nBertindak sebagai pembina upacara, Staf Ahli Menteri Bidang Talenta, Tatang Muttaqin, membacakan sambutan Hari Lahir Pancasila tahun 2023 dari Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi (Mendikbudristek) Nadiem Makarim.\r\n \r\nIa menyampaikan bahwa Pancasila digali dari nilai luhur budaya bangsa di Nusantara serta memiliki makna yang dinamis dan universal. Menjadi sangat penting untuk menjaga pinsip-prinsip Pancasila di dalam aktivitas bernegara,\" ujar Tatang,\r\n \r\nLebih lanjut, Tatang menjelaskan bahwa Kemendikbudristek menyusun Profil Pelajar Pancasila yang mengandung berbagai ciri utama, yakni: beriman, bertakwa kepada Tuhan Yang Maha Esa, berakhlak mulia, berkebinekaan global, bergotong royong, mandiri, bernalar kritis, dan kreatif.\r\n \r\nPerjalanan dalam mencerdaskan kehidupan bangsa masih panjang. Kita semua adalah penyelenggara negara yang merupakan lini terdepan dalam menjaga nilai-nilai Pancasila, khususnya dalam urusan pemerintahan di bidang pendidikan dan kebudayaan, Mari bergotong-royong membangun peradaban dan pertumbuhan global,tegas Tatang mengakhiri pembacaan pesan Hari Lahir Pancasila tahun 2023.\r\n \r\nSelanjutnya, prosesi pengibaran bendera merah putih dengan dilakukan oleh derap langkah Purna Paskibraka Indonesia (PPI) Kota Depok, Jawa Barat terasa penuh dengan rasa hormat, diiringi oleh alunan lagu Indonesia Raya bergema. Ini adalah momen yang mewujudkan semangat Pancasila.\r\n \r\nDi kesempatan terpisah, dalam gema yang selaras dengan pesan Mendikbudristek, Sekretaris Badan Bahasa, Hafidz Muksin menggarisbawahi peran penting nilai-nilai Pancasila sebagai landasan dalam melaksanakan tugas dan tanggung jawab di Kemendikbudristek.\r\n \r\n\"Diperlukan kolaborasi dan kebersamaan antara unit utama di pusat maupun di daerah untuk memberikan dukungan pelaksanaan program strategis Kemendikbudristek khususnya dalam kerangka Merdeka Belajar sehingga kebermanfaatan program tersebut diterima secara nyata oleh masyarakat, ucap Hafidz.\r\n \r\nDengan semangat toleransi dan rasa hormat, seorang pegawai negeri sipil dari Kemendikbudristek dari unit kerja Pusat Data dan Teknologi Informasi (Pusdatin), Sundoro, menyoroti pentingnya Pancasila sebagai pemersatu bangsa.\r\n \r\n\"Pancasila mengajarkan kita nilai toleransi, mendorong kita untuk merayakan perbedaan lewat semboyan Bhinneka Tunggal Ika. Selain itu, hendaknya Pancasila menjadi pemicu motivasi untuk memberikan hasil kerja yang lebih baik selaku pegawai,\" tegas Sundoro yang tergabung di kelompok Barisan Nusantara dengan mengenakan pakaian adat daerah Maluku.\r\n \r\nSemangat upacara ini semakin terasa ketika dua pelajar kelas XI di SMAN 98 Jakarta, Natanael Destriyo Permono dan Nayla Ananda Putri, yang tergabung di kelompok paduan suara sebagai pengisi acara di dalam upacara berbagi kegembiraan mereka menjadi bagian dari acara penting ini. Penuh dengan antusiasme anak muda, mereka memancarkan rasa bangga terpillih menjadi bagian dari upacara Harlah Pancasila di Kemendikbudristek.\r\n \r\n\"Pancasila merupakan salah satu pedoman menciptakan keteraturan kehidupan antar sesama,\" seru mereka, dengan mata berbinar-binar penuh tekad. \"Selain itu menjadi tantangan tersendiri dimana kami mempelajari lagu Profil Pelajar Pancasila meski kami berlatih dengan waktu yang singkat,sambung Wahyudi Syahputra, guru Seni Budaya sekaligus pelatih paduan suara SMAN 98 Jakarta', 3, 1, 'pend1.JPG'),
(10, 'Kemendikbudristek Lepas 20 Mahasiswa Program IISMA yang Akan Belajar di Yale University', '2023-06-07 07:36:31', 'Jakarta, Kemendikbudristek - Rangkaian pelepasan keberangkatan para mahasiswa yang terpilih sebagai peserta Program Indonesian International Student Mobility Awards (IISMA) tahun 2023 resmi dimulai. Pelepasan pertama dilaksanakan pada Sabtu (27/05/2023) secara daring yang melepas 20 mahasiswa yang akan berangkat ke Yale University di Amerika Serikat.\r\n \r\nSetelah dilepas secara resmi oleh Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek), 20 mahasiswa tersebut akan berangkat pada Sabtu (27/05/2023) waktu setempat dan akan bertolak langsung ke Yale University. Sebanyak 20 orang mahasiswa terpilih menjadi peserta Program IISMA 2023 setelah melewati proses seleksi yang panjang yang dimulai sejak awal tahun 2023. Pada 14 April lalu, terpilih sebanyak 1.691 mahasiswa akademik dan vokasi yang akan belajar di berbagai perguruan tinggi terkemuka di seluruh dunia selama satu semester.\r\n \r\nKepala Program IISMA, Rachmat Sriwijaya, dalam sambutannya menyampaikan bahwa Kemendikbudristek sangat bangga dengan 20 mahasiswa yang terpilih dan mendapatkan kesempatan untuk belajar di Yale University.\r\n\r\nRasa bangga tersebut tidak lepas dari fakta bahwa Yale University merupakan salah satu perguruan tinggi tertua di Amerika Serikat. Selain itu, universitas tersebut merupakan salah satu dari kelompok Ivy League dan memiliki prestise yang sangat tinggi di kalangan akademisi serta telah melahirkan berbagai tokoh penting. Oleh sebab itu, bergabungnya Yale University sebagai host university merupakan kesempatan emas yang tidak boleh dilewatkan oleh mahasiswa Indonesia.\r\n \r\nMengirimkan mahasiswa untuk belajar ke Yale University menghadirkan banyak tantangan. Tentunya karena lini masa pembelajaran yang berbeda serta proses meyakinkan Perguruan Tinggi Dalam Negeri (PTDN) untuk mau memberikan izin kepada mahasiswanya, terang Rachmat.\r\n \r\nMeskipun menghadapi berbagai tantangan, pada pelaksanaan pembukaan pendaftaran IISMA 2023 yang sudah berlalu, Yale University cukup banyak menarik minat mahasiswa Indonesia.\r\n \r\nAlhamdulillah, ketika IISMA 2023 dibuka pendaftarannya ada lebih dari 100 mahasiswa yang memilih Yale University sebagai tujuan dan hari ini sudah ada 20 mahasiswa terbaik yang siap berangkat dan belajar di sana,lanjut Rachmat.\r\n \r\nKesempatan belajar di Yale University juga diapresiasi oleh pihak PTDN yang berhasil mengirimkan mahasiswanya untuk belajar di sana. Universitas Indonesia contohnya, menyampaikan apresiasi kepada tim pelaksana Program IISMA karena sudah menjalin kerja sama dengan Yale University.\r\n \r\nKami sangat bangga dengan mahasiswa yang saat ini sudah mempersiapkan diri untuk berangkat. Tidak lupa kami ucapkan selamat kepada para orang tua karena sudah mengantar anak-anaknya hingga sampai titik ini,kata Astha Ekadiyanto, Direktur Center of Independent Learning Universitas Indonesia.\r\n \r\nSelain dihadiri oleh perwakilan PTDN dan mahasiswa terpilih, kegiatan ini juga menghadirkan orang tua mahasiswa yang menyampaikan rasa terima kasih kepada Kemendikbudristek atas kesempatan yang diberikan kepada mahasiswa untuk belajar dan menambah wawasannya melalui Program IISMA.\r\n \r\nKegiatan pelepasan ini kemudian diakhiri dengan penyampaian komitmen oleh mahasiswa sebelum akhirnya berangkat ke Amerika Serikat di hari yang sama.\r\n \r\nKami para mahasiswa berkomitmen untuk tidak hanya bersungguh-sungguh menjalankan studi kami selama mengikuti Program IISMA, tapi kami juga siap untuk menjadi duta bangsa yang memperkenalkan budaya Indonesia di negara yang kami tuju,tutur Tabina Azalia Oktara, peserta IISMA 2023 yang berasal dari Universitas Gadjah Mada.\r\n \r\nProgram IISMA 2023 sendiri pada tahun ini akan memberangkatkan sebanyak lebih dari 1.600 mahasiswa. Sejak diluncurkan tahun 2021, terdapat lebih dari 20.000 mahasiswa telah mendaftar ke Program IISMA dan sebanyak 3.797 mahasiswa akademik maupun vokasi telah dikirim ke luar negeri untuk mencari pengalaman, memperkaya  wawasan, dan mengenalkan budaya Indonesia ke berbagai penjuru dunia. ', 3, 1, 'pend2.JPG'),
(11, 'Kisah Inspiratif Mahasiswa Kampus Mengajar, Bantu Peningkatan Literasi di SDN 12 Kabupaten Sorong', '2023-06-07 07:38:19', 'Pelaksanaan Program Kampus Mengajar yang saat ini sedang berjalan untuk angkatan kelima telah menerjunkan lebih dari 21.000 mahasiswa. Mereka berperan menjadi mitra guru dalam menyusun strategi pembelajaran yang berfokus pada peningkatan literasi dan numerasi peserta didik. Penugasan angkatan kelima yang dimulai sejak Februari lalu melibatkan lebih dari 5.000 Sekolah Dasar (SD) dan Sekolah Menengah Pertama (SMP) di seluruh provinsi di Indonesia.\r\n \r\nSebanyak empat sekolah di Kabupaten Sorong menjadi sekolah sasaran penugasan mahasiswa pada pelaksanaan Program Kampus Mengajar Angkatan 5, termasuk di antaranya SDN 12 Kabupaten Sorong. Terdapat empat orang mahasiswa yang bertugas di sekolah yang ada di Distrik Klasafet ini. Penugasan mahasiswa yang sudah berlangsung selama 14 minggu ini mendapatkan apresiasi yang sangat baik dari pemangku kepentingan di daerah tersebut, yakni Dinas Pendidikan dan Kebudayaan Kabupaten Sorong.\r\n \r\nKami sangat senang dengan kehadiran mahasiswa Program Kampus Mengajar, terutama karena di daerah Kabupaten Sorong masih terdapat banyak sekolah yang kekurangan tenaga pendidik, terang Reinhard Simamora, Kepala Dinas Pendidikan dan Kebudayaan Kabupaten Sorong di kantornya pada kegiatan kunjungan monitoring dan evaluasi Tim Program Kampus Mengajar pada Senin (22/05).\r\n \r\nDi sekolah, para mahasiswa menjalankan berbagai program dengan bekerja sama bersama para guru dan juga kepala sekolah. Jarak sekolah yang cukup jauh, setidaknya butuh waktu satu jam untuk mencapai lokasi SDN 12 Kabupaten Sorong dari Distrik Aimas yang merupakan pusat pemerintahan Kabupaten Sorong, menjadikan mahasiswa kemudian memutuskan untuk tinggal di tengah-tengah masyarakat.\r\n \r\nMahasiswa yang tinggal di sekitar sekolah juga sering mengikuti kegiatan masyarakat dan bahkan membantu mereka, sehingga dampak yang dirasakan tidak hanya untuk siswa dan guru, namun masyarakat juga merasakan dampak positifnya,tutur Bertus Lumar, Kepala Sekolah SDN 12 Kabupaten Sorong kepada Tim Pelaksana Program Kampus Mengajar pada kegiatan kunjungan monitoring dan evaluasi Tim Program Kampus Mengajar, Selasa (23/5/2023).\r\n \r\nBeberapa program inovatif yang dirancang dan dijalankan oleh mahasiswa Program Kampus Mengajar contohnya adalah pemanfaatan plastisin sebagai bahan alat pengajaran, kelas baca, tulis, dan hitung (calistung) tambahan untuk semua jenjang kelas,  pembuatan mading sebagai wadah karya peserta didik ditampilkan, pembuatan pojok literasi dan numerasi hingga pembiasaan membaca 15 menit sebelum pembelajaran dimulai, serta reaktivasi perpustakaan dengan memanfaatkan buku-buku bacaan bermutu yang telah didapatkan untuk membangun budaya literasi di sekolah.\r\n \r\nSelain berdampak kepada peserta didik, sekolah, dan masyarakat, program Kampus Mengajar juga memiliki dampak positif dalam pengembangan kompetensi mahasiswa sebagai fokus utama pelaksanaan program. Selama bertugas, mahasiswa banyak mendapatkan pengalaman dan kompetensi yang kian terasah.\r\n \r\nKami merasa kemampuan public speaking kami meningkat dan lebih berani untuk berbicara di depan orang. Selama bertugas, kami selalu berkoordinasi dengan guru sehingga jadi tahu bagaimana cara berkomunikasi dengan peserta ini dengan baik. Selain itu,  penugasan di lingkungan baru membuat kami harus bisa beradaptasi dan selalu bersiap untuk setiap perubahan yang terjadi setiap harinya,kata Chitra Ayu Triani Wijaya mahasiswa Universitas Victory Sorong sekaligus ketua kelompok mahasiswa yang bertugas di SDN 12 Kabupaten Sorong.\r\n \r\nCatatan baik yang berhasil ditorehkan mahasiswa Program Kampus Mengajar yang bertugas di SDN 12 Kabupaten Sorong ini merupakan satu dari sekian banyak capaian positif yang diraih. Untuk terus memperluas dampak baik tersebut, program Kampus Mengajar saat ini sedang membuka pendaftaran untuk Kampus Mengajar Angkatan 6 hingga 4 Juni dan memberi kesempatan bagi 21.500 mahasiswa dan 2.150 dosen untuk bergabung.', 3, 1, 'pend3.JPG'),
(12, 'Kurikulum Merdeka Dorong Pembelajaran yang Berpusat Pada Siswa', '2023-06-07 07:40:55', 'Medan, Kemendikbudristek - Pusat Kurikulum dan Pembelajaran (Puskurjar), Badan Standar, Kurikulum, dan Asesmen Pendidikan (BSKAP), Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi (Kemendikbudristek) mengadakan sosialisasi Kurikulum Merdeka pada 19 Mei 2023. Kegiatan yang melibatkan perwakilan guru di Kota Medan ini bertujuan untuk menyampaikan kebijakan kurikulum kepada ekosistem pendidikan dan pemerintah daerah agar dapat diimplementasikan dengan baik.\r\n \r\nPelaksana tugas (Plt.) Puskurjar, Zulfikri Anas, mengatakan kepatuhan administrasi bukanlah menjadi persyaratan utama dalam Kurikulum Merdeka melainkan kecintaan guru pada siswa dan bagaimana guru bisa menggunakan mata hati untuk melihat kebutuhan mereka.\r\n \r\nZulfikri Anas menjelaskan bahwa pendidikan merujuk pemikiran Ki Hadjar Dewantara adalah untuk memerdekakan manusia secara lahir dan batin. Guru harus memerdekakan muridnya dan hal ini tidak mungkin terjadi apabila guru terbelenggu oleh administrasi yang rumit dan materi yang banyak. Kurikulum Merdeka memberikan kemerdekaan pada siswa dan juga gurunya dalam memilih metode yang paling tepat sesuai kebutuhan siswanya. Oleh sebab itu, guru harus mengenal dulu siswanya sebelum menyampaikan materi. Upaya mengembalikan pendidikan ke marwah yang sebenarnya dapat dicapai melalui kurikulum ini,ungkap Zulfikri.\r\n \r\nDalam kesempatan ini turut hadir Sofyan Tan selaku Anggota Komisi X DPR RI memberikan dukungannya terhadap Kurikulum Merdeka. Sofyan mengatakan, guru merupakan fasilitator yang sejatinya dalam proses pembelajaran mampu memberi keleluasaan kepada peserta didik. Dalam mengoptimalkan proses pembelajaran, tidak ada batasan bagi guru untuk menggunakan peralatan yang sesuai dan dapat membantunya mempermudah proses pemahaman materi pada peserta didik.\r\n \r\nBelajar harus bahagia seperti bermain di dalam taman. Bermain menghasilkan inovasi terbaru, di mana siswa pulang lebih pintar, lebih ramah dan lebih bahagia. Jika anak pulang dalam keadaan stres maka guru itu gagal,ujar Sofyan.\r\n \r\nLebih lanjut Sofyan menjelaskan bahwa saat ini sekolah yang menerapkan Kurikulum Merdeka sudah hampir 80 persen. Kurikulum Merdeka menjadikan anak berpikir logis dan mendorong daya kritisnya. Inilah salah satu nilai penting yang harus dimiliki generasi masa depan. Ditambah makin tingginya tuntutan kompetensi bagi generasi di masa mendatang sehingga anak harus menguasai berbagai bidang ilmu maupun keahlian (multi disiplin ilmu).\r\n \r\nSofyan menilai, penerapan Kurikulum Merdeka ini sangat relevan kondisi dan kebutuhan dunia kerja di masa mendatang. Oleh karena itu penting untuk menjaga implementasi Kurikulum Merdeka ini agar berjalan secara berkesinambungan hingga ke jenjang perguruan tinggi.\r\n \r\nSuatu barang akan berubah nilainya tergantung pada lingkungan di mana dia berada. Kurikulum Merdeka sangat penting untuk kelanjutan pendidikan anak sampai ke perguruan tinggi, karena anak harus bisa multidisiplin, tidak bisa hanya satu disiplin ilmu saja agar mereka bisa berhasil, jelasnya.\r\n \r\nSalah satu peserta acara sosialisasi, Guru SD Swasta Parulian 1 Medan, Romian Theresia Nababan mengungkapkan Kurikulum Merdeka bersifat fleksibel. Sebagai Guru Penggerak, ia sangat antusias menerapkan ilmu yang ia dapatkan kepada siswa dan berbagi kepada guru-guru lain di sekolah tempat ia mengajar.\r\n \r\nMeskipun sekolah kami masih dalam proses mendaftar Kurikulum Merdeka namun saya mulai menerapkan budaya positif di sekolah agar Projek Penguatan Profil Pelajar Pancasila (P5) bisa tercipta secara merata. Saya tidak terlalu berpatokan kepada buku lagi namun belajar dari platform Guru Berbagi, Guru Belajar, dan melalui youtube lalu saya ajarkan ilmu yang saya dapat kepada siswa,jelas Romian.\r\n \r\nPeserta lain, Guru SD Hidup Baru, Rentha Siregar merespons dengan baik kegiatan sosialisasi ini. Menurutnya, guru menjadi lebih bisa mengenal Kurikulum Merdeka yang merupakan kelanjutan dari K-13 namun Kurikulum Merdeka lebih student-centered. Rentha berharap setelah mengikuti kegiatan ini,  ia dan temannya lebih bisa berkolaborasi dan menyamakan persepsi mengenai Kurikulum Merdeka.\r\n \r\nRentha menjelaskan lebih lanjut bahwa di sekolah tempat ia mengajar masih ada beberapa guru yang kurang memahami kurikulum ini dan menganggap merubah kurikulum adalah sesuatu yang melelahkan. Guru sebagai fasilitator harus memiliki kekuatan dan energik karena siswa SD punya energi yang luar biasa, namun ketika mereka bisa belajar sambil bermain maka mereka akan merasa senang dan nagih terus ingin belajar, Tutur Rentha.', 3, 1, 'pend4.JPG'),
(13, 'Aldi Taher Nyaleg Tanpa Visi Misi Banjir Dukungan', '2023-06-01 17:04:43', 'Nama Aldi Taher belakangan ini makin viral, apalagi setelah dirinya menyatakan terjun ke dunia politik sebagai Caleg 2024. Yang bikin heboh, namanya terdaftar di dua partai politik berbeda, yaitu PBB dan Perindo.\r\n\r\nSebagai caleg, artis Aldi Taher mengaku bingung tidak punya visi dan misi. Bahkan wawancaranya di salah satu tv swasta nasional sempat trending.\r\n\r\nDalam wawancara dengan Ruben Onsu, Aldi Taher juga mengaku tidak memiliki program kerja atau visi misi jika terpilih nanti.\r\n\r\n\"Kalau apa yang akan saya lakukan, pilih aja dulu,\" kata Aldi Taher, dikutip dari potongan video di TikTok @ryojaya.\r\n\r\n\"Lu juga belum tahu mau ngapain ya?\" sahut Ruben Onsu.\r\n\r\nTak menampik, Aldi Taher jujur mengakui. Dengan wajah serius, ia menuturkan belum memikirkannya.\r\n\r\n\"Iya, gue juga belum tahu gue mau ngapain. Orang belum kepilih,\" tutur Aldi Taher.\r\n\r\nAldi Taher kemudian menyetuskan ide agar masyarakat tidak memilihnya. Ia bahkan menyebut bakal pindah negara jika terpilih menjadi anggota DPR.\r\n\r\n\"Pokoknya kalau sampai Aldi Taher kepilih jadi anggota DPR, saya pindah negara,\" kata Aldi Taher.\r\n\r\n\"Tapi jangan pilih saya, nggak usah pilih saya,\" serunya menambahkan.\r\n\r\nImbauan Aldi Taher itu justru membuat reaksi yang sebaliknya dari warganet. Mereka malah penasaran bagaimana negeri ini jika memiliki anggota DPR seperti Aldi Taher yang tak mengumbar janji.\r\n\r\nGue jadi pengen liat DPR RI gimana kalau Aldi Taher jadi anggotanya,\" komentar @yud***.\r\n\r\n\"Dan rakyat milih dia karena penasaran,\" imbuh @sat***.\r\n\r\n\"Betul itu, pilih aja dulu, but apa nanya sekarang kalau hanya janji udah kepilih nanti, pilih aja dulu baru kerja,\" timpal @tyr***.\r\n\r\n\"Lo asik, gue pilih lu bang,\" tambah @heh***.\r\n\r\nApapun tanggapan netizen, yang pasti Aldi Taher berhasil membuat panggung politik Indonesia makin ramai.*', 4, 4, 'aldi-taher.jpeg'),
(14, 'Ganjar Ungkap Preman di Pemerintahan Bikin Investasi Mandek', '2023-06-06 09:04:43', 'Calon Presiden PDIP Ganjar Pranowo menyebut \"preman di pemerintahan\" sebagai salah satu faktor penghambat investasi.\r\n\"Apa yang membikin investasi tidak berjalan di tempatmu? Satu, pungli. Premannya banyak. Termasuk premannya ya yang memegang pemerintahan,\" kata Ganjar dengan gestur memegang-megang kancing batiknya.\r\n\r\nHal tersebut dikatakan Ganjar dalam forum MNC pada Senin (20/5/2023) di Jakarta Pusat. Dalam pidatonya, Ganjar membahas soal Indonesia berdikari dan kaitannya dengan bonus demografi.\r\n\r\nDalam cuplikan yang dibagikan lewat akun Twitternya, Ganjar menyinggung soal bonus demografi yang menurutnya membutuhkan beberapa hal yang \"lebih banyak.\"\r\n\r\n\"Bonus demografi itu bapak ibu membutuhkan pekerjaan yang jauh lebih banyak. Energi yang lebih banyak. Pangan yang lebih banyak. Ruang yang lebih banyak. Butuh kekuatan yang terkonsolidasi.\" katanya.\r\n\r\nGubernur Jawa Tengah itu mengungkapkan \"kekuatan yang terkonsolidasi\" dibutuhkan untuk mewujudkan Indonesia berdikari. Politisi berusia 54 tahun itu juga mengatakan \"speed\" menjadi faktor yang menjadi fokus regulasi.\r\n\r\n\"Kata kuncinya hanya satu kok bapak ibu...Speed. Kita mau menjadi bangsa yang cepat. Regulasi kemudian akan kita dorong untuk menuju ke arah percepatan. SDM harus didorong pada crash programme agar bisa masuk pada percepatan itu,\" ujarnya.\r\n\r\nNamun menurut Ganjar ada beberapa faktor yang menghambat investasi. Selain pungli, Ganjar juga menyebut faktor lain penghambat investasi adalah \"ekonomi berbiaya tinggi.\"\r\n\r\nGanjar menambahkan ekonomi yang sangat berbelit pun menghambat investasi. Menurutnya, hal-hal tersebut \"menjadi protes dari publik.\"\r\n\r\n\"Komitmen pemimpin apakah nasional maupun lokal mesti menunjukkan itu dengan gampang. Ini momentum baik buat bangsa Indonesia untuk menunjukkan keberdikariannya,\" kata Ganjar.', 4, 4, 'ganjar.jpg'),
(15, 'Ganjar Tiba di Rumah Pemenangan Pilpres, Disambut Palang Pintu', '2023-06-01 15:17:16', 'Bacapres PDIP Ganjar Pranowo tiba di acara peresmian Rumah Aspirasi Relawan Pemenangan yang sekaligus menjadi Sekretariat Tim Koordinasi Relawan Pemenangan Pilpres 2024. Ganjar disambut tradisi palang pintu.\r\nPantauan detikcom, Kamis (1/6/2023) siang, Ganjar tiba dengan pakaian hitam di rumah pemenangan yang berlokasi di Jalan Diponegoro Nomor 72, Jakarta Pusat itu. Relawan berbaju nuansa merah memadati halaman rumah menyambut Ganjar.\r\n\r\nPara relawan antusias dan berebut selfie dengan sang bacapres. Keramaian relawan juga bertumpah hingga ke halaman di luar rumah pemenangan. Situasi lalu lintas di lokasi padat lancar saat ini.\r\n\r\nBeberapa di antara yang hadir ialah Sekjen PDIP Hasto Kristiyanto, Plt Ketua Umum PPP Muhamad Mardiono, Jubir PPP Achmad Baidowi atau Awiek, dan Ketua Umum Hanura Oesman Sapta Odang.\r\n\r\nKetua, Wakil Ketua, dan Sekretaris Tim Koordinasi Relawan Pemenangan Pilpres PDI Perjuangan (TKRPP-PDIP) Ahmad Basarah, Adian Napitupulu, serta Deddy Yevry Sitorus turut hadir dalam peresmian rumah aspirasi.\r\n\r\nNantinya, acara peresmian akan memutar video berdurasi empat menit yang berisi perjalanan karier Ganjar di dunia politik Tanah Air. Acara peresmian juga diisi dengan sambutan para elite parpol yang hadir di lokasi seperti Puan, OSO, hingga Mardiono.\r\n\r\nNantinya, acara juga akan diisi dengan penandatanganan spanduk kebulatan tekad organisasi sukarelawan untuk memenangkan Ganjar sebagai Presiden 2024-2029.\r\n\r\nBasarah menyebut Rumah Aspirasi Relawan Ganjar Pranowo didesain untuk memudahkan koordinasi para pendukung dari alumnus Gadjah Mada (UGM) itu.\r\n\r\n\"Jadi nanti desain kantor pusat koordinasi sukarelawan didesain untuk melayani seluruh elemen-elemen masyarakat yang membentuk organisasi sukarelawan dan bergabung berkoordinasi bekerja sama dengan kami,\" ujar Basarah.\r\n\r\nMenurutnya, konsep rumah aspirasi untuk memudahkan sukarelawan bisa menyampaikan pendapat untuk pemenangan Ganjar.\r\n\r\n\"Jadi, konsepnya konsep layanan dalam konteks demokrasi nanti di panggung depan kami akan membuat semacam panggung demokrasi. Jadi, setiap organisasi sukarelawan menyampaikan aspirasi, menyatakan dukungannya, menyampaikan gagasan untuk perbaikan bangsa, kami siapkan forumnya,\" kata Basarah.\r\n\r\nRencana peresmian sekretariat pemenangan ini sebelumnya diumumkan Ketua Umum PDIP Megawati Soekarnoputri. Hal ini disampaikan oleh Sekretaris Tim Koordinasi Relawan Pemenangan Pilpres PDI Perjuangan (TKRPP-PDIP) Deddy Sitorus.\r\n\r\n\"Sekretariat ini bisa dikunjungi dan diresmikan oleh Ketua Umum PDI perjuangan Ibu Megawati Soekarnoputri dan bakal calon presiden kita Bapak Ganjar Pranowo (akan) hadir di tempat ini, nanti direncanakan pada tanggal 1 Juni 2023,\" kata Deddy dalam konferensi persnya di Menteng, Jakarta Pusat, Jumat (12/5).\r\n\r\nAdapun kantor Sekretariat Tim Koordinasi Relawan Pemenangan Pilpres PDI Perjuangan (TKRPP-PDIP) terletak di Jalan Diponegoro Nomor 72, Menteng, Jakarta Pusat. Peresmian kantor akan bertepatan dengan hari lahirnya Pancasila 1 Juni.', 4, 4, 'ganjar 2.jpeg'),
(16, 'Anies Disambut AHY di Pacitan, Diajak Keliling Museum SBY-ANI', '2023-06-01 09:10:20', 'Bakal calon presiden dari Koalisi Perubahan untuk Persatuan, Anies Baswedan, menemui Ketua Majelis Tinggi Partai Demokrat Susilo Bambang Yudhoyono (SBY) hari ini di Pacitan, Jawa Timur. Kedatangan Anies di Museum dan Galeri SBY-ANI disambut oleh Ketum Demokrat Agus Harimurti Yudhoyono (AHY).\r\nMomen AHY menyambut Anies itu dibagikan oleh Deputi Balitbang DPP Partai Demokrat Syahrial Nasution. Dalam foto yang diberikan tampak Anies dan AHY berfoto di depan foto SBY dan Ani Yudhoyono di salah satu bagian museum.\r\n\r\n\"Di Museum dan Galeri SBY-ANI,\" ujar Syahrial sambil melampirkan foto tersebut, Kamis (1/6/2023).\r\n\r\nSyahrial menyebut AHY sempat mengajak Anies berkeliling museum. Setelah itu baru dilakukan pertemuan terbatas dengan SBY.\r\n\r\n\"Sebelum melaksanakan pertemuan terbatas, Ketum AHY mengajak dan mendampingi Anies berkeliling ke museum. (Saat ini) masih pertemuan,\" kata dia.\r\n\r\n\"Bapak (SBY) nggak ikut nyambut Anies. Di pertengahan meninjau museum, baru Bapak masuk,\" imbuhnya.\r\n\r\nDiketahui Anies Baswedan diagendakan menemui SBY di Pacitan, Jawa Timur hari ini. Ketum PD Agus Harimurti Yudhyono (AHY) ikut pertemuan.\r\n\r\n\"Iya, benar. Siang ini calon presiden dari Koalisi Perubahan, Mas Anies Baswedan akan ke Pacitan. Rencananya bertemu Bapak SBY dan Mas AHY,\" kata juru bicara PD Herzaky Mahendra Putra, Kamis (1/6).\r\n\r\nPertemuan Anies dengan SBY dan AHY bagian dari memantapkan strategi pemenangan Koalisi Perubahan. \"Anies memang intens bertemu dengan Demokrat, NasDem, PKS. Untuk penguatan dan pemantapan strategi pemenangan. Pertemuan siang ini juga bagian dari itu,\" ujarnya.', 4, 4, 'anies.jpeg'),
(17, 'Media Argentina Soroti Tiket Pertandingan Timnas Indonesia vs Argentina Ludes Dalam 5 Menit', '2023-06-07 23:33:00', 'Media Argentina menyoroti kabar tiket pertandingan Timnas Indonesia ludes dalam waktu lima menit. Mereka menyebut pecinta sepak bola bakal memenuhi venue pertandingan.  Argentina dijadwalkan dijamu Timnas Indonesia dalam laga FIFA matchday pada 19 Juni 2023. Pertandingan ini berlangsung di Stadion Utama Gelora Bung Karno (SUGBK), Senayan, Jakarta.  Pertandingan ini merupakan rangkaian tur Asia Timnas Argentina. Sebelumnya, Lionel Messi dan kawan-kawan dijadwalkan melawan Australia di China pada 15 Juni mendatang.  Media Argentina, Infobae menuliskan artikel yang mengumumkan tiket pertandingan melawan Timnas Indonesia ludes terjual. Tepatnya, Selasa 6 Juni lalu. \"Argentina akan mengunjungi Indonesia untuk memainkan pertandingan persahabatan melawan tim nasional Indonesia dalam kalender FIFA. Ini telah merevolusi negara Asia yang diberi kesempatan untuk melihat beberapa pemain sepak bola terbaik dunia di tanah mereka,\" tulis media tersebut seperti dilansir, Rabu (7/6/2023).  \"Karena itu, tiket terjual habis hanya dalam waktu 5 menit saja,\" sambung artikel dari Infobae. Tentu laga ini bakal menarik perhatian. Khususnya untuk menyaksikan aksi Lionel Messi dan kawan-kawan berhadapan dengan Asnawi Mangkualam Cs.  Bagi Timnas Indonesia, Argentina akan menjadi lawan kedua dalam FIFA matchday periode Juni 2023. Sebelum itu, skuad Garuda akan melawan Palestina pada 14 Juni di Stadion Gelora Bung Tomo, Surabaya.', 2, 2, '2093582173_1-timnas-argentina.jpg'),
(18, 'Jadwal Liga Champions Manchester City vs Inter Milan', '2023-06-08 23:46:00', 'Final Liga Champions 2022/2023 akan mempertemukan Manchester City melawan Inter Milan. Laga perebutan supremasi tertinggi antarklub Eropa itu berlangsung di Stadion Ataturk Olimpiyat, Istanbul, Minggu (11/6/2023) pukul 02:00 WIB.  Final Liga Champions musim ini bakal ditayangkan langsung SCTV. Pertandingan juga dapat disaksikan langsung melalui streaming Vidio. Baik Manchester City maupun Inter Milan sama-sama memburu gelar ketiga di musim ini. Manchester City baru saja memenangkan Piala FA untuk melengkapi titel Liga Inggris.  Inter Milan juga memburu status treble winners, meski gengsinya sedikit di bawah. Pasalnya, I Nerazzurri gagal menjuarai Serie A. Namun, mereka sudah menguasai Coppa Italia dan Piala Super Italia.  Laga Manchester City vs Inter Milan jadi pertarungan kelima Inggris kontra Italia pada partai puncak Liga Champions. Wakil Inggris pada empat kesempatan sebelumnya seluruhnya diwakili Liverpool.  The Reds meladeni AS Roma, Juventus, dan AC Milan (2) pada perebutan gelar. Klub Merseyside tersebut memetik dua kemenangan atas Roma dan Milan.  Simak jadwal Liga Champions di halaman berikut:  Minggu, 11 Juni 2023  02.00 WIB: Manchester City vs Inter Milan  Ataturk Stadium  Live SCTV dan Vidio', 2, 2, '36354526_Manchester-City-vs-Inter-Milan-Final-Liga-Champions-2022-2023.jpg'),
(19, 'Karim Benzema Sah Jadi Pemain Al Ittihad, Box Office Terbaru Liga Arab Saudi', '2023-06-07 23:50:00', 'Juara Liga Arab Saudi, Al Ittihad telah mengonfirmasi penandatanganan Karim Benzema dengan kontrak tiga tahun hingga 2026. Benzema diresmikan pada Rabu (7/6/2023).  Presiden Al Ittihad, Anmar Bin Abdullah Alhailae, menyebut perekrutan Benzema adalah tonggak bersejarah bagi klub yang bermarkas di Jeddah itu.    Mantan pemain Timnas Prancis itu tiba-tiba mengakhiri karier gemilangnya selama 14 tahun di Real Madrid pada akhir pekan lalu, setelah semula diperkirakan akan memperpanjang masa tinggalnya hingga 2024.  Benzema meninggalkan Real Madrid sebagai pencetak gol terbanyak kedua sepanjang masa dengan 354 gol dalam 648 pertandingan, memenangkan lima mahkota Liga Champions bersama Los Blancos.  Setelah mengumpulkan empat gelar La Liga dan empat mahkota Ligue 1 di Lyon, Benzema telah menegaskan bahwa dia telah mencapai semua tujuannya di sepak bola Eropa.   ', 2, 2, '1123050615_059633600_1686093588-Fx9gIYHWAAAlu5c.jpg'),
(20, 'Hanya 10 Menit, Penjualan Tiket Timnas Indonesia Vs Argentina Hari Kedua Kembali Ludes Terjual', '2023-06-07 23:58:00', 'Pada penjualan tahap kedua yang dilaksanakan hari Selasa (6/6), tiket dijual untuk umum.  Ketum PSSI Erick Thohir menyebutkan ada 20 ribu tiket yang dijual untuk penjualan umum. Dari pantauan BolaSport.com dari laman tiket.com, antusiasme  suporter timnas Indonesia tidak menurun.  Bahkan, hanya butuh 10 menit untuk membuat tiket ludes terjual.  Sementara itu, masih ada penjualan hari terakhir yang dilaksanakan pada Kamis (7/6).  Nantinya ada 20 ribu tiket yang dijual untuk penjualan besok mulai pukul 12.00. WIB.  Total ada 60 ribu tiket yang dijual pada laga FIFA Matchday skuad Garuda nanti.', 2, 2, '226086970_fwssuaewcamwgfnjpeg-20230522082935.jpeg');

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

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama_pengirim`, `komentar`, `tgl_komentar`, `id_berita`) VALUES
(1, 'Mario', 'Pak Ganjar selalu dihati!!!', '2023-06-12 01:13:06', 15),
(2, 'Dinda', 'Ngeri bgttt', '2023-06-12 13:42:33', 8),
(3, 'gsgs', 'gsgsgs', '2023-06-12 13:43:13', 8),
(4, 'Wawan', 'Situasi ini sangat mengkhawatirkan. Bagaimana bisa stok vaksin habis di tengah KLB rabies? Pemerintah harus lebih proaktif dalam mengantisipasi kebutuhan vaksin dan melindungi masyarakat serta hewan peliharaan', '2023-06-12 16:51:07', 6),
(5, 'ujang', 'Sangat disayangkan melihat jumlah vaksin rabies yang terbatas di Sikka. Kesehatan dan keselamatan masyarakat harus menjadi prioritas utama. Harapannya, pemerintah dapat segera menyediakan pasokan vaksin yang memadai untuk mengendalikan KLB ini.', '2023-06-12 17:10:17', 6),
(6, 'no name', 'sfs', '2023-06-20 18:34:08', 7),
(7, 'fs', 'sfs', '2023-06-20 20:21:40', 9),
(9, 'Doni', 'Gass nonton sih', '2023-06-21 17:26:25', 18),
(10, 'nyenye', 'Yang ga daoet cungg', '2023-06-21 17:26:55', 17),
(11, 'sino', 'wahahah dapet gess', '2023-06-21 17:27:06', 17),
(12, 'tio', 'joki joki', '2023-06-21 17:27:16', 17),
(13, 'secret', 'yaudah lah ya', '2023-06-21 17:27:27', 17),
(14, 'sohib', 'nice info', '2023-06-21 17:27:53', 12),
(15, 'gani', 'turut berduka', '2023-06-21 17:30:00', 6),
(16, 'siapa ya', 'smoga lekas membaik', '2023-06-21 17:40:35', 6),
(17, 'sinta', 'kasian bgt yah', '2023-06-21 17:40:47', 6);

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id_like` int(11) NOT NULL,
  `jumlah_like` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id_like`, `jumlah_like`, `id_berita`) VALUES
(73, 53, 7),
(74, 25, 5),
(75, 37, 8),
(76, 6, 6),
(77, 3, 17),
(78, 4, 20),
(79, 2, 18),
(80, 4, 9),
(81, 3, 10),
(82, 1, 19),
(83, 1, 11),
(84, 1, 12),
(85, 1, 13),
(86, 1, 14),
(87, 1, 15),
(88, 1, 16),
(89, 1, 1),
(90, 1, 2),
(91, 1, 3),
(92, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `penulis_username` varchar(20) DEFAULT NULL,
  `penulis_password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama`, `penulis_username`, `penulis_password`) VALUES
(1, 'Feki Dui Marinda', 'feki', '$2y$10$bGynoEzEcGJmASvz9sWNSuap6cbhapjvPSWgVTVS2IjiS51WcBUT.'),
(2, 'Dandi Gus', 'dandi', '$2y$10$xkL5ORccC.uGyDvu5onrq.s1znSglOq.T2LzgksfyOnILliqF9JiS'),
(3, 'Elvina Rosanti', 'elvina', '$2y$10$fyIRIfTg91MFxJqHtYCReONGl/NSLOLIqYDqsSdUB8zYAW1rawwH6'),
(4, 'Fadlan Fauzi', 'fadlan', '$2y$10$i0a7Ge8Vjn6gey5P/w/jieB6w9z4OIX7qTapTDyyVMP6KE0mCkbya'),
(5, 'Ahmad Doni', 'ahmad', '$2y$10$/CuxPKQ6o.t3qoJ6yWs9UeXE96ylqZiPiIqFjqvZbDIqCyi77mlri');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`) VALUES
(1, 'elsanti', '$2y$10$tz3poTkWTe4aqVtHj7c96eDWOb5TfbbQWyD14y7KiZEoy9tST6fQi', 'Elsanti Rosvina'),
(2, 'elnavi', '$2y$10$y15/11ohdluju7.HxQvFHuKVRnn4sqrmRsZo3p3ATOAIXRAUZqQOW', 'Elnavi Rosanti'),
(4, 'klaudia', '$2y$10$4DYWlTf2zUDSaycB0xqnWObBmggNIyOmqV5cJBPiLPgKc5WQYY6UC', 'Klaudia Sarto'),
(5, 'sanisan', '$2y$10$m5ss1OpXR0oDSy4Ct27nre57NBzbknHFWLRakmESTR4q91AOHw0Xa', 'Sani');

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
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
