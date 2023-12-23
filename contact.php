<?php
include("db.php");

 if (isset($_POST["submit"])){
     $name = $_POST["name"];
     $email = $_POST["email"];
     $phone = $_POST["phone"];
     $subject = $_POST["subject"];
     $message = $_POST["message"];
    $insertquery =  "INSERT INTO contact(name, email, phone, subject, message) VALUES ('$name','$email','$phone','$subject','$message')";
     $res = mysqli_query($con,$insertquery);
       
//   echo $insertquery;die;
  if($res){
    ?>
    <script>
       alert("Mail Send");                                                                
    </script>
    <?php
  }else{
    ?>
    <script>
       alert("data not inserted ");                                                                  
    </script>
    <?php
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Clearby services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo (3).png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis - v1.0.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<style>
/*:root {*/
/*    --primary: #00B074;*/
/*    --secondary: #2B9BFF;*/
/*    --light: #EFFDF5;*/
/*    --dark: #2B3940;*/
/*}*/


/*** Header ***/
/*.header-carousel .container,*/
/*.page-header .container {*/
/*    position: relative;*/
/*    padding: 45px 0 45px 35px;*/
/*    border-left: 15px solid var(--primary);*/
/*}*/

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

/*.header-carousel .owl-nav .owl-prev,*/
/*.header-carousel .owl-nav .owl-next {*/
/*    margin: 7px 0;*/
/*    width: 45px;*/
/*    height: 45px;*/
/*    display: flex;*/
/*    align-items: center;*/
/*    justify-content: center;*/
/*    color: #FFFFFF;*/
/*    background: transparent;*/
/*    border: 1px solid #FFFFFF;*/
/*    border-radius: 2px;*/
/*    font-size: 22px;*/
/*    transition: .5s;*/
/*}*/

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

  .float{
  position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:40px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:30px;
  box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
  margin-top:16px;
}

img.clock-icon {
    background: #8064AF;
    width: 44px;
    height: 44px;
    padding: 5px 5px;
    border-radius: 8px;
}

.contact .info-item i{
  background: #8064AF;
}

.contact .php-email-form button[type=submit]{
  background: #8064AF !important;
}

.scroll-top{
      background: #8064AF !important;
}

h4.wor-hor {
    margin-left: 16px;
}

p.wor-hor{
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

.footer .social-links a{
  color: #8064AF;
}

a.contact-det {
    color: #FFFFFF;
}

a.ban-ul-02{
        color: #8064AF !important;
        text-decoration: none !important;
}

button{
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


select#subject{ 
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
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

        .dropdown-menu.rounded-0.m-0 {
            background: #615f5f;
           }


@media screen and (max-width: 700px){
    .footer .footer-info .logo img{
            display: block;
            margin: 0px auto;
    }
    .social{
            width: 185px;
            display: block;
            margin: 0px auto;
    }
}

@media screen and (max-width: 700px){
      .contact .info-item+.info-item{
            margin-top: 24px;
      }
      button{
            width: 50%;
      }
}


element.style {
}
.mt-4 {
    margin-top: -2.5rem!important;
}

.footer .credits {
    padding-top: 27px;
    text-align: center;
    font-size: 13px;
}

</style>



</head>

<body>

  <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img class="log-cle" src="assets/img/clearby-serv-logo.jpeg" alt="">
        
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
           <li><a href="about-us.php">About-Us</a></li>
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
          <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
    <?php
    $Data = mysqli_fetch_assoc(mysqli_query($con,"SELECT image From banner WHERE page_type='contact'"));
    $image = (!empty($Data['image']) && file_exists('images/banner/'.$Data['image'])) ? 'images/banner/'.$Data['image'] : 'assets/img/page-header.jpg';
    ?>
      <div class="page-header d-flex align-items-center" style="background-image: url('<?= $image?>');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Contact Us</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a class="ban-ul-02" href="index.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div>
          <!--<iframe style="border:0; width: 100%; height: 340px;" src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.501016673944!2d73.8222184!3d18.4609515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc295c2936d27ef%3A0xc3f2a8c5b719d250!2sClearby%20Services%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1655188966009!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>-->
        </div><!-- End Google Maps -->

      <div class="row gy-4 mt-4">

          <div class="col-lg-4">

            <div class="info-item d-flex">
              <!-- <i class="bi bi-geo-alt flex-shrink-0"></i> -->

              <!-- <img class="clock-icon" src="assets/img/clock.png">
              <div>
                <h4 class="wor-hor">Working Hour</h4>
                <p class="wor-hor">Open Today:9:00 Am To 8:00 Pm</p>
              </div> -->
            </div>

            <!-- End Info Item -->

            <!--<div class="info-item d-flex">-->
            <!--  <i class="bi bi-envelope flex-shrink-0"></i>-->
            <!--  <div>-->
            <!--    <h4>Email:</h4>-->
            <!--    <p>info@example.com</p>-->
            <!--  </div>-->
            <!--</div>-->
            
            <!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Quick Contact:</h4>
                <p>+91-7020112146</p>
              </div>
            </div>
            
            <!-- End Info Item -->
            
            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>contact@clearbyservices.com</p>
              </div>
            </div>
           
           <!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="" method="post" role="form" class="form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
                <div class="form-group mt-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone No" required>
              </div>
              
                 <div class="form-group mt-3">
                <!-- <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required> -->
          
              <select name="subject" id="subject">
              <option value="SUBJECT">Services</option>
              <option value="ELECTION MANAGEMENT SOLUTIONS">Election Manegment Solution</option>
              <option value="Political Campaign Strategy & Planning">Political Campaign Strategy & Planning</option>
              <option value="Image Building & PR">Image Building & PR</option>
              <option value="Election War-room Strategy">Election War-room Strategy</option>
              <option value="Political Survey Analysis">Political Survey Analysis.</option>
              <option value="Booth Management">Booth Management</option>
              <option value="Election Management Software">Election Management Software</option>
              <option value="Election Songs, Videography & Photography">Election Songs, Videography & Photography</option>
              <option value="Manifesto / Karyaahwal">Manifesto / Karyaahwal</option>
              <option value="Voter Slip">Voter Slip</option>
              <option value="Street Play">Street Play</option>
              <option value="Digital Marketing">Digital Marketing</option>
              <option value="Social Media Marketing">Social Media Marketing</option>
              <option value="Social Media Management">Social Media Management</option>
              <option value="Social Media Optimizations">Social Media Optimizations</option>
              <option value="SEO">SEO</option>
              <option value="Google Adwords"> Google Adwords</option>
              <option value="Internet Presence & Reputation Management">Internet Presence & Reputation Management</option>
              <option value="Inbound & Outbound Marketing">Inbound & Outbound Marketing</option>
              <option value="Lead Generation">Lead Generation</option>
              <option value="IVR & Toll Free Number">IVR & Toll Free Number</option>
              <option value="WEB DEVELOPMENT">Web Development</option>
              <option value="Static Website development">Static Website development</option>
              <option value="Dynamic Website">Dynamic Website</option>
              <option value="E-commerce website">E-commerce website</option>
              <option value="Android App development">Android App development</option>
              <option value="IOS App development">IOS App development</option>
              <option value="SMS Services">SMS Services</option>
              <option value="Transaction SMS">Transaction SMS</option>
              <option value="Promotional SMS">Promotional SMS</option>
              <option value="Sim-Based SMS Marketing">Sim-Based SMS Marketing</option>
              <option value="International SMS">International SMS</option>
              <option value="Voice calls">Voice calls</option>
              <option value="Email Marketing">Email Marketing</option>
              <option value="WhatsApp SMS Marketing">WhatsApp SMS Marketing</option>
              <option value="Long Code & Short Code">Long Code & Short Code</option>
              <option value="Missed Call Alert">Missed Call Alert</option>
              </select>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
             
              <div class="text-center"><button type="submit">Send Message</button></div>
            
  </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>

    <!-- End Contact Section -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <a href="https://wa.me/919096195966" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>

  </main>

  <!-- End #main -->

  <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
              <img class="log-cle" src="assets/img/clearby-serv-logo.jpeg" alt="">
          </a>
          <p></p>
          <div class="social">
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about-us.html">About-Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.html">Contact Us</a></li>
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
          <p>
            Sai Sadan, Near Nawale Bridge, <br> Pune 41 <br>
            <strong>Phone:</strong> <a class="contact-det" href=""> 7020112146  </a> <br>
            <strong>Mail:</strong> <a class="contact-det" href=""> contact@clearbyservices.com  </a> </strong> <br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <!-- <div class="copyright">
        &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
      </div> -->
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Powered With ❤️ By<a href="#">     Clearby Services</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>