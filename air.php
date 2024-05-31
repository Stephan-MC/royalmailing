<?php

include 'admin/pages/config.php';

global $mysqli;




?>
<!DOCTYPE html>
<html style="font-size: 16px">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <title>Global Shipping | Home</title>
  <!-- Stylesheets -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/revolution-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/tailwind.css" rel="stylesheet">
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
      <?php require 'partials/_header.php'; ?>
    <!--End Main Header -->
    <!--Main Slider-->
    <section class="main-slider negative-margin">

      <div class="tp-banner-container">
        <div class="tp-banner">
          <ul>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/air3.jpg" data-saveperformance="off" data-title="Awesome Title Here">
              <img src="images/main-slider/air3.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-70" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <div class="italic-text">Global Shipping</div>
              </div>

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="10" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <h2>Making Transportation <br> Fast And Secure.</h2>
              </div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><!-- <a href="#" class="theme-btn btn-style-one">Read more about transpo <span class="fa fa-caret-right"></span></a> --></div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="290" data-y="center" data-voffset="110" data-speed="1500" data-start="1500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="tracking.php" class="theme-btn btn-style-two">Track Shipment</a></div>


            </li>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/air2.jpg" data-saveperformance="off" data-title="Awesome Title Here">
              <img src="images/main-slider/air1.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-70" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <div class="italic-text">Welcome to Global Shipping</div>
              </div>

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="10" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <h2>We Value Your <br> Time And Money.</h2>
              </div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><!-- <a href="#" class="theme-btn btn-style-one">Read more about transpo <span class="fa fa-caret-right"></span></a> --></div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="290" data-y="center" data-voffset="110" data-speed="1500" data-start="1500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="contact.php" class="theme-btn btn-style-two">Contact Us</a></div>


            </li>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/air2.jpg" data-saveperformance="off" data-title="Awesome Title Here">
              <img src="images/main-slider/air2.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-70" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <div class="italic-text">Global Shipping</div>
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



    <section class="tw-py-10 tw-px-4">
      <img src="/images/2-1.jpg" class="tw-w-full" alt="">
    </section>

    <section class="tw-py-16 tw-px-4 tw-container tw-mx-auto">
      <div class="tw-flex tw-flex-col tw-items-center">
        <h2 class="tw-text-primary font-extrabold tw-text-2xl">AIR FREIGHT</h2>
        <h2 class="tw-tracking-tight tw-text-lg">The sky's the limit</h2>
      </div>

      <p class="tw-text-center tw-my-8">
        Working with carefully selected carriers, we operate with schedules on all the world’s major routes so you can plan with certainty and become more efficient. We offer a range of highly tw-flexible products which allow a choice of delivery speeds to best suit your requirements.
      </p>
    </section>

    <section class="tw-flex tw-flex-col md:tw-flex-row tw-py-16 md:tw-justify-center tw-container tw-mx-auto
      [&>div]:tw-border-t [&>div]:md:tw-border-none last-of-type:[&>div]:tw-border-b [&>div]:md:tw-flex-1 [&>div]:tw-p-2 [&>div]:tw-border-black
      [&>div_button]:tw-flex [&>div_button]:md:tw-flex-col [&>div_button]:md:tw-shadow [&>div_button]:md:tw-py-4 [&>div_button]:tw-shadow-black [&>div_button]:md:tw-gap-0 [&>div_button]:tw-items-center tw-px-4">
      <div>
        <button type="button" class="tw-w-full tw-gap-6 hover:tw-text-primary tw-transition tw-duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="tw-fill-primary tw-h-8 aspect-square">
            <title>calendar-month-outline</title>
            <path d="M7 11H9V13H7V11M21 5V19C21 20.11 20.11 21 19 21H5C3.89 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H6V1H8V3H16V1H18V3H19C20.11 3 21 3.9 21 5M5 7H19V5H5V7M19 19V9H5V19H19M15 13V11H17V13H15M11 13V11H13V13H11M7 15H9V17H7V15M15 17V15H17V17H15M11 17V15H13V17H11Z" />
          </svg>
          <span class="tw-font-black tw-text-sm">Book Online</span>
        </button>
      </div>
      <div>
        <button type="button" class="tw-w-full tw-gap-6 hover:tw-text-primary tw-transition tw-duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="tw-fill-primary tw-h-8 aspect-square">
            <title>face-agent</title>
            <path d="M18.72,14.76C19.07,13.91 19.26,13 19.26,12C19.26,11.28 19.15,10.59 18.96,9.95C18.31,10.1 17.63,10.18 16.92,10.18C13.86,10.18 11.15,8.67 9.5,6.34C8.61,8.5 6.91,10.26 4.77,11.22C4.73,11.47 4.73,11.74 4.73,12A7.27,7.27 0 0,0 12,19.27C13.05,19.27 14.06,19.04 14.97,18.63C15.54,19.72 15.8,20.26 15.78,20.26C14.14,20.81 12.87,21.08 12,21.08C9.58,21.08 7.27,20.13 5.57,18.42C4.53,17.38 3.76,16.11 3.33,14.73H2V10.18H3.09C3.93,6.04 7.6,2.92 12,2.92C14.4,2.92 16.71,3.87 18.42,5.58C19.69,6.84 20.54,8.45 20.89,10.18H22V14.67H22V14.69L22,14.73H21.94L18.38,18L13.08,17.4V15.73H17.91L18.72,14.76M9.27,11.77C9.57,11.77 9.86,11.89 10.07,12.11C10.28,12.32 10.4,12.61 10.4,12.91C10.4,13.21 10.28,13.5 10.07,13.71C9.86,13.92 9.57,14.04 9.27,14.04C8.64,14.04 8.13,13.54 8.13,12.91C8.13,12.28 8.64,11.77 9.27,11.77M14.72,11.77C15.35,11.77 15.85,12.28 15.85,12.91C15.85,13.54 15.35,14.04 14.72,14.04C14.09,14.04 13.58,13.54 13.58,12.91A1.14,1.14 0 0,1 14.72,11.77Z" />
          </svg>
          <span class="tw-font-black tw-text-sm">Customer Service</span>
        </button>
      </div>
      <div>
        <button type="button" class="tw-w-full tw-gap-6 hover:tw-text-primary tw-transition tw-duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="tw-fill-primary tw-h-8 aspect-square">
            <title>cellphone-marker</title>
            <path d="M18.5 13C16.6 13 15 14.61 15 16.5C15 19.11 18.5 23 18.5 23S22 19.11 22 16.5C22 14.61 20.4 13 18.5 13M18.5 17.81C17.8 17.81 17.3 17.21 17.3 16.61C17.3 15.91 17.9 15.41 18.5 15.41S19.7 16 19.7 16.61C19.8 17.21 19.2 17.81 18.5 17.81M15.91 23H7C5.9 23 5 22.11 5 21V3C5 1.89 5.89 1 7 1H17C18.1 1 19 1.89 19 3V11.03C18.84 11 18.67 11 18.5 11C18 11 17.5 11.08 17 11.22V5H7V19H13.54C14.14 20.5 15.12 21.97 15.91 23Z" />
          </svg>
          <span class="tw-font-black tw-text-sm">Track your shipment</span>
        </button>
      </div>
    </section>

    <section class="tw-px-4 tw-my-10 tw-container tw-mx-auto">
      <h3 class="tw-text-2xl tw-font-black tw-text-center tw-text-primary">Our Products</h3>

      <div class="tw-max-w-4xl tw-mx-auto">
        <p class="tw-my-4 tw-text-center">
          <b>All products inlcude</b>
        </p>

        <ul class="tw-list-inside tw-list-[square] md:tw-grid md:tw-grid-rows-3 md:tw-grid-cols-2 tw-flex-col">
          <li class="tw-list-inside marker:tw-text-primary">Door-to-door service with other options available</li>
          <li class="tw-list-inside marker:tw-text-primary">Defined lead times</li>
          <li class="tw-list-inside marker:tw-text-primary">Optional Cargo Insurance</li>
          <li class="tw-list-inside marker:tw-text-primary">End-to-end visibility</li>
          <li class="tw-list-inside marker:tw-text-primary">Optional Customs Brokerage</li>
        </ul>
      </div>
    </section>

    <section class="tw-py-10 tw-px-4 tw-container tw-mx-auto">
      <div class="tw-flex tw-gap-8 tw-text-sm md:tw-justify-center">
        <span>Legend</span>
        <span>
          <span class="tw-text-green-500">&check;</span> Included</span>
        <span>
          <span class="tw-text-red-500">&times;</span>
          Not included
        </span>
      </div>
      <div class="tw-p-3 tw-space-y-16 md:tw-space-y-0 md:tw-flex md:tw-flex-row md:tw-gap-3 md:tw-justify-center">

        <div class="tw-py-4 tw-px-px tw-border tw-border-gray-300 tw-rounded tw-hidden md:tw-block">
          <h4 class="tw-text-md tw-invisible tw-font-black tw-text-center tw-text-primary">Same Day Jetline</h4>
          <span class="tw-text-gray-500 tw-invisible tw-text-center tw-block">Mission Critical Next Flightout</span>

          <div class="tw-mt-8 tw-flex tw-flex-col tw-gap-4 md:tw-gap-1 tw-p-1 [&>div]:md:tw-py-3 [&>div>div]:tw-basis-1/2 last:[&>div>div]:md:tw-hidden [&>div>div]:md:tw-basis-full last:[&>div>div]:!tw-text-left last:[&>div>div]:tw-font-bold [&>div]:tw-text-sm">
            <div class="tw-flex tw-gap-2 tw-text-sm">
              <div>Typical transit time</div>
              <div>Within 24 hours</div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>globally available</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-flex tw-gap-2 tw-text-sm">
              <div>Pickup time</div>
              <div>60 min</div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>On all inclusive price</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>Day definite delivery</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>Proactive shipment and monitoring</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

          </div>
        </div>

        <div class="tw-py-4 tw-px-2 tw-border tw-border-gray-300 tw-rounded tw-flex-1">
          <h4 class="tw-text-md tw-font-black tw-text-center tw-text-primary">Same Day Jetline</h4>
          <span class="tw-text-gray-500 tw-text-center tw-block">Mission Critical Next Flight Out</span>

          <div class="tw-mt-8 tw-flex tw-flex-col tw-gap-4 md:tw-gap-1 tw-p-1 first:[&>div>div]:tw-text-gray-500 first:[&>div>div]:md:tw-hidden [&>div]:md:tw-py-3 [&>div:nth-child(even)]:md:tw-bg-gray-500/50 [&>div>div]:tw-basis-1/2 [&>div>div]:md:tw-basis-full last:[&>div>div]:!tw-text-center last:[&>div>div]:tw-font-bold [&>div]:tw-text-sm">
            <div class="tw-flex tw-gap-2 tw-text-sm">
              <div>Typical transit time</div>
              <div>Within 24 hours</div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>globally available</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-flex tw-gap-2 tw-text-sm">
              <div>Pickup time</div>
              <div>60 min</div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>On all inclusive price</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>Day definite delivery</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>Proactive shipment and monitoring</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-mt-2 tw-flex tw-flex-col tw-gap-4 [&>button]:tw-py-2 [&>button]:tw-rounded">
              <button class="tw-border-2 tw-border-primary tw-text-primary tw-bg-transparent">Show details</button>
              <button class="tw-border-2 tw-border-primary hover:tw-bg-primary/80 tw-bg-primary tw-text-white">Get a quote</button>
            </div>
          </div>
        </div>


        <div class="tw-py-4 tw-px-2 tw-border tw-border-gray-300 tw-rounded tw-flex-1">
          <h4 class="tw-text-md tw-font-black tw-text-center tw-text-primary">Same Day Speedline</h4>
          <span class="tw-text-gray-500 tw-text-center tw-block">Mission Critical Best Flight Out</span>

          <div class="tw-mt-8 tw-flex tw-flex-col tw-gap-4 md:tw-gap-1 tw-p-1 first:[&>div>div]:tw-text-gray-500 first:[&>div>div]:md:tw-hidden [&>div]:md:tw-py-3 [&>div:nth-child(even)]:md:tw-bg-gray-500/50 [&>div>div]:tw-basis-1/2 [&>div>div]:md:tw-basis-full last:[&>div>div]:!tw-text-center last:[&>div>div]:tw-font-bold [&>div]:tw-text-sm">
            <div class="tw-flex tw-gap-2 tw-text-sm">
              <div>Typical transit time</div>
              <div>Within 24 hours</div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>globally available</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-flex tw-gap-2 tw-text-sm">
              <div>Pickup time</div>
              <div>120 min</div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>On all inclusive price</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>Day definite delivery</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>Proactive shipment and monitoring</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-mt-2 tw-flex tw-flex-col tw-gap-4 [&>button]:tw-py-2 [&>button]:tw-rounded">
              <button class="tw-border-2 tw-border-primary tw-text-primary tw-bg-transparent">Show details</button>
              <button class="tw-border-2 tw-border-primary hover:tw-bg-primary/80 tw-bg-primary tw-text-white">Get a quote</button>
            </div>
          </div>
        </div>

        <div class="tw-py-4 tw-px-2 tw-border tw-border-gray-300 tw-rounded tw-flex-1">
          <h4 class="tw-text-md tw-font-black tw-text-center tw-text-primary">Air Priority</h4>
          <span class="tw-text-gray-500 tw-text-center tw-block">Urgent Air Freight</span>

          <div class="tw-mt-8 tw-flex tw-flex-col tw-gap-4 md:tw-gap-1 tw-p-1 first:[&>div>div]:tw-text-gray-500 first:[&>div>div]:md:tw-hidden [&>div]:md:tw-py-3 [&>div:nth-child(even)]:md:tw-bg-gray-500/50 [&>div>div]:tw-basis-1/2 [&>div>div]:md:tw-basis-full last:[&>div>div]:!tw-text-center last:[&>div>div]:tw-font-bold [&>div]:tw-text-sm">
            <div class="tw-flex tw-gap-2 tw-text-sm">
              <div>Typical transit time</div>
              <div>1-2 days</div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>globally available</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-flex tw-gap-2 tw-text-sm">
              <div>Pickup time</div>
              <div>1-2 days</div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>On all inclusive price</div>
              <div><span class="tw-text-red-500 tw-text-xl">&times;</span></div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>Day definite delivery</div>
              <div><span class="tw-text-green-500 tw-text-xl">&check;</span></div>
            </div>

            <div class="tw-flex tw-gap-2">
              <div>Proactive shipment and monitoring</div>
              <div><span class="tw-text-red-500 tw-text-xl">&times;</span></div>
            </div>

            <div class="tw-mt-2 tw-flex tw-flex-col tw-gap-4 [&>button]:tw-py-2 [&>button]:tw-rounded">
              <button class="tw-border-2 tw-border-primary tw-text-primary tw-bg-transparent">Show details</button>
              <button class="tw-border-2 tw-border-primary hover:tw-bg-primary/80 tw-bg-primary tw-text-white">Get a quote</button>
            </div>
          </div>
        </div>

      </div>
      <div class="tw-px-2 tw-space-y-4 tw-text-sm md:tw-text-base">
        <p class="tw-my-2 tw-p-0"><sup>1</sup> Including weekend operations</p>
        <p class="tw-my-2 tw-p-0"><sup>2</sup> Depending on origin and destination</p>
        <p class="tw-my-2 tw-p-0"><sup>3</sup> Pickup time from order (standard shipments)</p>
        <p class="tw-my-2 tw-p-0"><sup>4</sup> G-EA Airfreight Plus has 3 day definite service levels: Priority 1-2, Classic 2-3 & Deferred 3-5 days
        <p>
      </div>
    </section>

    <section class="tw-py-16 tw-px-4 tw-container tw-mx-auto">
      <h3 class="tw-text-2xl tw-font-black tw-text-center tw-mb-4 tw-text-primary">Why Choose Us?</h3>
      <img src="/images/2-2.jpg" alt="" class="tw-block tw-w-full tw-object-cover tw-object-center tw-mx-auto" />

      <div class="tw-flex tw-flex-col tw-items-center tw-max-w-5xl tw-mx-auto">
        <h4 class="tw-font-bold tw-text-md tw-mx-auto">Our tw-flexible and diverse products, global reach & local knowledge, all diversed hassle-free by our Air Freight Experts</h4>

        <ul class="tw-list-outside tw-list-[square] tw-my-2 tw-px-2 tw-space-y-4">
          <li class="tw-list-item tw-list-inside marker:tw-text-primary">A range of time-specific options from economical routing to first out and even same day, delivering reliability at the speed you need</li>
          <li class="tw-list-item tw-list-inside marker:tw-text-primary">Total tw-flexibility over delivery choices (e.g. door-to-door, airport-to-airport) enables you to customize your Air Freight</li>
          <li class="tw-list-item tw-list-inside marker:tw-text-primary">Preferential carrier access ensures your cargo receives transit time reliability, worldwide</li>
          <li class="tw-list-item tw-list-inside marker:tw-text-primary">Over 7,000 Air Freight Experts in more than 190 countries ensuring smooth transit of your cargo</li>
        </ul>
      </div>
    </section>


    <section class="tw-my-16 tw-px-4 tw-container tw-mx-auto">
      <img src="/images/2-3.jpg" alt="" class="tw-block tw-mx-auto">

      <div class="tw-space-y-3 tw-pt-2">
        <h3 class="tw-text-2xl tw-font-black tw-text-center tw-tracking-tight tw-text-primary">Thinking Things Over or Unsure of what to do ?</h3>

        <p class="tw-text-center">Get in contact with our Global Shipping experts to discuss your requirements or find solutions to your worries</p>

        <div class="tw-mt-2 tw-flex tw-flex-col tw-gap-4 [&>button]:tw-py-2 [&>button]:tw-rounded md:tw-flex-row md:tw-justify-center">
          <button class="tw-border-2 tw-border-primary tw-text-primary tw-bg-transparent tw-px-6">Show details</button>
          <button class="tw-border-2 tw-border-primary hover:tw-bg-primary/80 tw-bg-primary tw-text-white tw-px-6">Get a quote</button>
        </div>
      </div>
    </section>

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
                  <li><a href="rail.php">Rail Transportation</a></li>
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

  <script type="text/javascript" src="../maps.googleapis.com/maps/api/js7df2?key=AIzaSyCgnVwnUqhC0aLNvLfs1X7IubprKjTXr3A&amp;libraries=places"></script>

  <script type="text/javascript">
    autocomplete = new google.maps.places.Autocomplete(document.getElementById('departure_location'));
    autocomplete1 = new google.maps.places.Autocomplete(document.getElementById('pickup_location'));
  </script>

</body>



</html>
