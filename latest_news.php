<?php
include 'admin/koneksi.php';
error_reporting(0);
$query_count_comment = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_komentar FROM `komentar` WHERE `id_berita` = '$id_berita'");
$jumlah_komentar = mysqli_fetch_assoc($query_count_comment);
?>
<!doctype html>
<html class="no-js" lang="zxx">
<?php include "head.html" ?>

<body>

    <?php include "header.php" ?>

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

    <main>
        <!-- About US Start -->
        <section class="blog_area section-padding" style="margin-left: 300px; margin-top:-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php include 'trending.php' ?>
                    </div>
                    <div class="col-lg-9 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                        <?php
                        $query = $koneksi->query("SELECT * FROM berita JOIN penulis ON berita.id_penulis = penulis.id_penulis ORDER BY tgl_publish DESC LIMIT 5");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                                    $isi_berita = strlen($data['isi']) > 200 ? substr($data['isi'], 0, 200) . "....." : $data['isi'];
                            ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="admin/berita/<?= $data["gambar"]; ?>" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3 style="text-align: center;"><?php echo date('j', strtotime($data["tgl_publish"])) ?></h3>
                                        <p><?php echo date('F', strtotime($data["tgl_publish"])) ?></p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="single-blog.html">
                                        <h2> <a href="details.php?id=<?= $data["id"]; ?>"><?= $data["judul"]; ?></a></h2>
                                    </a>
                                    <p><?= $isi_berita; ?></p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i><?= $data["nama"] ?> </a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i><?php echo $jumlah_komentar['jumlah_komentar'] ?> Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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