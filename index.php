<?php

include 'admin/koneksi.php';

?>
<!doctype html>
<html class="no-js" lang="zxx">
<?php include "head.html" ?>

<body>

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

    <?php include "header.php" ?>

    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <?php include 'trending.php' ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <?php 
                            $query = mysqli_query($koneksi, "SELECT * FROM `berita` LIMIT 1");
                            while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="admin/berita/<?php echo $data['gambar'] ?>" alt="">
                                    <div class="trend-top-cap">
                                        <span>Trending</span>
                                        <h2><a href="details.php"><?php echo $data['judul'] ?></a></h2>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                            <?php 
                            $query = mysqli_query($koneksi, "SELECT * FROM `berita` JOIN `kategori` ON `berita`.`id_kategori` = `kategori`.`id_kategori` WHERE `kategori`.`kategori` = 'Kesehatan' LIMIT 1");
                            while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                                            <div class="trend-bottom-img mb-30">
                                            <img src="admin/berita/<?= $data["gambar"]; ?>" style="height: 21vh;" alt="">
                                                            
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1">Kesehatan</span>
                                                <h4><a href="details.php?id=<?= $data["id"]; ?>"><?= $data["judul"]; ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                        <?php 
                            $query = mysqli_query($koneksi, "SELECT * FROM `berita` JOIN `kategori` ON `berita`.`id_kategori` = `kategori`.`id_kategori` WHERE `kategori`.`kategori` = 'Olahraga' LIMIT 1");
                            while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                                            <div class="trend-bottom-img mb-30">
                                            <img src="admin/berita/<?= $data["gambar"]; ?>" style="height: 21vh;" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color2">Olahraga</span>
                                                    <h4><a href="details.php?id=<?= $data["id"]; ?>"><?= $data["judul"]; ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                        <?php 
                            $query = mysqli_query($koneksi, "SELECT * FROM `berita` JOIN `kategori` ON `berita`.`id_kategori` = `kategori`.`id_kategori` WHERE `kategori`.`kategori` = 'Pendidikan' LIMIT 1");
                            while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                                            <div class="trend-bottom-img mb-30">
                                            <img src="admin/berita/<?= $data["gambar"]; ?>" style="height: 21vh;" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color3">Pendidikan</span>
                                                <h4><a href="details.php?id=<?= $data["id"]; ?>"><?= $data["judul"]; ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- Riht content -->
                        <div class="col-lg-4">
                        <?php 
                            $query = mysqli_query($koneksi, "SELECT * FROM `berita` JOIN `kategori` ON `berita`.`id_kategori` = `kategori`.`id_kategori` ORDER BY RAND() LIMIT 4");
                            while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                <img src="admin/berita/<?= $data["gambar"]; ?>" style="width: 120px; height: 100px;" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1"><?= $data["kategori"]; ?></span>
                                    <h4><a href="details.php?id=<?= $data["id"]; ?>"><?= $data["judul"]; ?></a></h4>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--   Weekly2-News start -->
        <div class="weekly2-news-area  weekly2-pading gray-bg">
            <div class="container" style="margin-top: -70px;">
                <div class="weekly2-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Weekly Top News</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="assets/img/news/weekly2News1.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="assets/img/news/weekly2News2.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Event night</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="assets/img/news/weekly2News3.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="assets/img/news/weekly2News4.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Event time</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="assets/img/news/weekly2News4.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!--  Recent Articles start -->
        <div class="recent-articles">
            <div class="container" style="margin-top: 40px;">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Recent Articles</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/news/recent1.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/news/recent2.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/news/recent3.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/news/recent2.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recent Articles End -->
        <!--Start pagination -->
        <!-- End pagination  -->
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