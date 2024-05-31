<?php

include 'admin/pages/config.php';

global $mysqli;




?>
<!DOCTYPE html>
<html style="font-size: 16px">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <title>G-Express Agency | Home</title>
  <!-- Stylesheets -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/revolution-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/tailwind.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link href="css/responsive.css" rel="stylesheet"> 
   

</head>

<!-- include header -->

<body>
  <div class="page-wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->

    <!-- Main Header-->
    <header class="main-header">
      <!-- Header Top -->
      <div class="header-top">
        <div class="auto-container clearfix">
          <!--Top Left-->
          <div class="top-left pull-left">
            <ul class="links-nav clearfix">
              <li><a href="index.php">Welcome to G-Express Agency</a></li>
            </ul>
          </div>

          <!--Top Right-->
          <div class="top-right pull-right">
            <ul class="links-nav clearfix">
              <li><a href="tracking.php">Track & Trace Shipment</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="about.php">About Us</a></li>
              <li>
                <div id="google_translate_element"></div>
              </li>
            </ul>
          </div>
          <div class="col-md-12 col-sm-12" style="margin-top: 10px;">
            <form role="form" action='tracking.php' method="POST">
              <div class="input-group">
                <input type="text" class="form-control" autocomplete="on" name="tracking" placeholder="Track your shipment now" style="height:50px;">
                <span class="input-group-btn">
                  <button class="btn btn-primary" name="track" type="submit" style="height:50px; font-size: 15px;">TRACK</button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div><!-- Header Top End -->

      <!--Header-Upper-->
      <div class="header-upper">
        <div class="auto-container">
          <div class="clearfix">

            <div class="pull-left logo-outer">
              <div class="logo"><a href="index.php"><img src="images/logo.png" alt="Express Delivery Mail" title="Express Delivery Mail"></a></div>
            </div>

            <div class="pull-right upper-right clearfix">

              <!--Info Box-->
              <div class="upper-column info-box">
                <div class="icon-box"><span class="flaticon-technology-2"></span></div>
                <ul>
                  <li><strong>24/7 Live Support</strong></li>
                </ul>
              </div>

              <!--Info Box-->
              <div class="upper-column info-box">
                <div class="icon-box"><span class="flaticon-envelope-1"></span></div>
                <ul>
                  <li><strong>globalshippingnetworks@gmail.com</strong></li>
                </ul>
              </div>

              <!--Info Box-->
              <div class="upper-column info-box">
                <div class="icon-box"><span class="flaticon-location"></span></div>
                <ul>
                  <li style="padding-left: 10px;"><strong>Vickers St, San Diego</strong></li>
                </ul>parcel
              </div>

            </div>

          </div>
        </div>
      </div>

      <!--Header-Lower-->
      <div class="header-lower">
        <!--Background Layer-->
        <div class="bg-layer"></div>


        <div class="auto-container">
          <div class="nav-outer clearfix">
            <!-- Main Menu -->
            <nav class="main-menu">
              <div class="navbar-header">
                <!-- Toggle Button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <div class="navbar-collapse collapse clearfix">
                <ul class="navigation clearfix">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="tracking.php">Track & Trace Shipment</a></li>
                  <li class="dropdown"><a href="service.php">Services</a>
                    <ul>
                      <li><a href="air.php">Air Transportation</a></li>
                      <li><a href="marine.php">Marine Transportation</a></li>
                      <li><a href="trucking.php">Trucking</a></li>
                      <li><a href="moving.php">Moving & Storage</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <!-- <li><a href="/termsconditions">Terms & Conditions</a></li> -->
                </ul>
              </div>
            </nav><!-- Main Menu End-->

            <!-- <div class="btn-outer"><a href="#inquiry" class="theme-btn quote-btn">REQUEST A QUOTE</a></div> -->

          </div>
        </div>
      </div>


      <!--Sticky Header-->
      <div class="sticky-header">
        <div class="auto-container clearfix">
          <!--Logo-->
          <div class="logo pull-left">
            <a href="index.php" class="img-responsive"><img src="images/logo.png" alt="Express Delivery Mail" title="Express Delivery Mail"></a>
          </div>

          <!--Right Col-->
          <div class="right-col pull-right">
            <!-- Main Menu -->
            <nav class="main-menu">
              <div class="navbar-header">
                <!-- Toggle Button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <div class="navbar-collapse collapse clearfix">
                <ul class="navigation clearfix">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="tracking.php">Track & Trace Shipment</a></li>
                  <li class="dropdown"><a href="service.php">Services</a>
                    <ul>
                      <li><a href="air.php">Air Transportation</a></li>
                      <li><a href="marine.php">Marine Transportation</a></li>
                      <li><a href="trucking.php">Trucking</a></li>
                      <li><a href="moving.php">Moving & Storage</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <!-- <li><a href="/termsconditions">Terms & Conditions</a></li> -->
                </ul>
              </div>
            </nav><!-- Main Menu End-->
          </div>

        </div>
      </div><!--End Sticky Header-->

    </header>
    <!--End Main Header -->
    <!--Main Slider-->
    <section class="main-slider negative-margin">

      <div class="tp-banner-container">
        <div class="tp-banner">
          <ul>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/slide1.jpg" data-saveperformance="off" data-title="Awesome Title Here">
              <img src="images/main-slider/slide1.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-70" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <div class="italic-text">G-Express Agency</div>
              </div>

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="10" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <h2>Making Transportation <br> Fast And Secure.</h2>
              </div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><!-- <a href="#" class="theme-btn btn-style-one">Read more about transpo <span class="fa fa-caret-right"></span></a> --></div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="290" data-y="center" data-voffset="110" data-speed="1500" data-start="1500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="tracking.php" class="theme-btn btn-style-two">Track Shipment</a></div>


            </li>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/slide2.jpg" data-saveperformance="off" data-title="Awesome Title Here">
              <img src="images/main-slider/slide2.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-70" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <div class="italic-text">Welcome to G-Express Agency</div>
              </div>

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="10" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <h2>We Value Your <br> Time And Money.</h2>
              </div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><!-- <a href="#" class="theme-btn btn-style-one">Read more about transpo <span class="fa fa-caret-right"></span></a> --></div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="290" data-y="center" data-voffset="110" data-speed="1500" data-start="1500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="contact.php" class="theme-btn btn-style-two">Contact Us</a></div>


            </li>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/slide3.jpg" data-saveperformance="off" data-title="Awesome Title Here">
              <img src="images/main-slider/slide3.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-70" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <div class="italic-text">G-Express Agency</div>
              </div>

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="10" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <h2>Making Transportation <br> Trackable And Reliable.</h2>
              </div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><!-- <a href="#" class="theme-btn btn-style-one">Read more about transpo <span class="fa fa-caret-right"></span></a> --></div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="290" data-y="center" data-voffset="110" data-speed="1500" data-start="1500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="#inquiry" class="theme-btn btn-style-two">Send Inquiry</a></div>

            </li>

          </ul>

          <div class="tp-bannertimer"></div>
        </div>
      </div>
    </section>



    <div class="tw-relative tw-h-[60vh]  tw-w-full">
      <div class="tw-absolute tw-h-full tw-bg-[url('/images/us_background.jpg')] tw-bg-center tw-bg-no-repeat tw-bg-cover tw-w-full"></div>

      <div class="tw-relative tw-h-full tw-flex tw-justify-center tw-items-center tw-bg-black/40 tw-w-full">
        <div class="tw-flex tw-justify-center md:tw-space-x-20 tw-items-center tw-flex-wrap">
          <p class="tw-text-white sm:tw-max-w-xs tw-text-3xl tw-text-center">
            Welcome to <span class="tw-font-semibold">G-Express Agency</span> Fast,
            Door-to-Door, Courier Delivered
          </p>
          <div class="tw-p-3 tw-rounded-md tw-flex tw-flex-col tw-space-y-4 tw-bg-black/40 tw-backdrop-blur-md">
            <h1 class="tw-text-xl tw-text-white tw-capitalize">get started now</h1>
            <ul class="tw-flex tw-flex-wr tw-space-x-[1px] tw-text-sm tw-capitalize tw-text-gray-600">
              <li class="tw-p-2 tw-cursor-pointer tw-rounded-l-sm tw-bg-white">
                create new shipment
              </li>
              <li class="tw-p-2 tw-cursor-pointer tw-bg-white">
                get a rate and time quote
              </li>
              <li class="tw-p-2 tw-cursor-pointer tw-rounded-r-sm tw-bg-white">
                shedule a pickup
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- hanging div -->
      <div class="tw-absolute tw-h-28 tw--bottom-10 tw-left-1/2 tw-flex tw-flex-wrap md:tw-flex-nowrap tw-items-center tw-justify-center tw--translate-x-1/2 z-20 tw-tw-container tw-w-[84rem]">
        <div class="tw-flex tw-space-x-[1px] tw-items-center tw-justify-center tw-h-28">
          <div class="tw-flex tw-flex-col tw-group tw-py-5 tw-bg-neutral-100 tw-text-primary tw-px-10 tw-rounded-l-sm tw-justify-center tw-h-full tw-items-center hover:tw-shadow-xl hover:tw-shadow-gray-300 tw-transition-shadow tw-text-center">
            <svg class="tw-fill-gray-400 tw-group-hover:tw-fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <title>tag</title>
              <path d="M5.5,7A1.5,1.5 0 0,1 4,5.5A1.5,1.5 0 0,1 5.5,4A1.5,1.5 0 0,1 7,5.5A1.5,1.5 0 0,1 5.5,7M21.41,11.58L12.41,2.58C12.05,2.22 11.55,2 11,2H4C2.89,2 2,2.89 2,4V11C2,11.55 2.22,12.05 2.59,12.41L11.58,21.41C11.95,21.77 12.45,22 13,22C13.55,22 14.05,21.77 14.41,21.41L21.41,14.41C21.78,14.05 22,13.55 22,13C22,12.44 21.77,11.94 21.41,11.58Z" />
            </svg>
            <a href="#">Get quote</a>
          </div>
          <div class="tw-flex tw-flex-col tw-group tw-py-5 tw-bg-neutral-100 tw-text-primary tw-px-10 tw-justify-center tw-h-full tw-items-center hover:tw-shadow-xl hover:tw-shadow-gray-300 tw-transition-shadow tw-text-center">
            <svg class="tw-fill-gray-400 tw-group-hover:tw-fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <title>truck-check</title>
              <path d="M3,4H17V8H20L23,12V17H21A3,3 0 0,1 18,20A3,3 0 0,1 15,17H9A3,3 0 0,1 6,20A3,3 0 0,1 3,17H1V6C1,4.89 1.9,4 3,4M17,9.5V12H21.47L19.5,9.5H17M6,15.5A1.5,1.5 0 0,0 4.5,17A1.5,1.5 0 0,0 6,18.5A1.5,1.5 0 0,0 7.5,17A1.5,1.5 0 0,0 6,15.5M18,15.5A1.5,1.5 0 0,0 16.5,17A1.5,1.5 0 0,0 18,18.5A1.5,1.5 0 0,0 19.5,17A1.5,1.5 0 0,0 18,15.5M8,14L14,8L12.59,6.58L8,11.17L5.91,9.08L4.5,10.5L8,14Z" />
            </svg>
            <a href="#">delivery services</a>
          </div>
          <div class="tw-flex tw-flex-col tw-group tw-py-5 tw-bg-neutral-100 tw-text-primary tw-px-10 tw-justify-center tw-h-full tw-items-center hover:tw-shadow-xl hover:tw-shadow-gray-300 tw-transition-shadow tw-text-center">
            <svg class="tw-fill-gray-400 tw-group-hover:tw-fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <title>map-marker-radius-outline</title>
              <path d="M12 4C14.2 4 16 5.8 16 8C16 10.1 13.9 13.5 12 15.9C10.1 13.4 8 10.1 8 8C8 5.8 9.8 4 12 4M12 2C8.7 2 6 4.7 6 8C6 12.5 12 19 12 19S18 12.4 18 8C18 4.7 15.3 2 12 2M12 6C10.9 6 10 6.9 10 8S10.9 10 12 10 14 9.1 14 8 13.1 6 12 6M20 19C20 21.2 16.4 23 12 23S4 21.2 4 19C4 17.7 5.2 16.6 7.1 15.8L7.7 16.7C6.7 17.2 6 17.8 6 18.5C6 19.9 8.7 21 12 21S18 19.9 18 18.5C18 17.8 17.3 17.2 16.2 16.7L16.8 15.8C18.8 16.6 20 17.7 20 19Z" />
            </svg>
            <a href="#">location services</a>
          </div>
        </div>

        <div class="tw-flex tw-flex-col tw-bg-yellow-300 tw-p-4 tw-justify-center tw-h-full tw-rounded-r-sm tw-items-center hover:tw-shadow-xl hover:tw-shadow-gray-300 tw-transition-shadow tw-text-center">
          <div class="tw-bg-white border tw-justify-center tw-p-1 tw-flex tw-flex-wrap md:tw-flex-nowrap tw-container tw-w-fit">
            <input class="tw-text-black focus:tw-outline-none tw-px-4 placeholder:!tw-text-gray-900 placeholder:tw-capitalize" placeholder="track your shipment" type="tw-text" />
            <button class="tw-bg-green-500 tw-p-2 tw-text-white tw-rounded-sm tw-px-4">
              Track
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- swipper area -->
    <div class="tw-mt-[260px] sm:tw-mt-[190px] md:tw-mt-[200px] tw-flex lg:mt-28 tw-h-[360px] tw-max-w-5xl tw-mx-auto">
      <div class="swiper swiper_1 tw-rounded-sm px-2 shadow-lg tw-h-full">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide tw-relative">
            <div class="tw-relative tw-h-full tw-w-full">
              <div class="tw-w-full tw-h-full tw-bg-cover tw-bg-center tw-bg-[url('/images/2.jpg')]"></div>
              <div class="tw-absolute tw-text-gray-700 tw-top-0 tw-bottom-0 tw-right-0 sm:tw-w-1/3 tw-bg-slate-100/80 tw-backdrop-blur-[0.3px]">
                <div class="tw-flex tw-flex-col tw-justify-around tw-h-full tw-px-10 tw-container">
                  <div class="tw-space-y-4">
                    <p class="tw-font-bold tw-capitalize tw-text-2xl tw-text-start">
                      Save 30% on your shipment
                    </p>
                    <p class="tw-capitalize">
                      Fast, convenient international time or day-specific export
                      delivery services every time you ship with a credit
                      card.<span class="tw-text-primary"> Terms apply.</span>
                    </p>
                  </div>

                  <!-- button -->
                  <a href="#" class="tw-bg-yellow-400 p-3 tw-text-center tw-capitalize tw-rounded-md">Ship with a credit card</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tw-relative tw-h-full tw-w-full">
              <div class="tw-w-full tw-h-full tw-bg-cover tw-bg-center tw-bg-[url('/images/2.jpg')]"></div>
              <div class="tw-absolute tw-text-gray-700 tw-top-0 tw-bottom-0 tw-right-0 sm:tw-w-1/3 tw-bg-slate-100/80 tw-backdrop-blur-[0.3px]">
                <div class="tw-flex tw-flex-col tw-justify-around tw-h-full tw-px-10 tw-container">
                  <div class="tw-space-y-4">
                    <p class="tw-font-bold tw-capitalize tw-text-2xl tw-text-start">
                      enter your business to win!
                    </p>
                    <p class="tw-capitalize">
                      We're giving away $30K in sustainability services to help
                      boost your brand. Apply by June 30th. .<span class="tw-text-primary">
                        Terms & Conditions.</span>
                    </p>
                  </div>

                  <!-- button -->
                  <a href="#" class="tw-bg-yellow-400 p-3 tw-capitalize tw-text-center tw-rounded-md">sign up</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tw-relative tw-h-full tw-w-full">
              <div class="tw-w-full tw-h-full tw-bg-cover tw-bg-center tw-bg-[url('/images/2.jpg')]"></div>
              <div class="tw-absolute tw-text-gray-700 tw-top-0 tw-bottom-0 tw-right-0 sm:tw-w-1/3 tw-bg-slate-100/80 tw-backdrop-blur-[0.3px]">
                <div class="tw-flex tw-flex-col tw-justify-around tw-h-full tw-px-10 tw-container">
                  <div class="tw-space-y-4">
                    <p class="tw-font-bold tw-capitalize tw-text-2xl tw-text-start">
                      Import Express
                    </p>
                    <p class="tw-capitalize">
                      Only with G-EA can you prepay for imported tw-items to be
                      delivered right to your door from anywhere in the world
                    </p>
                  </div>

                  <!-- button -->
                  <a href="#" class="tw-bg-yellow-400 p-3 tw-text-center tw-capitalize tw-rounded-md">Ship with a credit card</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tw-relative tw-h-full tw-w-full">
              <div class="tw-w-full tw-h-full tw-bg-cover tw-bg-center tw-bg-[url('/images/2.jpg')]"></div>
              <div class="tw-absolute tw-text-gray-700 tw-top-0 tw-bottom-0 tw-right-0 sm:tw-w-1/3 tw-bg-slate-100/80 tw-backdrop-blur-[0.3px]">
                <div class="tw-flex tw-flex-col tw-justify-around tw-h-full tw-px-10 tw-container">
                  <div class="tw-space-y-4">
                    <p class="tw-font-bold tw-capitalize tw-text-2xl tw-text-start">
                      The Journey of a Package
                    </p>
                    <p class="tw-capitalize">
                      Watch how your package travels with G-EA and learn how we
                      can help you with each step of the journey
                    </p>
                  </div>

                  <!-- button -->
                  <a href="#" class="tw-bg-yellow-400 p-3 tw-text-center tw-capitalize tw-rounded-md">follow package</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tw-relative tw-h-full tw-w-full">
              <div class="tw-w-full tw-h-full tw-bg-cover tw-bg-center tw-bg-[url('/images/2.jpg')]"></div>
              <div class="tw-absolute tw-text-gray-700 tw-top-0 tw-bottom-0 tw-right-0 sm:tw-w-1/3 tw-bg-slate-100/80 tw-backdrop-blur-[0.3px]">
                <div class="tw-flex tw-flex-col tw-justify-around tw-h-full tw-px-10 tw-container">
                  <div class="tw-space-y-4">
                    <p class="tw-font-bold tw-capitalize tw-text-2xl tw-text-start">
                      We Know Customs
                    </p>
                    <p class="tw-capitalize">
                      Shipping to over 200 countries and territories – we’ve
                      established a wealth of customs expertise
                    </p>
                  </div>

                  <!-- button -->
                  <a href="#" class="tw-bg-yellow-400 p-3 tw-text-center tw-capitalize tw-rounded-md">customs clerance advise</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tw-relative tw-h-full tw-w-full">
              <div class="tw-w-full tw-h-full tw-bg-cover tw-bg-center tw-bg-[url('/images/2.jpg')]"></div>
              <div class="tw-absolute tw-text-gray-700 tw-top-0 tw-bottom-0 tw-right-0 sm:tw-w-1/3 tw-bg-slate-100/80 tw-backdrop-blur-[0.3px]">
                <div class="tw-flex tw-flex-col tw-justify-around tw-h-full tw-px-10 tw-container">
                  <div class="tw-space-y-4">
                    <p class="tw-font-bold tw-capitalize tw-text-2xl tw-text-start">
                      New to International Shipping?
                    </p>
                    <p class="tw-capitalize">
                      We’re specialists in international shipping! We’ve got
                      tips and advice to help you ship with confidence.
                    </p>
                  </div>

                  <!-- button -->
                  <a href="#" class="tw-bg-yellow-400 p-3 tw-text-center tw-capitalize tw-rounded-md">get shipping advice</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tw-relative tw-h-full tw-w-full">
              <div class="tw-w-full tw-h-full tw-bg-cover tw-bg-center tw-bg-[url('/images/2.jpg')]"></div>
              <div class="tw-absolute tw-text-gray-700 tw-top-0 tw-bottom-0 tw-right-0 sm:tw-w-1/3 tw-bg-slate-100/80 tw-backdrop-blur-[0.3px]">
                <div class="tw-flex tw-flex-col tw-justify-around tw-h-full tw-px-10 tw-container">
                  <div class="tw-space-y-4">
                    <p class="tw-font-bold tw-capitalize tw-text-2xl tw-text-start">
                      Prepare Your Package for the Journey
                    </p>
                    <p class="tw-capitalize">
                      Get tips and advice for packing your shipment.
                    </p>
                  </div>

                  <!-- button -->
                  <a href="#" class="tw-bg-yellow-400 p-3 tw-text-center tw-capitalize tw-rounded-md">packing with care</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tw-relative tw-h-full tw-w-full">
              <div class="tw-w-full tw-h-full tw-bg-cover tw-bg-center tw-bg-[url('/images/2.jpg')]"></div>
              <div class="tw-absolute tw-text-gray-700 tw-top-0 tw-bottom-0 tw-right-0 sm:tw-w-1/3 tw-bg-slate-100/80 tw-backdrop-blur-[0.3px]">
                <div class="tw-flex tw-flex-col tw-justify-around tw-h-full tw-px-10 tw-container">
                  <div class="tw-space-y-4">
                    <p class="tw-font-bold tw-capitalize tw-text-2xl tw-text-start">
                      G-EA Express Delivers
                    </p>
                    <p class="tw-capitalize">
                      With international reach and local teams, we offer time
                      definite door-to-door delivery around the world.
                    </p>
                  </div>

                  <!-- button -->
                  <a href="#" class="tw-bg-yellow-400 p-3 tw-text-center tw-capitalize tw-rounded-md">our services at a glance</a>
                </div>
              </div>
            </div>
          </div>
          ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <!-- add section -->
    <div class="tw-flex tw-my-10 p-4 tw-flex-wrap tw-justify-around sm:tw-justify-center tw-space-x-8 tw-shadow-md tw-p-1 h-fit tw-bg-center tw-bg-cover tw-bg-[url('/images/faded-waves.jpg')] tw-max-w-5xl tw-mx-auto">
      <img src="/images/1st.png" alt="woman smilling" />
      <div class="tw-flex tw-flex-wrap tw-flex-col tw-items-center tw-justify-center tw-text-center">
        <div>
          <p class="tw-font-bold tw-capitalize tw-text-2xl">
            Flexible, Powerful and Easy!
          </p>
          <p class="tw-max-w-xs tw-text-tw-justify">
            MyG-EA+ makes it easier than ever to ship online, get quotes,
            schedule pickups, find locations, track shipments and more!
          </p>
        </div>
        <!-- list if things which are here -->
        <div class="tw-flex tw-mt-4 tw-h-[90px] tw-shadow-md">
          <a href="#" class="tw-p-2 tw-h-full tw-group tw-flex tw-flex-col tw-bg-neutral-100 tw-text-primary hover:tw-shadow-xl">
            <svg class="tw-fill-gray-500 tw-group-hover:tw-fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <title>package-variant-closed-check</title>
              <path d="M12 2C11.8 2 11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L13.5 21.3C13.2 20.7 13.1 20 13 19.3V12.6L19 9.2V13C19.7 13 20.4 13.1 21 13.3V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M8.1 6.3L14 9.8L12 10.9L6 7.5L8.1 6.3M5 9.2L11 12.6V19.3L5 15.9V9.2M21.3 15.8L17.7 19.4L16.1 17.8L15 19L17.8 22L22.6 17.2L21.3 15.8Z" />
            </svg>
            <p>create shipment</p>
          </a>
          <a href="#" class="tw-p-2 tw-h-full tw-group tw-flex tw-flex-col tw-bg-neutral-100 tw-text-primary hover:tw-shadow-xl">
            <svg class="tw-fill-gray-500 tw-group-hover:tw-fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <title>account-tie</title>
              <path d="M12 3C14.21 3 16 4.79 16 7S14.21 11 12 11 8 9.21 8 7 9.79 3 12 3M16 13.54C16 14.6 15.72 17.07 13.81 19.83L13 15L13.94 13.12C13.32 13.05 12.67 13 12 13S10.68 13.05 10.06 13.12L11 15L10.19 19.83C8.28 17.07 8 14.6 8 13.54C5.61 14.24 4 15.5 4 17V21H20V17C20 15.5 18.4 14.24 16 13.54Z" />
            </svg>
            <p>create a login</p>
          </a>
          <a href="#" class="tw-p-2 tw-h-full tw-group tw-flex tw-flex-col tw-bg-neutral-100 tw-text-primary hover:tw-shadow-xl">
            <svg class="tw-fill-gray-500 tw-group-hover:tw-fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <title>search-web</title>
              <path d="M15.5,14L20.5,19L19,20.5L14,15.5V14.71L13.73,14.43C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.43,13.73L14.71,14H15.5M9.5,4.5L8.95,4.53C8.71,5.05 8.34,5.93 8.07,7H10.93C10.66,5.93 10.29,5.05 10.05,4.53C9.87,4.5 9.69,4.5 9.5,4.5M13.83,7C13.24,5.97 12.29,5.17 11.15,4.78C11.39,5.31 11.7,6.08 11.93,7H13.83M5.17,7H7.07C7.3,6.08 7.61,5.31 7.85,4.78C6.71,5.17 5.76,5.97 5.17,7M4.5,9.5C4.5,10 4.58,10.53 4.73,11H6.87L6.75,9.5L6.87,8H4.73C4.58,8.47 4.5,9 4.5,9.5M14.27,11C14.42,10.53 14.5,10 14.5,9.5C14.5,9 14.42,8.47 14.27,8H12.13C12.21,8.5 12.25,9 12.25,9.5C12.25,10 12.21,10.5 12.13,11H14.27M7.87,8L7.75,9.5L7.87,11H11.13C11.21,10.5 11.25,10 11.25,9.5C11.25,9 11.21,8.5 11.13,8H7.87M9.5,14.5C9.68,14.5 9.86,14.5 10.03,14.47C10.28,13.95 10.66,13.07 10.93,12H8.07C8.34,13.07 8.72,13.95 8.97,14.47L9.5,14.5M13.83,12H11.93C11.7,12.92 11.39,13.69 11.15,14.22C12.29,13.83 13.24,13.03 13.83,12M5.17,12C5.76,13.03 6.71,13.83 7.85,14.22C7.61,13.69 7.3,12.92 7.07,12H5.17Z" />
            </svg>
            <p>About MYG-EA+</p>
          </a>
          <a href="#" class="tw-p-2 tw-h-full tw-group tw-flex tw-flex-col tw-bg-neutral-100 tw-text-primary hover:tw-shadow-xl">
            <svg class="tw-fill-gray-500 tw-group-hover:tw-fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <title>cog</title>
              <path d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.21,8.95 2.27,9.22 2.46,9.37L4.57,11C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.21,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.67 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z" />
            </svg>
            <p>whats new</p>
          </a>
        </div>
      </div>
    </div>

    <!-- 2nd swiper section -->
    <div class="lg:tw-my-10 tw-max-w-6xl tw-mx-auto">
      <div class="swiper swiper_2">
        <!-- Additional required wrapper -->
        <div id="secondSwipper" class="swiper-wrapper tw-py-5 tw-flex tw-items-center tw-justify-center">
          <!-- Slides -->
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar tw-hidden"></div>
      </div>
    </div>

    <!-- last section -->

    <div class="tw-max-w-6xl tw-border-2 tw-border-black  tw-space-y-4 tw-shadow-xl tw-rounded-md tw-p-4 tw-mx-auto">
      <div>
        <h1 class="tw-font-bold tw-text-lg">
          Express Delivery Services and International Shipping
        </h1>
        <p class="tw-text-sm">Fast. Door-to-Door. Courier Delivered.</p>
      </div>
      <p class="tw-text-xs">
        When you ship with G-EA Express – you’re shipping with specialists in
        international shipping and courier delivery services! With our wide
        range of express parcel and package services, along with shipping and
        tracking solutions to fit your needs – G-EA Express can deliver!
      </p>
    </div>

    <!--Team Section-->
    <!-- <section class="team-section">
    	<div class="auto-container">
        	<div class="sec-title text-left">
            	<h2>Team Members</h2> -->
    <!-- <div class="text">Lorem ipsum dolor sit amet, <strong>usu no alienum adolescens</strong> an principes liberavisse eam, nam wisi malis recusabo at.</div> -->
    <!-- </div> -->

    <!-- <div class="team-carousel four-column-carousel"> -->
    <!--Team Member-->
    <!-- <div class="team-member">
                	<div class="inner-box">
                    	<figure class="image-box"><a href="mailto:email@mail.com"><img src="images/resource/team-image-1.jpg" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3>Micale Doe</h3>
                            <div class="designation">Senior Officer</div>
                        </div>
                        <div class="hover-info">
                        	<h3>Micale Doe</h3>
                            <div class="designation">Senior Officer</div> -->
    <!-- <div class="social-links">
                            	<a href=".#"><span class="fa fa-facebook-f"></span></a>
                                <a href=".#"><span class="fa fa-twitter"></span></a>
                                <a href=".#"><span class="fa fa-google-plus"></span></a>
                                <a href=".#"><span class="fa fa-linkedin"></span></a>
                            </div> -->
    <!-- </div>
                    </div>
                </div> -->

    <!--Team Member-->
    <!-- <div class="team-member">
                	<div class="inner-box">
                    	<figure class="image-box"><a href="mailto:email@mail.com"><img src="images/resource/team-image-2.jpg" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3>James Cameron</h3>
                            <div class="designation">Supervisor</div>
                        </div>
                        <div class="hover-info">
                        	<h3>James Cameron</h3>
                            <div class="designation">Supervisor</div> -->
    <!-- <div class="social-links">
                            	<a href=".#"><span class="fa fa-facebook-f"></span></a>
                                <a href=".#"><span class="fa fa-twitter"></span></a>
                                <a href=".#"><span class="fa fa-google-plus"></span></a>
                                <a href=".#"><span class="fa fa-linkedin"></span></a>
                            </div> -->
    <!-- </div>
                    </div>
                </div>
 -->
    <!--Team Member-->
    <!-- <div class="team-member">
                	<div class="inner-box">
                    	<figure class="image-box"><a href="mailto:email@mail.com"><img src="images/resource/team-image-3.jpg" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3>Dean Ambrose</h3>
                            <div class="designation">Senior Worker</div>
                        </div>
                        <div class="hover-info">
                        	<h3>Dean Ambrose</h3>
                            <div class="designation">Senior Worker</div> -->
    <!-- <div class="social-links">
                            	<a href=".#"><span class="fa fa-facebook-f"></span></a>
                                <a href=".#"><span class="fa fa-twitter"></span></a>
                                <a href=".#"><span class="fa fa-google-plus"></span></a>
                                <a href=".#"><span class="fa fa-linkedin"></span></a>
                            </div> -->
    <!-- </div>
                    </div>
                </div> -->

    <!--Team Member-->
    <!-- <div class="team-member">
                	<div class="inner-box">
                    	<figure class="image-box"><a href="mailto:email@mail.com"><img src="images/resource/team-image-4.jpg" alt=""></a></figure>
                        <div class="lower-content">
                        	<h3>Simon DM</h3>
                            <div class="designation">Manager</div>
                        </div>
                        <div class="hover-info">
                        	<h3>Simon DM</h3>
                            <div class="designation">Manager</div> -->
    <!-- <div class="social-links">
                            	<a href=".#"><span class="fa fa-facebook-f"></span></a>
                                <a href=".#"><span class="fa fa-twitter"></span></a>
                                <a href=".#"><span class="fa fa-google-plus"></span></a>
                                <a href=".#"><span class="fa fa-linkedin"></span></a>
                            </div> -->
    <!-- </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section> -->

    <!--Video Section-->
    <!-- <section class="video-section" style="background-image:url(images/background/image-4.jpg);">
    	<a class="lightbox-image play-link" href="http://www.youtube.com/watch?v=opj24KnzrWo">
            <div class="text">Watch the video and take some idea about our company</div>
            <div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms"><span class="flaticon-play-button"></span></div>
        </a>
    </section> -->


    <!--News Section-->
    <!-- <section class="news-section">
    	<div class="auto-container">
        	
            <div class="sec-title text-center">
            	<h2>Latest News</h2>
                <div class="text">Lorem ipsum dolor sit amet, <strong>usu no alienum adolescens</strong> an principes liberavisse eam</div>
            </div>
            
            <div class="row clearfix"> -->
    <!--News Style One-->
    <!-- <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="content-box">
                        	<div class="date wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms"><strong>27</strong>Apr</div>
                            <h3><a href="#">Why transpo company best in today market place</a></h3>
                            <div class="info clearfix">By <a href="#"><strong>Jannatul Fa</strong></a> &ensp;/&ensp; <a href="#"><strong>5</strong> Commment</a></div>
                            <div class="text">Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum...</div>
                            <a href="blog-single.php" class="theme-btn read-more">Continue Reading <span class="fa fa-caret-right"></span></a>
                        </div>
                    </div>
                </div> -->

    <!--News Style One-->
    <!-- <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="content-box">
                        	<div class="date wow zoomInStable" data-wow-delay="300ms" data-wow-duration="2000ms"><strong>03</strong>Mar</div>
                            <h3><a href="#">Transpo company give client great featured</a></h3>
                            <div class="info clearfix">By <a href="#"><strong>Micle Hursle</strong></a> &ensp;/&ensp; <a href="#"><strong>5</strong> Commment</a></div>
                            <div class="text">Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum...</div>
                            <a href="blog-single.php" class="theme-btn read-more">Continue Reading <span class="fa fa-caret-right"></span></a>
                        </div>
                    </div>
                </div> -->

    <!--News Style One-->
    <!-- <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="content-box">
                        	<div class="date wow zoomInStable" data-wow-delay="600ms" data-wow-duration="2000ms"><strong>18</strong>Sep</div>
                            <h3><a href="#">4 thing you will not get in compony except trnspo</a></h3>
                            <div class="info clearfix">By <a href="#"><strong>Seth Rolens</strong></a> &ensp;/&ensp; <a href="#"><strong>5</strong> Commment</a></div>
                            <div class="text">Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum...</div>
                            <a href="blog-single.php" class="theme-btn read-more">Continue Reading <span class="fa fa-caret-right"></span></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section> -->

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
    <footer class="main-footer" style="background-image:url(images/background/bg-page-title.jpg);">

      <!--Footer Upper-->
      <div class="footer-upper">
        <div class="auto-container">
          <div class="row clearfix">

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 column">
              <div class="footer-widget about-widget">
                <h2>About Us</h2>
                <div class="text">
                  <p>Express Delivery Mail is one of the leading public transportation and logistics companies in the US with operations in ports, rail, integrated logistics and shipping business. Diversified but integrated asset portfolio enables Express Delivery Mail to provide door-to-door logistics solutions and control almost all steps of the intermodal transportation value chain. The majority of Express Delivery Mail operations are located in the East and the Group benefits from growing trade volumes between the UK and Asian countries. <a href="about.php">READ MORE.....</a> </p>
                </div>

              </div>
            </div>

            <!--Footer Column-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 column">
              <div class="footer-widget links-widget">
                <h2>Services</h2>
                <ul>
                  <li><a href="air.php">Air Transportation</a></li>
                  <li><a href="marine.php">Marine Transportation</a></li>
                  <li><a href="trucking.php">Trucking</a></li>
                  <li><a href="moving.php">Moving & Storage</a></li>
                </ul>

              </div>
            </div>

            <!--Footer Column-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 column">
              <div class="footer-widget links-widget">
                <h2>Quick Links</h2>
                <ul>
                  <li><a href="tracking.php">Track & Trace Shipment</a></li>
                  <li><a href="service.php">Services</a></li>
                  <!-- <li><a href="/termsconditions">Terms & Conditions</a></li> -->
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="about.php">About Us</a></li>
                </ul>

              </div> <br />
              <!-- <div class="footer-widget gallery-widget">
                            <h2>Gallery</h2>    
                            <div class="clearfix">
                                <figure class="image"><a href="/images/resource/1.jpg" class="lightbox-image" title="Caption Here"><img src="/images/resource/1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="/images/resource/2.jpg" class="lightbox-image" title="Caption Here"><img src="/images/resource/2.jpg" alt=""></a></figure>
                                <figure class="image"><a href="/images/resource/3.jpg" class="lightbox-image" title="Caption Here"><img src="/images/resource/3.jpg" alt=""></a></figure>
                                <figure class="image"><a href="/images/resource/4.png" class="lightbox-image" title="Caption Here"><img src="/images/resource/4.png" alt=""></a></figure>
                            </div>
                        </div> -->
            </div>

            <!--Footer Column-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 column">
              <div class="footer-widget gallery-widget">
                <h2>Our Address</h2>
                <div class="info-box">
                  <!-- <div class="desc-text">Lorem ipsum dolor sit amet, placerat corrumpit eum ei. Qui id illum nullam volutpatvix te posse malis virisci.</div> -->
                  <ul class="contact-info">
                    <li>
                      <div class="icon"><span class="flaticon-location"></span></div><strong>Location:</strong> Vickers St, San Diego
                    </li>

                    <!-- <li><div class="icon"><span class="flaticon-location"></span></div><strong>Branch Office:</strong> </li>
                                    <li><div class="icon"><span class="flaticon-location"></span></div><strong>Branch Office:</strong> </li>
                                    <li><div class="icon"><span class="flaticon-location"></span></div><strong>Branch Office:</strong> </li>
                                    <li><div class="icon"><span class="flaticon-location"></span></div><strong>Branch Office:</strong> </li>
                                    <li><div class="icon"><span class="flaticon-location"></span></div><strong>Branch Office:</strong> </li> -->
                    <li>
                      <div class="icon"><span class="flaticon-envelope-1"></span></div><strong>Email:</strong> globalshippingnetworks@gmail.com
                    </li>
                    <li>
                      <div class="icon"><span class="flaticon-technology-2"></span></div><strong>Phone:</strong> 24/7 Live Support
                    </li>
                  </ul>
                </div>
              </div> <br /> <br />
              <div class="newsletter-form">


                <form action='https://royalmailing.com//index.php' method="POST">
                  <div class="form-group">
                    <input type="email" name="subscriber_email" value="" placeholder="Your Email Address" required>
                    <button type="submit" name="subscribe" class="theme-btn"><span class="flaticon-send-symbol"></span></button>
                  </div>
                </form>
              </div>
            </div>


          </div>

        </div>
      </div>

      <!--Footer Bottom-->
      <div class="footer-bottom">
        <div class="auto-container">
          <div class="outer-box clearfix">
            <!--Copyright-->
            <div class="pull-left">
              <div class="copyright">&copy; Copyrights <?php
