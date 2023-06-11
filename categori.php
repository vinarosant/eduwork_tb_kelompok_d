<?php
include 'admin/koneksi.php';

include 'pagination.php';
?>


<!doctype html>
<html lang="zxx">

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
        <section class="whats-news-area pb-20">
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
                                            <a class="nav-item nav-link active" <?php if(isset($_GET['Semua'])){ echo "active "; } ?>" href="categori.php?Semua" aria-selected="true">Semua</a>
                                            <a class="nav-item nav-link"  <?php if(isset($_GET['Kesehatan'])){ echo "active "; } ?>"href="categori.php?Kesehatan" aria-selected="false">Kesehatan</a>
                                            <a class="nav-item nav-link"  <?php if(isset($_GET['Olahraga'])){ echo "active "; } ?>"href="categori.php?Olahraga" aria-selected="false">Olahraga</a>
                                            <a class="nav-item nav-link"  <?php if(isset($_GET['Pendidikan'])){ echo "active "; } ?>"href="categori.php?Pendidikan" aria-selected="false">Pendidikan</a>
                                            <a class="nav-item nav-link"  <?php if(isset($_GET['Politik'])){ echo "active "; } ?>"href="categori.php?Politik" aria-selected="false">Politik</a>
                                            <a class="nav-item nav-link"  <?php if(isset($_GET['MakananMinuman'])){ echo "active "; } ?>"href="categori.php?MakananMinuman" aria-selected="false">Makanan & Minuman</a>

                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content">

                                    <div class="tab-pane fade show active">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <?php
                                                error_reporting(0);
                                                include 'admin/koneksi.php';
                                                if(isset($_GET['Semua'])){
                                                    $query = $koneksi->query("SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori ORDER BY RAND() LIMIT $start,$perpage");
                                                }else if(isset($_GET['Kesehatan'])){
                                                    $query = $koneksi->query("SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.kategori = 'Kesehatan' LIMIT $start,$perpage");
                                                }else if(isset($_GET['Olahraga'])){
                                                    $query = $koneksi->query("SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.kategori = 'Olahraga' LIMIT $start,$perpage");
                                                }else if(isset($_GET['Pendidikan'])){
                                                    $query = $koneksi->query("SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.kategori = 'Pendidikan' LIMIT $start,$perpage");
                                                }else if(isset($_GET['Politik'])){
                                                    $query = $koneksi->query("SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.kategori = 'Politik' LIMIT $start,$perpage");
                                                }else if(isset($_GET['MakananMinuman'])){
                                                    $query = $koneksi->query("SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.kategori = 'Makanan dan Minuman' LIMIT $start,$perpage");

                                                }
                                                
                                                    if (mysqli_num_rows($query) > 0) {
                                                        while ($data = mysqli_fetch_array($query)) {
                                                ?>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="admin/berita/<?= $data["gambar"]; ?>" style="width: 50vh; height: 40vh;" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $data["kategori"]; ?></span>
                                                                <h4>  <h4><a href="details.php?id=<?= $data["id"]; ?>"><?= $data["judul"]; ?></a></h4></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        }
                                                        }
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <?php include "followus.html" ?>
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
                                <li class="page-item"><a class="page-link"<?php if($queryy > 1){ echo "href='?Semua=$previous'"; } ?>><span class="flaticon-arrow roted"></span></a></li>
                                    <?php for ($i=1; $i <= $pages; $i++) { ?>
                                        <?php if ($queryy == $i) { ?>
                                            <li class="page-item active"><a class="page-link " href="?Semua=<?= $i ?>" style="color: red" >
                                            <?= $i; ?></a></li>
                                        <?php } else{ ?>
                                            <li class="page-item "><a class="page-link " href="?Semua=<?= $i ?>" style="color: black" >
                                            <?= $i; ?></a></li>
                                            <?php }?>
                                        <?php }?>
                                    <li class="page-item"><a class="page-link" <?php if($queryy < $pages) { echo "href='?Semua=$next'"; } ?>><span class="flaticon-arrow right-arrow"></span></a></li>
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