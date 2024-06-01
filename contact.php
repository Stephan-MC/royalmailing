<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<title>G-Express Agency | Contact Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</head>

<!-- include header -->
<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    
    <!-- Main Header-->
    <?php require 'partials/_header.php'; ?>
    <!--End Main Header -->    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1>Contact Us</h1>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<div class="bread-crumb text-center"><a href="index.php">Home</a> <span class="fa fa-angle-right"></span> <a href="#" class="current">Contact Us</a></div>
        </div>
    </div>
    
    <!--Contact Section-->
    <section class="contact-section no-padd-top">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Form Column-->
                <div class="column form-column col-lg-7 col-md-7 col-sm-6 col-xs-12">

                    
                    <h2>Send Us Message</h2>
                    <!--Default Form-->
                    <div class="default-form style-two">
                        <form action="process-contact.php" method="POST" id="contact-form">
                            
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 co-xs-12 form-group">
                                    <input type="text" name="name" value="" placeholder="Name*">
                                </div>
                                <div class="col-md-6 col-sm-6 co-xs-12 form-group">
                                    <input type="email" name="email" value="" placeholder="Email*">
                                </div>
                                <div class="col-md-6 col-sm-6 co-xs-12 form-group">
                                    <input type="text" name="organization" value="" placeholder="Organization">
                                </div>
                                <div class="col-md-6 col-sm-6 co-xs-12 form-group">
                                    <input type="text" name="phone" value="" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6 col-sm-6 co-xs-12 form-group">
                                    <input type="text" name="country" value="" placeholder="Country">
                                </div>
                                <div class="col-md-6 col-sm-6 co-xs-12 form-group">
                                    <input type="text" name="subject" value="" placeholder="Subject">
                                </div>
                                <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            
                            <div class="text-left"><button type="submit" name="send_message" class="theme-btn btn-style-one">Send Messgae</button></div>
                            
                        </form>
                    </div>
                </div>
                
                <!--Info Column-->
                <div class="column info-column col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <h2>Our Address</h2>
                    <div class="info-box">
                        <!-- <div class="desc-text">Lorem ipsum dolor sit amet, placerat corrumpit eum ei. Qui id illum nullam volutpatvix te posse malis virisci.</div> -->
                        <ul class="contact-info">
                            <li><div class="icon"><span class="flaticon-location"></span></div><strong>MAIN OFFICE:</strong> Vickers St, San Diego</li>
                            <li><div class="icon"><span class="flaticon-envelope-1"></span></div><strong>Email:</strong> globalshippingnetworks@gmail.com</li>
                            <li><div class="icon"><span class="flaticon-technology-2"></span></div><strong>Phone:</strong> 24/7 Live Support</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
       
    </section>
    
    <!--Map Section / Style Two-->
    <section class="map-section style-two">
        <!--Map Container-->
        <div class="auto-container">
            <!--Map Canvas-->

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22967.728339410893!2d-6.277510336563489!3d53.34418232700686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e80ea27ac2f%3A0xa00c7a9973171a0!2sDublin%2C%20Ireland!5e0!3m2!1sen!2sus!4v1672847319010!5m2!1sen!2sus"  width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
        </div>
    </section>
    
    <!-- include footer -->
    <!--Sponsors Section-->
    <!-- <section class="sponsors-section">
    	<div class="auto-container"> -->
        	<!--Sponsors SLider-->
            <!-- <ul class="sponsors-slider">
            	<li><a href="#"><img src="images/clients/1.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/2.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/3.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/4.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/1.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/2.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/3.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/4.png" alt=""></a></li>
            </ul>
        </div>
    </section> -->
    
    
    <!--Main Footer-->
    <?php require 'partials/_footer.php' ?>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-airplane-1"></span></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>


<div class="elfsight-app-7f4dfe27-f2e2-4ad3-81a2-d11aeb52f50c"></div>


</script>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->


</body>


</html>
