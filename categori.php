<?php


include 'admin/koneksi.php';
$query_kategori = mysqli_query($koneksi, "SELECT * FROM kategori");

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

    <!-- Header Start -->
    <?php include "header.php" ?>
    <!-- Header End -->

    <main>
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <?php include 'trending.php' ?>
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>Whats New</h3>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Semua</a>
                                            <?php
                                            while ($data_kategori = mysqli_fetch_assoc($query_kategori)) {
                                                $id_kategori = $data_kategori['id_kategori'];
                                                $kategori = $data_kategori['kategori'];
                                            ?>
                                                <a class="nav-item nav-link" id="nav-category-<?php echo $id_kategori; ?>" data-toggle="tab" href="#nav-category-<?php echo $id_kategori; ?>" role="tab" aria-controls="nav-category-<?php echo $id_kategori; ?>" aria-selected="false"><?php echo $kategori; ?></a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">

                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <?php
                                                // Ambil data berita secara acak
                                                $query_berita_semua = mysqli_query($koneksi, "SELECT * FROM `berita` JOIN `kategori` ON `berita`.`id_kategori` = `kategori`.`id_kategori` ORDER BY RAND() LIMIT 4");
                                                while ($data_berita_semua = mysqli_fetch_assoc($query_berita_semua)) {
                                                    // Tampilkan berita dalam kartu
                                                    $id_berita_semua = $data_berita_semua['judul'];
                                                    $judul_berita_semua = $data_berita_semua['judul'];
                                                    $gambar_berita_semua = $data_berita_semua['gambar'];
                                                    $kategori_berita_semua = $data_berita_semua['kategori'];
                                                ?>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="admin/berita/<?php echo $gambar_berita_semua; ?>" style="width:60vh; height: 40vh;" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?php echo $kategori_berita_semua; ?></span>
                                                                <h4><a href="details.php?id=<?php echo $data_berita_semua['id']; ?>"><?php echo $judul_berita_semua; ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <?php while ($data_kategori = mysqli_fetch_assoc($query_kategori)) {
                                        $id_kategori = $data_kategori['id_kategori'];
                                        $kategori = $data_kategori['kategori'];
                                    ?>
                                        <div class="tab-pane fade" id="nav-category-<?php echo $id_kategori; ?>" role="tabpanel" aria-labelledby="nav-category-<?php echo $id_kategori; ?>-tab">
                                            <div class="whats-news-caption">
                                                <div class="row">
                                                    <?php
                                                    // Ambil data berita berdasarkan kategori
                                                    $query_berita = mysqli_query($koneksi, "SELECT * FROM `berita` WHERE `id_kategori` = '$id_kategori'");
                                                    while ($data_berita = mysqli_fetch_assoc($query_berita)) {
                                                        // Tampilkan berita dalam kartu
                                                        $judul_berita = $data_berita['judul'];
                                                        $gambar_berita = $data_berita['gambar'];
                                                    ?>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="single-what-news mb-100">
                                                                <div class="what-img">
                                                                    <img src="admin/berita/<?php echo $gambar_berita; ?>" alt="">
                                                                </div>
                                                                <div class="what-cap">
                                                                    <span class="color1"><?php echo $kategori; ?></span>
                                                                    <h4><a href="#"><?php echo $judul_berita; ?></a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>Follow Us</h3>
                        </div>
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="assets/img/news/news_card.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Whats New End -->


        <!--Start pagination -->
        <div class="pagination-area pb-45 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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