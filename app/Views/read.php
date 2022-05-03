<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Precision Clincal Advanced Laboratory</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?=base_url('images/favicon.ico')?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=base_url('images/apple-touch-icon.png')?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="<?=base_url('css/pogo-slider.min.css')?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?=base_url('css/style.css')?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?=base_url('css/responsive.css')?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=base_url('css/custom.css')?>">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/preloader.gif" alt="" />
        </div>
    </div>
    <!-- END LOADER -->

    <div id="about" class="about-box">
        <div class="about-a1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2>News&Blogs</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row align-items-center about-main-info">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <?php
                                 foreach($blogs as $blog)
                                 {?>
                                <h2><?php $blog->title ?></h2>
                                <p><?php $blog->content ?></p>
                                <?php
                                 }
                               ?>
                                </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="about-m">
                                    <ul id="banner">
                                        <li>
                                            <img src="<?=base_url('images/about-img-01.jpg')?>" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2022 <a href="#">Precision
                            Clinical
                            Advanced Labratory</a> Design By : <a href="https://html.design/"></a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="<?=base_url('js/jquery.min.js')?>"></script>
    <script src="<?=base_url('js/popper.min.js')?>"></script>
    <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
    <!-- ALL PLUGINS -->
    <script src="<?=base_url('js/jquery.magnific-popup.min.js')?>"></script>
    <script src="<?=base_url('js/jquery.pogo-slider.min.js')?>"></script>
    <script src="<?=base_url('js/slider-index.js')?>"></script>
    <script src="<?=base_url('js/smoothscroll.js')?>"></script>
    <script src="<?=base_url('js/TweenMax.min.js')?>"></script>
    <script src="<?=base_url('js/main.js')?>"></script>
    <script src="<?=base_url('js/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('js/form-validator.min.js')?>"></script>
    <script src="<?=base_url('js/contact-form-script.js')?>"></script>
    <script src="<?=base_url('js/isotope.min.js')?>"></script>
    <script src="<?=base_url('js/images-loded.min.js')?>"></script>
    <script src="<?=base_url('js/custom.js')?>"></script>
</body>

</html>