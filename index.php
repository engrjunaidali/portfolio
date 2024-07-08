<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Junaid Ali | Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="Leven - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />

    <script src="js/modernizr.custom.js"></script>

</head>

<body class="page">
    <div class="lm-animated-bg"></div>

    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner"></div>
        </div>
    </div>
    <!-- /Loading animation -->

    <!-- Scroll To Top Button -->
    <div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
    <!-- /Scroll To Top Button -->

    <div class="page-scroll">
        <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

            <?php include __DIR__ . "/partials/header.php"; ?>

            <div id="main" class="site-main">
                <div id="main-content" class="single-page-content">
                    <div id="primary" class="content-area">
                        <div id="content" class="page-content site-content single-post" role="main">



                            <?php include __DIR__ . "/sections/hero.php"; ?>

                            <?php include __DIR__ . "/sections/portfolio.php"; ?>

                            <?php include __DIR__ . "/sections/services.php"; ?>



                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="p-20"></div>

                                    <?php include __DIR__ . "/sections/testimonials.php"; ?>


                                    <div class="p-40"></div>

                                    <?php include __DIR__ . "/sections/clients.php"; ?>


                                    <div class="p-40"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <?php include __DIR__ . "/partials/footer.php"; ?>

        </div>
    </div>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="js/jquery.googlemap.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"89ff1ae4dd659080","r":1,"version":"2024.4.1","token":"94b99c0576dc45bf9d669fb5e9256829"}' crossorigin="anonymous"></script>
</body>

</html>