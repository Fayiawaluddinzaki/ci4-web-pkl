<?= $this->extend('home/comp/headfoot'); ?>
<?= $this->Section('website'); ?>

<!-- Start: Article List -->
<title><?= $judul ?></title>
<div id="article_home" class="article-list">
    <div class="container">
        <!-- Start: Intro -->
        <div class="intro">
            <h2 class="text-center">HERBAL ALOE CONCENTRATE</h2>
        </div>
        <!-- End: Intro -->
        <!-- Start: Articles -->
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/hac.png">
                    <h3 class="name" style="font-size: 18px;">Herbal Aloe Concentrate Original<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Herbal Aloe Concentrate sebagai minuman yang menyegarkan
                    dan mendukung hidrasi tubuh juga bermanfaat<strong> </strong>membantu melancarkan sistem pencernaan
                    dan memberi rasa nyaman pada pencernaan<br><br></p>
            </div>
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/hac-mandarin.png">
                    <h3 class="name" style="font-size: 18px;">Herbal Aloe Concentrate Mandarin<br></h3>
                </a>
                <p class="description" style="font-size: 16px;">Herbal Aloe Concentrate rasa jeruk yang kaya vitamin C
                    membantu menjaga sistem imun tubuh dan juga menangkal radikal bebas<br></p>
            </div>
            <div class="col-sm-6 col-md-4 item"><img class="img-fluid"
                        src="<?= base_url(); ?>/view/assets/img/hblf/hac-mango.png">
                    <h3 class="name" style="font-size: 18px;">Herbal Aloe Concentrate Mango</h3>
                </a>
                <p class="description" style="font-size: 16px;">Herbal Aloe Concentrate rasa magga memiliki manfaat
                    membantu melancarkan pencernaan dan menjaga daya tahan tubuh<br></p>
            </div>
        </div>
        <!-- End: Articles -->
    </div>
</div>
<!-- End: Article List -->

<?= $this->endSection('website');?>