<?php
$query_berita = mysqli_query($koneksi, "SELECT `judul` FROM `berita` ORDER BY RAND() LIMIT 5");
?>
<div class="row">
    <div class="col-lg-12">
        <div class="trending-tittle">
            <strong>Trending now</strong>
            <div class="trending-animated">
                <ul id="js-news" class="js-hidden">
                    <?php
                    while ($data_berita = mysqli_fetch_assoc($query_berita)) {
                        $judul_berita_tren = $data_berita['judul'];
                        echo "<li class='news-item'>$judul_berita_tren</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>