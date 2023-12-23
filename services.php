<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Clearby services</title>
    <meta content="" name="description">
    <meta content="" name="keywords"> <!-- Favicons -->
    <link href="assets/img/clearby-serv-logo.jpeg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet"> <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet"> <!-- ======================================================= * Template Name: Logis - v1.0.0 * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ * Author: BootstrapMade.com * License: https://bootstrapmade.com/license/ ======================================================== -->
    <style>


.header-carousel .container::before,
.header-carousel .container::after,
.page-header .container::before,
.page-header .container::after {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    width: 100px;
    height: 15px;
    background: var(--primary);
}

.header-carousel .container::after,
.page-header .container::after {
    top: 100%;
    margin-top: -15px;
}

@media (max-width: 768px) {
    .header-carousel .owl-carousel-item {
        position: relative;
        min-height: 500px;
    }
    
    .header-carousel .owl-carousel-item img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .header-carousel .owl-carousel-item p {
        font-size: 14px !important;
        font-weight: 400 !important;
    }

    .header-carousel .owl-carousel-item h1 {
        font-size: 30px;
        font-weight: 600;
    }
}

.header-carousel .owl-nav {
    position: absolute;
    top: 50%;
    right: 8%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
}

.header-carousel .owl-nav .owl-prev,
.header-carousel .owl-nav .owl-next {
    margin: 7px 0;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    background: transparent;
    border: 1px solid #FFFFFF;
    border-radius: 2px;
    font-size: 22px;
    transition: .5s;
}

.header-carousel .owl-nav .owl-prev:hover,
.header-carousel .owl-nav .owl-next:hover {
    background: var(--primary);
    border-color: var(--primary);
}

.page-header {
    background: linear-gradient(rgba(43, 57, 64, .5), rgba(43, 57, 64, .5)), url(../img/carousel-1.jpg) center center no-repeat;
    background-size: cover;
}

