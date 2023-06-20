<?php
$query_berita = mysqli_query($koneksi, 
"SELECT *, COUNT(id_berita) AS jmlh FROM komentar JOIN berita ON komentar.id_berita = berita.id GROUP BY id_berita ORDER BY jmlh DESC LIMIT 5");
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
                    ?>
                        <li class='news-item'>
                        <a href="details.php?id=<?= $data_berita['id']; ?>">
                        <?= $judul_berita_tren; ?>
                        </a>
                        </li>
                    <?php }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>