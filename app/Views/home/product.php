<?= $this->extend('home/comp/headfoot'); ?>
<?= $this->Section('website'); ?>

<!-- Start: Article List -->
<title><?= $judul ?></title>
<div id="article_home" class="article-list">
    <div class="container">
        <!-- Start: Intro -->
        <div class="intro">
            <h2 class="text-center">PRODUK TERBAIK HERBALIFE</h2>
        </div>
        <!-- End: Intro -->
        <!-- Start: Articles -->
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><a href="/pages/shake"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/f1.png">
                    <h3 class="name">F1 Milkshake</h3>
                </a>
                <p class="description" style="font-size: 16px;">Suplemen herbal kaya serat dan nutrisi baik diminum
                    setiap hari untuk menggantikan makanan</p>
            </div>
            <div class="col-sm-6 col-md-4 item"><a href="/pages/aloe"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/herbal-aloe.png">
                    <h3 class="name">Herbal Aloe Concentrate</h3>
                </a>
                <p class="description" style="font-size: 16px;">Ekstrak herbal dari tanaman aloe vera yang baik untuk
                    sistem kesehatan dan pencernaan</p>
            </div>
            <div class="col-sm-6 col-md-4 item"><a href="/pages/suplement"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/targeted-nutrition.png">
                    <h3 class="name">Suplement</h3>
                </a>
                <p class="description" style="font-size: 16px;">Nutrisi setiap hari untuk bantu tingkatkan daya tahan
                    tubuh</p>
            </div>
        </div>
        <!-- End: Articles -->
        <!-- Start: Articles -->
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><a href="/pages/fiber"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/protein-powder.png">
                    <h3 class="name">Protein &amp; Fiber</h3>
                </a>
                <p class="description" style="font-size: 16px;">Protein dan serat fiber untuk kebutuhan nutrisi anda
                    setiap hari</p>
            </div>
            <div class="col-sm-6 col-md-4 item"><a href="/pages/teh"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/tea-series.png">
                    <h3 class="name">Herbal Tea</h3>
                </a>
                <p class="description" style="font-size: 16px;">Produk teh yang nikmat untuk dikonsumsi dimanapun dan
                    kapanpun</p>
            </div>
            <div class="col-sm-6 col-md-4 item"><a href="/pages/skincare"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/herbalife-skin.png">
                    <h3 class="name">Skin Care</h3>
                </a>
                <p class="description" style="font-size: 16px;">Rangkaian produk terbaik untuk perawatan kulit wajah dan
                    tubuh anda</p>
            </div>
        </div>
        <!-- End: Articles -->
    </div>
</div>
<!-- End: Article List -->

<?= $this->endSection('website');?>