<?= $this->extend('home/comp/headfoot'); ?>
<?= $this->Section('website'); ?>

<!-- Start: Article List -->
<title><?= $judul ?></title>
<div id="article_home" class="article-list">
    <div class="container">
        <!-- Start: Intro -->
        <div class="intro">
            <h2 class="text-center">F1 MILKSHAKE</h2>
        </div>
        <!-- End: Intro -->
        <!-- Start: Articles -->
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/f1-shake-mix-choco.png">
                    <h3 class="name" style="font-size: 18px;">F1 Shake Mix Dutch Chocolate<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Formula 1 Shake Mix dengan protein tinggi juga tinggi
                    vitamin B1, B2, B3 dan mineral Tersedia dalam 5 varian rasa: French Vanilla, Dutch Chocolate, Wild
                    Berry, Mint Chocolate, dan Cookies ‘n Cream<br></p>
            </div>
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/f1-shake-mix-chocomint.png">
                    <h3 class="name" style="font-size: 18px;">F1 Shake Mix Mint Chocolate<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Formula 1 Shake Mix dengan protein tinggi juga tinggi
                    vitamin B1, B2, B3 dan mineral Tersedia dalam 5 varian rasa: French Vanilla, Dutch Chocolate, Wild
                    Berry, Mint Chocolate, dan Cookies ‘n Cream<br></p>
            </div>
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/f1-shake-mix-cookies-and-cream.png">
                    <h3 class="name" style="font-size: 18px;">F1 Shake Mix Cookies &amp; Cream<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Formula 1 Shake Mix dengan protein tinggi juga tinggi
                    vitamin B1, B2, B3 dan mineral Tersedia dalam 5 varian rasa: French Vanilla, Dutch Chocolate, Wild
                    Berry, Mint Chocolate, dan Cookies ‘n Cream<br></p>
            </div>
        </div>
        <!-- End: Articles -->
        <!-- Start: Articles -->
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/f1-shake-mix-vanilla.png">
                    <h3 class="name" style="font-size: 18px;">F1 Shake Mix French Vanilla<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Formula 1 Shake Mix dengan protein tinggi juga tinggi
                    vitamin B1, B2, B3 dan mineral Tersedia dalam 5 varian rasa: French Vanilla, Dutch Chocolate, Wild
                    Berry, Mint Chocolate, dan Cookies ‘n Cream</p>
            </div>
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/f1-shake-mix-wildberry.png">
                    <h3 class="name" style="font-size: 18px;">F1 Shake Mix Wild Berry<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Formula 1 Shake Mix dengan protein tinggi juga tinggi
                    vitamin B1, B2, B3 dan mineral Tersedia dalam 5 varian rasa: French Vanilla, Dutch Chocolate, Wild
                    Berry, Mint Chocolate, dan Cookies ‘n Cream<br></p>
            </div>
            <div class="col-sm-6 col-md-4 item"></div>
        </div>
        <!-- End: Articles -->
    </div>
</div>
<!-- End: Article List -->
<?= $this->endSection('website');?>