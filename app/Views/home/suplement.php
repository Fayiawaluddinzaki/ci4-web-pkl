<?= $this->extend('home/comp/headfoot'); ?>
<?= $this->Section('website'); ?>

<!-- Start: Article List -->
<title><?= $judul ?></title>
<div id="article_home" class="article-list">
    <div class="container">
        <!-- Start: Intro -->
        <div class="intro">
            <h2 class="text-center">SUPLEMENT</h2>
        </div>
        <!-- End: Intro -->
        <!-- Start: Articles -->
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/herbalifeline.png">
                    <h3 class="name" style="font-size: 18px;">Herbalifeline<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Herbalifeline kaya akan asam lemak EPA dan DHA dan omega
                    3 yang penting untuk kesehatan. Herbalifeline dapat membantu menjaga kesehatan jantung, otak, dan
                    fungsi mata agar tetap sehat.<br></p>
            </div>
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/niteworks.png">
                    <h3 class="name" style="font-size: 18px;">Niteworks Lemon<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Niteworks mengandung campuran L-Arginine dan
                    L-Citrulline serta antioksidan yang membantu mendukung produksi Nitric Oxide yang bermanfaat bagi
                    tubuh.<br></p>
            </div>
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/nutrition-active.png">
                    <h3 class="name" style="font-size: 18px;">Nutrition Active<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Nutrition Active membantu meningkatkan metabolisme agar
                    produksi energi lebih maksimal,&nbsp;<br>Mengandung alpha lipoic acid, aloe vera concentrate,
                    ekstrak buah delima, dan pycnogenol dan mendukung produksi energi di dalam tubuh<br></p>
            </div>
        </div>
        <!-- End: Articles -->
        <!-- Start: Articles -->
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/celluloss.png">
                    <h3 class="name" style="font-size: 18px;">Cell-U-Loss<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Suplemen untuk memelihara kesehatan mempertahankan
                    keseimbangan pH dan cairan tubuh juga menjaga keseimbangan elektrolit</p>
            </div>
            <div class="col-sm-6 col-md-4 item"></div>
            <div class="col-sm-6 col-md-4 item"></div>
        </div>
        <!-- End: Articles -->
    </div>
</div>
<!-- End: Article List -->

<?= $this->endSection('website');?>