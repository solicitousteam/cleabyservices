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
    /********** Template CSS **********/


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

        .row.gy-4.about {
            margin-top: 22px;
        }

        img.clock-icon {
            background: #8064AF;
            width: 44px;
            height: 44px;
            padding: 5px 5px;
            border-radius: 8px;
        }

        .contact .info-item i {
            background: #8064AF;
        }

        .contact .php-email-form button[type=submit] {
            background: #8064AF !important;
        }

        .scroll-top {
            background: #8064AF !important;
        }

        h4.wor-hor {
            margin-left: 16px;
        }

        p.wor-hor {
            margin-left: 16px;
        }

        .header .logo img {
            max-height: 122px !important;
            margin-right: 6px;
        }

        .footer .footer-info .logo img {
            max-height: 122px !important;
            margin-right: 6px;
        }

        .footer .social-links a {
            color: #8064AF;
        }

        a.contact-det {
            color: #FFFFFF;
        }

        a.ban-ul-02 {
            color: #8064AF !important;
            text-decoration: none !important;
        }

        button {
            width: 30%;
            background: #8064AF;
            border: none;
            color: #FFFFFF;
            padding: 14px 30px;
            margin-top: 22px;
            border-radius: 15px;
        }

        button:hover {
            background: #DB0B93;
        }

        select#subject {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #555d50;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.375rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
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
            .contact .info-item+.info-item {
                margin-top: -60px;
            }

            button {
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
                    <li><a href="about-us.php" class="active">About-Us</a></li>
                    <!--<li><a href="services.php">Services</a></li>-->
                    
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
            $Data = mysqli_fetch_assoc(mysqli_query($con,"SELECT image From banner WHERE page_type='about'"));
            $image = (!empty($Data['image']) && file_exists('images/banner/'.$Data['image'])) ? 'images/banner/'.$Data['image'] : 'assets/img/About-Us-banner.jpg';
            ?>
            <div class="page-header d-flex align-items-center" style="background-image: url('<?= $image?>');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>About-Us</h2>
                            <p>We can be your perfect success partners!</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a class="ban-ul-02" href="index.php">Home</a></li>
                        <li>About-Us</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->
        <!-- ======= About-us Section ======= -->
        <section id="about" class="about pt-0">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4 about">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first"> <img src="assets/img/Overview.JPG" class="img-fluid" alt=""> <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
                    </div>
                    <div class="col-lg-6 content order-last order-lg-first">
                        <h3>About-Us</h3>
                        <p> Clearby Services dedicatedly providing Election Management solutions to Political Parties & Political Candidates in India. </p>
                        <p> Clearby Services in Maharashtra is one of the leading businesses in the Election Management Solutions. Also known for Digital Marketing, Social Media Management, Online Reputation Management, SMS Marketing, International SMS Marketing, IVR, Election Management Software, Political Analysis, Opinion Poll, Media Management, and much more. </p>
                        <p> We believe in principle that Clearby Services can only grow if we deliver Best Election Management Strategy & Solutions to Client that will help them to grow their Political Career. Our business model focuses on having long-term strategic relations with our clients by providing a combination of high quality, cost effective and on time delivery of Solutions. </p>
                        <ul> </ul>
                    </div>
                </div>
            </div>
        </section> <!-- End About-us Section -->
    </main> <!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info"> <a href="index.php" class="logo d-flex align-items-center"> <img class="log-cle" src="assets/img/clearby-serv-logo.jpeg" alt=""> </a>
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
                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p> Sai Sadan, Near Nawale Bridge, <br> Pune 41 <br> <strong>Phone:</strong> <a class="contact-det" href=""> 7020112146 </a> <br> <strong>Mail:</strong> <a class="contact-det" href=""> contact@clearbyservices.com </a> </strong> <br> </p>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <!-- <div class="copyright"> &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved </div> -->
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
              Powered With ❤️ By<a href="#">     Clearby Services</a>
            </div>
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