<?= $this->extend('home/comp/headfoot'); ?>
<?= $this->Section('website'); ?>

<!-- Start: Article List -->
<title><?= $judul ?></title>
<div id="article_home" class="article-list">
    <div class="container">
        <!-- Start: Intro -->
        <div class="intro">
            <h2 class="text-center">PROTEIN &amp; FIBER</h2>
        </div>
        <!-- End: Intro -->
        <!-- Start: Articles -->
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/mixed-fiber.png">
                    <h3 class="name" style="font-size: 18px;">Herbalife Mixed Fiber Apple<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Asupan serat Mixed Fiber. Campuran serat larut dan tidak
                    larut air membantu menjaga kesehatan pencernaan sekaligus menjaga tubuh tetap sehat dan memperlancar
                    proses buang air besar.<br></p>
            </div>
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/0242_ppp.png">
                    <h3 class="name" style="font-size: 18px;">Personalized Protein Powder<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Personalized Protein Powder diformulasikan dengan
                    kedelai dan whey protein yang cepat diserap tubuh untuk membantu membentuk massa otot sekaligus
                    memberikan rasa kenyang lebih lama ketika dikombinasikan dengan F1 Shake.</p>
            </div>
            <div class="col-sm-6 col-md-4 item"></div>
        </div>
        <!-- End: Articles -->
    </div>
</div>
<!-- End: Article List -->

<?= $this->endSection('website');?>