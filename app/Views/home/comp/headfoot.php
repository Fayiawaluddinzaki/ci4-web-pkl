<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- <title>pkl</title> -->
    <link rel="icon" type="image/jpeg" sizes="260x260" href="<?= base_url(); ?>/view/assets/img/logo260px.jpg">
    <link rel="stylesheet" href="<?= base_url(); ?>/view/assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="<?= base_url(); ?>/manifest.json">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Coustard">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gentium+Basic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/view/assets/css/styles.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <!-- <title>Herbalife Indonesia </title> -->
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: rgb(121,193,59);">
        <div class="container">
            <a class="navbar-brand" href="/pages">
                <div><img id="main_logo" src="<?= base_url(); ?>/view/assets/img/hblf/logo.png"
                        style="background-color: #79c13b;height: 40px;">
                </div>
            </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span
                    class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto" id="nav1" style="background: #a6df75;">
                    <li class="nav-item"><a class="nav-link" href="/pages" style="color: rgb(8,8,8);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/product" style="color: rgb(0,0,0);">Produk</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/pages/catalog"style="color: rgb(0,0,0);">Katalog</a>
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="/home" style="color: rgb(0,0,0);">Log-in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- isi konten web -->
    <?= $this->renderSection('website'); ?>
    <!-- isi konten web -->

    <div class="div-footer-end">
        <!-- Start: Pretty Footer -->
        <footer style="background: 95c623;">
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3></h3>
                    <p class="links">
                    <a href="/pages">Home</a>
                    <strong> · </strong>
                    <a href="/pages/product">Product</a>
                    <strong> · </strong>
                    <a href="/pages/catalog">Catalog</a>
                    <strong> · </strong>
                    <a href="https://api.whatsapp.com/send?phone=6282132219317">Hubungi Kami</a>
                    </p>
                    <h6 style="font-size: 14px;font-family: Nunito, sans-serif;"><i class="fa fa-copyright"></i>
                        <?= date("d-m-Y") ?></h6>
                </div>
                <div class="col-md-4 footer-about"></div>
                <div class="col-md-4 footer-about"></div>
            </div>
        </footer>
        <!-- End: Pretty Footer -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/view/assets/js/script.min.js"></script>
</body>

</html>