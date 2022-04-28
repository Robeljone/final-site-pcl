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

    <!-- Start top bar -->
    <div class="main-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-top">
                        <a class="new-btn-d br-2" href="#appointment"><span>Book Appointment</span></a>
                        <div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                info@pcladdis.com</a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wel-nots">
                        <p>Welcome to Our Health Lab!</p>
                    </div>
                    <div class="right-top">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="images/sysheader.png" alt="image" style="height: 50px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                    aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                        <li><a class="nav-link" href="#services">Services</a></li>
                        <li><a class="nav-link" href="#appointment">Appointment</a></li>
                        <li><a class="nav-link" href="#gallery">Gallery</a></li>
                        <li><a class="nav-link" href="#team">Doctor</a></li>
                        <li><a class="nav-link" href="#blog">Blog</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <?php foreach($slider as $slide)
						{?>
                    <div class="pogoSlider-slide" data-transition="fade" data-duration="1500"
                        style="background-image:url(http://pcl-advanced.com/images/uploads/slider/<?= $slide->images?>);">
                        <div class="lbox-caption pogoSlider-slide-element">
                            <div class="lbox-details">
                                <h1><?php echo $slide->title ?></h1>
                            </div>
                        </div>
                    </div>
                    <?php
		     	     }
			    ?>
                </div><!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About us -->
    <div id="about" class="about-box">
        <div class="about-a1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row align-items-center about-main-info">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h2> Welcome to Health Lab </h2>
                                <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet
                                    auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a,
                                    consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum
                                    tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna.
                                </p>
                                <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet
                                    auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a,
                                    consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum
                                    tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="about-m">
                                    <ul id="banner">
                                        <li>
                                            <img src="images/about-img-01.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="images/about-img-02.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="images/about-img-03.jpg" alt="">
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
    <!-- End About us -->

    <!-- Start Services -->
    <div id="services" class="services-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Services</h2>
                        <p>List of Services</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-h-square" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-user-md" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Appointment -->
    <div id="appointment" class="appointment-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Appointment</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2>Book an Appointment</h2>
                        </div>
                        <form>
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Name"
                                            class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="E-Mail"
                                            class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Preferred Date</label>
                                        <input id="date" name="date" type="text" placeholder="Preferred Date"
                                            class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Preferred Time</label>
                                        <select id="time" name="time" class="form-control">
                                            <option value="8:00 to 9:00">8:00 to 9:00</option>
                                            <option value="9:00 to 10:00">9:00 to 10:00</option>
                                            <option value="10:00 to 1:00">10:00 to 1:00</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Department</label>
                                        <select id="appointmentfor" name="appointmentfor" class="form-control">
                                            <option value="Choose Department">Choose Department</option>
                                            <option value="Gynacology">Gynacology</option>
                                            <option value="Dermatologist">Dermatologist</option>
                                            <option value="Orthology">Orthology</option>
                                            <option value="Anesthesiology">Anesthesiology</option>
                                            <option value="Ayurvedic">Ayurvedic</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="new-btn-d br-2">Make An
                                            Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2>Why Appointment with Us</h2>
                        </div>
                        <div class="feature-block">
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">24/7 Hours Available</h4>
                                <div class="feature-content">
                                    <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis
                                        vehicula et, iaculis in magnestibulum.</p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Experienced Staff Available</h4>
                                <div class="feature-content">
                                    <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum
                                        quis feugiat risus. </p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Low Price & Fees</h4>
                                <div class="feature-content">
                                    <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer
                                        auctor elementum nulla suscipit in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Appointment -->

    <!-- Start Gallery -->
    <div id="gallery" class="gallery-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Gallery</h2>
                        <p>Our List of Gallery</p>
                    </div>
                </div>
            </div>
            <div class="popup-gallery row clearfix">
                <?php foreach($gallery as $image)
						{?>
                <div class="col-md-3 col-sm-6">
                    <div class="box-gallery">
                        <img src="<?=base_url('images/uploads/gallery/'.$image->images)?>" alt="">
                        <div class="box-content">
                            <h3 class="title"><?php echo $image->title ?></h3>
                            <ul class="icon">
                                <li><a href="<?=base_url('images/uploads/gallery/'.$image->images)?>"><i
                                            class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
		     	}
			    ?>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Team -->
    <div id="team" class="team-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Our Doctor</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-1.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">kristina</h3>
                            <span class="post">Web Designer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-3.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- End Team -->

    <!-- Start Blog -->
    <div id="blog" class="blog-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Blog</h2>
                        <p>Our News and Blogs</p>
                    </div>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php foreach($blogs as $blog)
						{?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="blog-inner">
                                    <div class="blog-img">
                                        <img class="img-fluid" src="<?= base_url('images/uploads/'.$blog->images)?>"
                                            alt="">
                                    </div>
                                    <div class="item-meta">
                                        <span class="dti"><?php echo $blog->dates ?></span>
                                    </div>
                                    <h2><?php echo $blog->title ?></h2>
                                    <p><?php echo $blog->content ?></p>
                                    <a class="new-btn-d br-2" href="#">Read More <i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <?php
						}
					  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Contact -->
    <div id="contact" class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Contact us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12 col-xs-12">
                    <div class="contact-block">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email" id="email" class="form-control"
                                            name="name" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your number" id="number" class="form-control"
                                            name="number" required data-error="Please enter your number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="8"
                                            data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn btn-common" id="submit" type="submit">Send
                                            Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-lg-12 col-xs-12">
                    <div class="left-contact">
                        <h2>Address</h2>
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Address</h4>
                                <p>Fleming 196 Woodside Circle Mobile, FL 36602</p>
                            </div>
                        </div>
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Email</h4>
                                <a href="#">demoinfo@gmail.com</a><br>
                                <a href="#">demoinfo@gmail.com</a>
                            </div>
                        </div>
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Phone Number</h4>
                                <a href="#">12345 67890</a><br>
                                <a href="#">12345 67890</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Subscribe -->
    <div class="subscribe-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe-inner text-center clearfix">
                        <h2>Subscribe</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua.</p>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input class="form-control-1" id="email-1" name="email" placeholder="Email Address"
                                    required="" type="text">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="new-btn-d br-2">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe -->

    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2022 <a href="#">Precision
                            Clinical
                            Advanced Labratory</a> Design By : <a href="https://html.design/">html
                            design</a></p>
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