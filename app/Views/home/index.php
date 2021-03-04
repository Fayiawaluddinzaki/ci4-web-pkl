<?= $this->extend('home/comp/headfoot'); ?>
<?= $this->Section('website'); ?>
<title><?= $judul; ?></title>
    <!-- Start: Article List -->
    <div id="article_home" class="article-list">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">Artikel Terkini</h2>
            </div>
            <!-- End: Intro -->
            <!-- Start: Articles -->
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="/pages/news1"><img class="img-fluid" src="<?= base_url(); ?>/view/assets/img/cara-menghitung-BMI.jpg"><h3 class="name">Menghitung body mass index<br></h3></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="/pages/news2"><img class="img-fluid" src="<?= base_url(); ?>/view/assets/img/healthy-snack-office-workplace-business-woman-eating-meals-from-take-away-lunch-box-working-desk-during-lunch-break_122732-1641.jpg"><h3 class="name">Menjaga Kesehatan &amp; kebugaran tubuh<br></h3></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="/pages/news3"><img class="img-fluid" src="<?= base_url(); ?>/view/assets/img/2020_04_01_91443_1585715181._large.jpg"><h3 class="name">Gaya Hidup Sehat Selama<br>Pandemi<br></h3></a></div>
                
            </div>
            <!-- End: Articles -->
            <!-- Start: Articles -->
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="/pages/news4"><img class="img-fluid" src="<?= base_url(); ?>/view/assets/img/cara-mudah-merawat-kulit-agar-senantiasa-sehat-1586758236.jpg" style="width: 355px;height: 230px;"><h3 class="name">Cara&nbsp;merawat kulit agar bersih dan sehat dengan mudah<br></h3></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="/pages/news5"><img class="img-fluid" src="<?= base_url(); ?>/view/assets/img/waspada-ukuran-lingkar-pinggang-bisa-deteksi-adanya-penyakit-kronis-5jzPl8oKCr.jpg"><h3 class="name">3 Cara Ukur Obesitas<br></h3></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="/pages/news6"><img class="img-fluid" src="<?= base_url(); ?>/view/assets/img/519c2795-7347-42d6-9793-c3878cc89494_169.jpeg" style="height: 230px;"><h3 class="name">5 Manfaat&nbsp;Olahraga untuk Kesehatan<br></h3></a></div>
            </div>
            <!-- End: Articles -->
        </div>
    </div>
    <!-- End: Article List -->
    <?= $this->endSection('website');?>