.breadcrumb-item + .breadcrumb-item::before {
    color: var(--light);
}
/*** New Header End ***/
    
    
    
    
        img.log-cle {
            border-radius: 100%;
        }

        img.serv-pic {
            width: 100%;
            height: 300px !important;
        }

        .section-header h2 {
            color: #8064AF
        }

        .footer .social-links a {
            color: #8064AF;
        }

        .services .card a {
            color: #8064AF;
        }

        .services .card a:hover {
            color: #DB0B93;
        }

        .header .logo img {
            max-height: 122px;
            margin-right: 6px;
        }

        .footer .footer-info .logo img {
            max-height: 122px;
            margin-right: 6px;
        }

        .scroll-top {
            background: #8064AF !important;
        }

        a.contact-det {
            color: #FFFFFF;
        }

        a.ban-ul {
            color: #8064AF !important;
            text-decoration: none !important;
        }

        p.point-elect {
            margin-top: -22px;
        }

        button.elect-man {
            width: 40%;
            background: #8064AF;
            border: none;
            color: #FFFFFF;
            padding: 14px 30px;
            border-radius: 15px;
            display: block;
            margin: 0px auto;
            text-transform: capitalize;
            margin-bottom: 30px;
        }

        button.get-qut {
            width: 40%;
            background: #8064AF;
            border: none;
            color: #FFFFFF;
            padding: 14px 30px;
            border-radius: 15px;
            display: block;
            margin: 0px auto;
            text-transform: capitalize;
            margin-top: 48px;
        }

        button.get-qut-04 {
            width: 40%;
            background: #8064AF;
            border: none;
            color: #FFFFFF;
            padding: 14px 30px;
            border-radius: 15px;
            display: block;
            margin: 0px auto;
            text-transform: capitalize;
        }

        button.sms-ser {
            width: 40%;
            background: #8064AF;
            border: none;
            color: #FFFFFF;
            padding: 14px 30px;
            border-radius: 15px;
            display: block;
            margin: 0px auto;
            text-transform: capitalize;
            margin-top: 4px;
            margin-bottom: 22px;
        }

        button.get-qut-06 {
            width: 50%;
            background: #8064AF;
            border: none;
            color: #FFFFFF;
            padding: 14px 30px;
            border-radius: 15px;
            display: block;
            margin: 0px auto;
            text-transform: capitalize;
            margin-top: 38px;
        }
        
                .dropdown-menu.rounded-0.m-0 {
            background: #615f5f;
           }


        @media screen and (max-width: 700px) {
            .footer .footer-info .logo img {
                display: block;
                margin: 0px auto;
            }

            .social {
                width: 185px;
                display: block;
                margin: 0px auto;
            }
        }

        @media screen and (max-width: 700px) {
            button.get-qut {
                margin-bottom: 30px;
                width: 50%;
            }

            button.get-qut-04 {
                margin-bottom: 30px;
                width: 50%;
            }

            button.sms-ser {
                margin-bottom: 30px;
                width: 50%;
            }

            button.elect-man {
                width: 50%;
            }

            button.get-qut-06 {
                width: 50%;
            }
        }

        @media (min-width: 768px) and (max-width: 900px) {
            button.elect-man {
                width: 50%;
            }

            button.get-qut {
                width: 50%;
                margin-top: 136px;
            }

            button.get-qut-04 {
                width: 50%;
                margin-bottom: 30px;
            }

            button.sms-ser {
                width: 50%;
                margin-top: 127px;
            }

            button.get-qut-06 {
                width: 50%;
            }
        }

        @media (min-width: 901px) and (max-width: 991px) {
            button.elect-man {
                width: 50%;
            }

            button.get-qut {
                width: 50%;
                margin-top: 136px;
            }

            button.get-qut-04 {
                width: 50%;
                margin-bottom: 30px;
            }

            button.sms-ser {
                width: 50%;
                margin-top: 127px
            }

            button.get-qut-06 {
                width: 50%;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            button.elect-man {
                width: 50%;
                margin-top: 215px;
            }

            button.get-qut {
                width: 50%;
                margin-top: 330px;
            }

            button.get-qut-04 {
                width: 50%;
                margin-top: 439px;
            }

            button.sms-ser {
                width: 50%;
            }

            button.get-qut-06 {
                width: 50%;
            }

            button.get-qut-07 {
                width: 50%;
                margin-top: 188px;
            }

            button.get-qut-08 {
                width: 50%;
            }
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between"> <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo --> <img class="log-cle" src="assets/img/clearby-serv-logo.jpeg" alt="">
            </a> <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i> <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About-Us</a></li>
                    <!--<li><a href="services.php" class="active">Services</a></li>-->
                                        
                         <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            
                           <?php 
                           $ServiceData = mysqli_query($con,"SELECT * From services WHERE service_parent_id = '0'");    
                        
            
                        
                        while($row = mysqli_fetch_assoc($ServiceData))
                        {?>
                        
                             <a href="services.php?service_parent_id=<?=$row['id']; ?>&name=<?=$row['service_name']; ?>" class="dropdown-item"><?=$row['service_name']; ?></a>
                           <?php } ?>
                         </div>
                    </div>
                    
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    <!-- End Header -->
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <?php
            $Data = mysqli_fetch_assoc(mysqli_query($con,"SELECT image From banner WHERE page_type='service'"));
            $image = (!empty($Data['image']) && file_exists('images/banner/'.$Data['image'])) ? 'images/banner/'.$Data['image'] : 'assets/img/Seriveces-banner.jpg';
            ?>
            <div class="page-header d-flex align-items-center" style="background-image: url('<?= $image?>');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2><?= (!empty($_GET['name'])) ? $_GET['name'] : 'Our Services' ?></h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a class="ban-ul" href="index.php">Home</a></li>
                        <li>Services</li>
                    </ol>
                </div>
            </nav>
        </div> <!-- End Breadcrumbs -->
        <!-- ======= Featured Services Section ======= -->
        <!-- End Featured Services Section -->
        <!-- ======= Services Section ======= -->
        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">
                <div class="section-header"> <span><?= (!empty($_GET['name'])) ? $_GET['name'] : 'Our Services' ?></span>
                    <h2><?= (!empty($_GET['name'])) ? $_GET['name'] : 'Our Services' ?></h2>
                </div>
                <div class="row gy-4">
                    
                    <?php 
                        if(isset($_GET['service_parent_id']) && $_GET['service_parent_id'] > 0)
                        {   
                            $service_parent_id = $_GET['service_parent_id'];
                            $ServiceData = mysqli_query($con,"SELECT * From services WHERE service_parent_id = '$service_parent_id'");
                        }
                        else
                        {
                            $ServiceData = mysqli_query($con,"SELECT * From services WHERE service_parent_id = '0'");    
                        }
                        
                        
                        while($row = mysqli_fetch_assoc($ServiceData))
                        {
                            $service_image = (!empty($row['service_image']) && file_exists('images/service/'.$row['service_image'])) ? 'images/service/'.$row['service_image'] : '';
                        
                        echo'<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="card">
                                    <div class="card-img"> <img class="serv-pic" src="'.$service_image.'" alt="" class="img-fluid"> </div>
                                    <h3><a href="?service_parent_id='.$row['id'].'&name='.$row['service_name'].'">'.$row['service_name'].'</a></h3>
                                    <p class="">'.$row['service_description'].'</p>';
                                    if($row['get_quote']=='yes'||isset($_GET['service_parent_id'])) {
                                        echo '<a href="'.(!empty($_GET['service_parent_id']) ? 'contact.php' : 'services.php?service_parent_id='.$row['id'].'&name='.$row['service_name']).'"> <button class="elect-man" type="button">Get Quote</button> </a>';
                              
                               } 
                              echo ' </div>
                            </div> ';
                        } ?>
                    
                    <?php /*
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <div class="card-img"> <img class="serv-pic" src="assets/img/DIGITAL-MARKETING-SOCIAL-MEDIA-MARKETING -SEO-SMO-GOOGLE-ADWORDS-INBOUND-MARKETING.jpeg" alt="" class="img-fluid"> </div>
                            <h3><a href="digital-marketing.html">Digital Marketing</a></h3>
                            <p class="">DIGITAL MARKETING – one of the most frequently mentioned buzzwords in marketing. Everybody is talking about digital marketing and professionals praise it’s the way to grow an online business.</p>
                            <!--<p class="point-elect">- Social Media Management .</p>-->
                            <!--<p class="point-elect">- Social Media Optimizations.</p>-->
                            <!--<p class="point-elect">- SEO (Search engine Optimizations).</p>-->
                            <!--<p class="point-elect">- Google Adwords.</p>-->
                            <!--<p class="point-elect">- Internet Presence & Reputation Management.</p>-->
                            <!--<p class="point-elect">- Inbound & Outbound Marketing.</p>-->
                            <!--<p class="point-elect">- Lead Generation.</p>-->
                            <!--<p class="point-elect">- IVR & Toll Free Number.</p>--> <a href="digital-marketing.html"> <button class="get-qut" type="button">Get Quote</button></a>
                        </div>
                    </div> 
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img"> <img class="serv-pic" src="assets/img/WEBSITE -APPLICATION-DEVELOPMENT.jpg" alt="" class="img-fluid"> </div>
                            <h3><a href="web-dev.html">Web Development</a></h3>
                            <p class="">To become a Web Developer, you should have an understanding of HTML, CSS, and JavaScript. It's also recommended to learn about CSS and CSS frameworks. Developing these fundamental web development skills will give you the foundation and logic for communicating with programming languages.</p>
                            <!--<p class="point-elect">- Dynamic Website.</p>-->
                            <!--<p class="point-elect">- E-commerce website.</p>-->
                            <!--<p class="point-elect">- Android App development.</p>-->
                            <!--<p class="point-elect">- IOS App development .</p>--> <a href="web-dev.html"> <button class="get-qut-04" type="button">Get Quote</button></a>
                        </div>
                    </div> 
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img"> <img class="serv-pic" src="assets/img/BULK-SM-VOICE-CALL-BULK-WHATSAPP-BULK-EMAIL.jpg" alt="" class="img-fluid"> </div>
                            <h3><a href="sms-services.html">SMS Services</a></h3>
                            <p class=""> SMS stands for Short Message Service and is another name for a text message. An SMS is generally sent from one mobile device to another over the cellular network. SMS is a text-only standard first formalized in 1985 in the Global System for Mobile Communications (GSM) standards.</p>
                            <!--<p class="point-elect">- Promotional SMS.</p>-->
                            <!--<p class="point-elect">- Sim-Based SMS Marketing.</p>-->
                            <!--<p class="point-elect">- International SMS.</p>-->
                            <!--<p class="point-elect">- Voice calls.</p>-->
                            <!--<p class="point-elect">- Email Marketing.</p>-->
                            <!--<p class="point-elect">- WhatsApp SMS Marketing.</p>-->
                            <!--<p class="point-elect">- Long Code & Short Code.</p>-->
                            <!--<p class="point-elect">- Missed Call Alert.</p>--> <a href="sms-services.html"> <button class="sms-ser" type="button">Get Quote</button></a>
                        </div>
                    </div> 
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img"> <img class="serv-pic" src="assets/img/expert-writting-min.jpg" alt="" class="img-fluid"> </div>
                            <h3><a href="expert-writing-services.html">Research Project Assistance</a></h3>
                            <p class=""> Research Assistants provide support to research teams who are conducting experiments or gathering and analysing data. They work in different kinds of organisations including medical research centres, consulting firms, universities, market research firms and think tanks.
                                <!--<p class="point-elect">-Research paper writing.</p>-->
                                <!--<p class="point-elect">-Thesis chapter writing.</p>--> <a href="expert-writing-services.html"> <button class="get-qut-06" type="button">Get Quote</button></a>
                        </div>
                    </div> 
                    */ ?>
                    <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500"> <div class="card"> <div class="card-img"> <img class="serv-pic" src="assets/img/INTERNET-PRESENCE-REPUTATION-MANAGEMENT.jpg" alt="" class="img-fluid"> </div> <h3><a href="">Internet Presence & Reputation Management</a></h3> <p>Leverage social media to increase your visibility, Internet Presence and Reputation across social media.</p> <a href="contact.html"> <button class="get-qut-02" type="button">Get Quote</button></a> </div> </div> -->
                    <!-- End Card Item -->
                    <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600"> <div class="card"> <div class="card-img"> <img class="serv-pic" src="assets/img/ALL-TYPES-OF-DESIGNING-PRINTING-SOLUTIONS.jpg" alt="" class="img-fluid"> </div> <h3><a href="">All types of Designing & Printing Solutions</a></h3> <p>Your search for Designing & Printing stops here</p> <a href="contact.html"> <button class="get-qut-03" type="button">Get Quote</button></a> </div> </div> -->
                    <!-- End Card Item -->
                    <!--<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">-->
                    <!-- <div class="card">-->
                    <!-- <div class="card-img">-->
                    <!-- <img class="serv-pic" src="assets/img/LEAD-GENERATION.jpg" alt="" class="img-fluid">-->
                    <!-- </div>-->
                    <!-- <h3><a href="">Lead Generation</a></h3>-->
                    <!-- <p>Generating consumer/Customer details funnel for the extraordinary growth of business.</p>-->
                    <!-- <a href="contact.html"> <button class="get-qut-06" type="button">Get Quote</button></a>-->
                    <!-- </div>-->
                    <!--</div>-->
                    <!-- End Card Item -->
                    <!--<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">-->
                    <!-- <div class="card">-->
                    <!-- <div class="card-img">-->
                    <!-- <img class="serv-pic" src="assets/img/TOLL-FREE-NUMBER-IVR.jpg" alt="" class="img-fluid">-->
                    <!-- </div>-->
                    <!-- <h3><a href="">IVR & Toll Free Number </a></h3>-->
                    <!-- <p>Provide 24x7 Customer Support with Cloud based IVR through our Toll Free Number & IVR services.</p>-->
                    <!-- <a href="contact.html"> <button class="get-qut-08" type="button">Get Quote</button></a>-->
                    <!-- </div>-->
                    <!--</div>-->
                    <!-- End Card Item -->
                    <!--<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">-->
                    <!-- <div class="card">-->
                    <!-- <div class="card-img">-->
                    <!-- <img class="serv-pic" src="assets/img/LONG-CODE- SHORT-CODE.jpg" alt="" class="img-fluid">-->
                    <!-- </div>-->
                    <!-- <h3><a href="">Long code & Short Code</a></h3>-->
                    <!-- <p></p>-->
                    <!-- <a href="contact.html"> <button class="get-qut-06" type="button">Get Quote</button></a>-->
                    <!-- </div>-->
                    <!--</div>-->
                    <!-- End Card Item -->
                    <!--<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">-->
                    <!-- <div class="card">-->
                    <!-- <div class="card-img">-->
                    <!-- <img class="serv-pic" src="assets/img/MISSED-CALL- ALERT.jpg" alt="" class="img-fluid">-->
                    <!-- </div>-->
                    <!-- <h3><a href="">Missed Call alert</a></h3>-->
                    <!-- <a href="contact.html"> <button class="get-qut-07" type="button">Get Quote</button></a>-->
                    <!-- </div>-->
                    <!--</div>-->
                    <!-- End Card Item -->
                    <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200"> <div class="card"> <div class="card-img"> <img class="serv-pic" src="assets/img/TOLL-FREE-NUMBER-IVR.jpg" alt="" class="img-fluid"> </div> <h3><a href="">Toll Free Number & IVR</a></h3> <p>Provide 24x7 Customer Support with Cloud based IVR through our Toll Free Number & IVR services.</p> <a href="contact.html"> <button class="get-qut-08" type="button">Get Quote</button></a> </div> </div> -->
                    <!-- End Card Item -->
                    <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300"> <div class="card"> <div class="card-img"> <img class="serv-pic" src="assets/img/PHOTOGRAPHY-VIDEOGRAPHY-ANIMATED-VIDEO.jpg" alt="" class="img-fluid"> </div> <h3><a href="">Photography, Videography & Animated Video</a></h3> <p>Get the best of Photography, Videography, Animated Videos with our best in field artists.</p> <a href="contact.html"> <button class="get-qut-09" type="button">Get Quote</button></a> </div> </div> -->
                    <!-- End Card Item -->
                </div>
            </div>
        </section> <!-- End Services Section -->
        <!-- ======= Features Section ======= -->
        <!-- End Features Section -->
        <!-- ======= Testimonials Section ======= -->
        <!-- End Testimonials Section -->
        <!-- ======= Frequently Asked Questions Section ======= -->
        <!-- End Frequently Asked Questions Section -->
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info"> <a href="index.html" class="logo d-flex align-items-center"> <img class="log-cle" src="assets/img/clearby-serv-logo.jpeg" alt=""> </a>
                    <p></p>
                    <div class="social">
                        <div class="social-links d-flex mt-4"> <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> </div>
                    </div>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About-Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="privacy-policy.html">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="election-management-services.html">ELECTION MANAGEMENT SOLUTIONS</a></li>
                        <li><a href="digital-marketing.html">DIGITAL MARKETING</a></li>
                        <li><a href="web-dev.html">WEB DEVELOPMENT</a></li>
                        <li><a href="sms-services.html">SMS SERVICES</a></li>
                        <li><a href="expert-writing-services.html">RESEARCH PROJECT ASSISTANCE</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-3 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p> Sai Sadan, Near Nawale Bridge, <br> Pune 41 <br> <strong>Phone:</strong> <a class="contact-det" href=""> 7020112146 </a> <br> <strong>Mail:<a class="contact-det" href=""> contact@clearbyservices.com </a></strong> <br> </p>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <!-- <div class="copyright"> &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved </div> -->
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
 Powered With ❤️ By<a href="#">     Clearby Services</a>
 </div>
    </footer><!-- End Footer -->
    <!-- End Footer --> <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div> <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script> <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>