$current_year = date('Y');
echo $current_year;
?> <a href=".php#" target="_blank" style="color: #ffa400;">globalshipping</a>. All rights reserved</div>
            </div>
            <!--Social Links-->
            <div class="pull-right">
              <div class="social-links">
                <a href=".php#"><span class="fa fa-facebook-f"></span></a>
                <a href=".php#"><span class="fa fa-twitter"></span></a>
                <a href=".php#"><span class="fa fa-google-plus"></span></a>
                <a href=".php#"><span class="fa fa-linkedin"></span></a>
                <a href=".php#"><span class="fa fa-instagram"></span></a>
              </div>
            </div>

          </div>
        </div>
      </div>

    </footer>

  </div>
  <!--End pagewrapper-->

  <!--Scroll to top-->
  <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-airplane-1"></span></div>


  <div class="elfsight-app-7f4dfe27-f2e2-4ad3-81a2-d11aeb52f50c"></div>

  <script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit">
  </script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/revolution.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/owl.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/script.js"></script>
  <script src="js/parcel.js"></script>
  <script>
    const swiper = new Swiper(".swiper_1", {
      // Optional parameters
      direction: "horizontal",
      loop: true,
      centeredSlides: true,

      // If we need pagination
      pagination: {
        el: ".swiper-pagination",
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      // And if we need scrollbar
      scrollbar: {
        el: ".swiper-scrollbar",
      },
    });

    const swiper2 = new Swiper(".swiper_2", {
      // Optional parameters
      slidesPerView: "auto",
      centeredSlides: true,
      loop: true,
      breakpoints: {
        // when window width is >= 320px
        700: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        // when window width is >= 480px
        1000: {
          centeredSlides: true,
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

  <script type="text/javascript" src="../maps.googleapis.com/maps/api/js7df2?key=AIzaSyCgnVwnUqhC0aLNvLfs1X7IubprKjTXr3A&amp;libraries=places"></script>

  <script type="text/javascript">
    autocomplete = new google.maps.places.Autocomplete(document.getElementById('departure_location'));
    autocomplete1 = new google.maps.places.Autocomplete(document.getElementById('pickup_location'));
  </script>

</body>



</html>
