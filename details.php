<?php
include 'admin/koneksi.php';
$halaman = "The Art Of Publishing";
$id_berita = $_GET['id'];

// Query untuk mengambil data berita berdasarkan ID
$query_detail_berita = mysqli_query($koneksi, "SELECT * FROM `berita` JOIN `penulis` ON `penulis`.`id_penulis` = `berita`.`id_penulis` WHERE `berita`.`id` = '$id_berita'");
$data_detail_berita = mysqli_fetch_assoc($query_detail_berita);

// Menampilkan informasi detail berita
$judul_berita = $data_detail_berita['judul'];
$tanggal_publish = $data_detail_berita['tgl_publish'];
$gambar_berita = $data_detail_berita['gambar'];
$isi_berita = $data_detail_berita['isi'];
$nama_penulis = $data_detail_berita['nama'];


$query_comment = mysqli_query($koneksi, "SELECT * FROM `komentar` WHERE `id_berita` = '$id_berita'");
$data_comment = mysqli_fetch_assoc($query_comment);


$query_count_comment = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_komentar FROM `komentar` WHERE `id_berita` = '$id_berita'");
$jumlah_komentar = mysqli_fetch_assoc($query_count_comment);
?>




<!doctype html>
<html class="no-js" lang="zxx">

<?php include "head.php" ?>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/atas.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <?php include "header.php" ?>

    <main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                <?php include 'trending.php' ?>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Tittle -->
                        <div class="about-right mb-90">
                            <div class="section-tittle mb-30 pt-30">
                                <h2><?php echo $judul_berita ?></h2>
                            </div>
                            <div class="author-date">
                                <p class=""></p>
                                </p><?php echo $nama_penulis ?></p>
                                <p style="color:darkgray;"><?php echo date('l, j F Y, H:i', strtotime($tanggal_publish)) ?></p>
                            </div>
                            <div class="about-img">
                                <img src="admin/berita/<?php echo $gambar_berita ?>" alt="">
                                <hr>
                            </div>
                            <div class="about-prea mt-3">
                                <?php
                                echo "<p class='about-pera1 text-justify mb-25'>" . $isi_berita . "</p>";
                                ?>
                            </div>
                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">Share:</h3>
                                    <ul>
                                        <li><a href="https://instagram.com/faazinn?igshid=OGQ5ZDc2ODk2ZA=="><img src="assets/img/news/icon-ins.png" alt=""></a></li>
                                        <li><a href="https://web.facebook.com/dandygus07/"><img src="assets/img/news/icon-fb.png" alt=""></a></li>
                                        <li><a href="https://twitter.com/lima5puluh_?t=M_MEp5BxyeRB6FCkrJCBUQ&s=08"><img src="assets/img/news/icon-tw.png" alt=""></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCBdS_7PfFcuH4kL0QbshiQA"><img src="assets/img/news/icon-yo.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- From -->
                        <div class="comments-area">
                            <h4><?php echo $jumlah_komentar['jumlah_komentar'] ?> Comments</h4>
                            <?php
                            $data = mysqli_query($koneksi, "SELECT * FROM komentar WHERE id_berita = '$id_berita' ");
                            if (!empty($data)) {
                                while ($d = mysqli_fetch_array($data)) { ?>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="assets/img/comment/default_avatar.png" alt="">
                                                </div>
                                                <div class="desc">
                                                    <p class="comment">
                                                        <?php echo $d['komentar'] ?>
                                                    </p>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <h5>
                                                                <a href="#"><?php echo ucfirst($d['nama_pengirim']) ?></a>
                                                            </h5>
                                                            <p class="date"><?php echo date('l, j F Y, H:i', strtotime($d['tgl_komentar'])) ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                            <div class="comment-form">
                                <h4>Leave a Reply</h4>
                                <form class="form-contact comment_form" action="add_comment.php?id=<?php echo $id_berita; ?>" method="post" id="commentForm">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php include 'followus.html' ?>
                        <div class="blog_right_sidebar mt-50">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Related News</h3>
                                <?php
                                $id_berita = $_GET['id'];

                                $query = mysqli_query($koneksi, "SELECT b.id_kategori FROM berita b WHERE b.id = $id_berita");

                                if ($query) {
                                    if (mysqli_num_rows($query) > 0) {
                                        $row = mysqli_fetch_assoc($query);
                                        $id_kategori = $row['id_kategori'];

                                        $sql_related = "SELECT b.id, b.judul, b.tgl_publish, b.gambar FROM berita b WHERE b.id_kategori = $id_kategori AND b.id != $id_berita LIMIT 4";
                                        $result_related = mysqli_query($koneksi, $sql_related);

                                        while ($row_related = mysqli_fetch_assoc($result_related)) {
                                            $id_berita_related = $row_related['id'];
                                            $judul = $row_related['judul'];
                                            $tgl_publish = $row_related['tgl_publish'];
                                            $gambar = $row_related['gambar'];
                                ?>
                                            <div class="media post_item">
                                                <img src="admin/berita/<?php echo $gambar; ?>" alt="post" style="width: 10vh; height: 8vh;">
                                                <div class="media-body">
                                                    <a href="details.php?id=<?php echo $id_berita_related; ?>">
                                                        <h3><?php echo $judul; ?></h3>
                                                    </a>
                                                    <p><?php echo date('l, j F Y', strtotime($tgl_publish)); ?></p>
                                                </div>
                                            </div>
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About US End -->
    </main>

    <?php include "footer.html" ?>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Breaking New Pluging -->
    <script src="./assets/js/jquery.ticker.js"></script>
    <script src="./assets/js/site.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>
