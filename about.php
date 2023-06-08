<!doctype html>
<html class="no-js" lang="zxx">
<?php include "head.html" ;
include 'admin/koneksi.php'; 
?>
<style>
.p{
  text-align: justify;
}

  .team {
  background: white;
  padding: 60px 0;
}

.team .member {
  margin-bottom: 20px;
  overflow: hidden;
  text-align: center;
  border-radius: 5px;
  background: #faf9f9;
  box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.1);
}

.team .member .member-img {
  position: relative;
  overflow: hidden;
  width: 200px;
  height: 200px; 
}

.team .member .member-info {
  padding: 25px 15px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #493c3e;
}

.team .member .member-info span {
  display: block;
  font-size: 13px;
  font-weight: 400;
  color: #aaaaaa;
}

.team .member .member-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  color: #777777;
}

.team .member:hover .social {
  opacity: 1;
}
</style>
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
</div>
<?php include "header.php" ?>

        <!-- Header End -->
    </header>
    
    <main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                    <!-- Hot Aimated News Tittle-->

                    <?php include 'trending.php'; ?>

                    
                   <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                                    <div class="about-right mb-90">
                                        <div class="about-img">
                                            <img src="assets/img/hero/gb.png" alt="">
                                        </div>
                                        <div class="section-tittle mb-30 pt-30">
                                            <h3>About ED News</h3>
                                        </div>
                                        <div class="about-prea">
                                            <p class="about-pera1 mb-25 p">
                                            Ed News adalah sebuah platform berita daring yang menyediakan informasi terkini dan terpercaya dalam berbagai kategori topik. Dibangun dengan tujuan untuk memberikan wawasan mendalam dan beragam kepada para pembaca, Ed News menyajikan berita-berita terbaru yang relevan, menarik, dan dapat diandalkan.
                                            Kami mengerti bahwa kebutuhan informasi setiap individu berbeda-beda. Oleh karena itu, Ed News menawarkan berbagai kategori topik yang luas, mencakup berbagai bidang dan minat, sehingga setiap pembaca dapat menemukan berita yang sesuai dengan minat dan kebutuhan mereka. <br>
                                            Tujuannya adalah memberikan layanan kepada para pembaca harian ednews di tempat-tempat yang sulit dijangkau oleh jaringan distribusi ednews. Dengan hadirnya ednews Online, para pembaca harian ednews terutama di Indonesia bagian timur dan di luar negeri dapat menikmati harian ednews hari itu juga, tidak perlu menunggu beberapa hari seperti biasanya  
                                          </p>
                                        </div>
                                    
                                    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
  
      <H3>Our Hardworking Team</H3>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex ms-3 align-items-stretch">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team/fad.jpeg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4>Fadlan</h4>
              <span></span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team/vin.jpeg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4>Elvina</h4>
              <span></span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team/dan.jpeg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4>Dandy</h4>
              <span></span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team/fek.jpeg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4>Feki</h4>
              <span></span>
            </div>
          </div>
        </div>

    </div>
  </section><!-- End Team Section -->
                                      </div>   
                        </div>
                        
                        <?php include "followus.html" ?>
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