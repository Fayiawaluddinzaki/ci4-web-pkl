<?= $this->extend('home/comp/headfoot'); ?>
<?= $this->Section('website'); ?>

<!-- Start: Article List -->
<title><?= $judul ?></title>
<div id="article_home" class="article-list">
    <div class="container">
        <!-- Start: Intro -->
        <div class="intro">
            <h2 class="text-center">HERBAL TEA</h2>
        </div>
        <!-- End: Intro -->
        <!-- Start: Articles -->
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/herbal-tea-concentrate.png">
                    <h3 class="name" style="font-size: 18px;">Herbal Tea Concentrate Original<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Campuran teh dari teh hijau dan jeruk memiliki kandungan
                    kafein dan juga meningkatkan metabolisme tubuh dan kandungan antioksidan dari teh membantu menjaga
                    daya tahan tubuh</p>
            </div>
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/nrg.png">
                    <h3 class="name" style="font-size: 18px;">Herbal Nature's Raw Guarana<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Minuman untuk meningkatkan stamina. Rasakan manfaat teh
                    dengan campuran guarana, jeruk pekoe, dan rasa lemon alami yang menyegarkan.<br></p>
            </div>
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/greentea-pomegranate.png">
                    <h3 class="name" style="font-size: 18px;">Pomegranate Tea<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Campuran teh dengan ekstrak buah delima yang kaya
                    antioksidan yang rendah kalori dan dapat menjaga kesehatan tubuh</p>
            </div>
        </div>
        <!-- End: Articles -->
    </div>
</div>
<!-- End: Article List -->

<?= $this->endSection('website');?>