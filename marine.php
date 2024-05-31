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
      <?php require 'partials/_header.php'; ?>
    <!--End Main Header -->
    <!--Main Slider-->
    <section class="main-slider negative-margin">

      <div class="tp-banner-container">
        <div class="tp-banner">
          <ul>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/s3.jpg" data-saveperformance="off" data-title="Awesome Title Here">
              <img src="images/main-slider/s3.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-70" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <div class="italic-text">G-Express Agency</div>
              </div>

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="10" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <h2>Making Transportation <br> Fast And Secure.</h2>
              </div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><!-- <a href="#" class="theme-btn btn-style-one">Read more about transpo <span class="fa fa-caret-right"></span></a> --></div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="290" data-y="center" data-voffset="110" data-speed="1500" data-start="1500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="tracking.php" class="theme-btn btn-style-two">Track Shipment</a></div>


            </li>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/s1.jpg" data-saveperformance="off" data-title="Awesome Title Here">
              <img src="images/main-slider/s1.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-70" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <div class="italic-text">Welcome to G-Express Agency</div>
              </div>

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="10" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <h2>We Value Your <br> Time And Money.</h2>
              </div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><!-- <a href="#" class="theme-btn btn-style-one">Read more about transpo <span class="fa fa-caret-right"></span></a> --></div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="290" data-y="center" data-voffset="110" data-speed="1500" data-start="1500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="contact.php" class="theme-btn btn-style-two">Contact Us</a></div>


            </li>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/s2.jpg" data-saveperformance="off" data-title="Awesome Title Here">
              <img src="images/main-slider/s2.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

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

    <section class="tw-py-16 tw-px-4 tw-container tw-mx-auto">
      <div class="tw-flex tw-flex-col tw-items-center">
        <h2 class="tw-text-primary tw-font-extrabold tw-text-2xl">OCEAN FREIGHT</h2>
        <h2 class="tw-tracking-tight tw-text-lg">The world is your oyster</h2>
        <h2 class="tw-tracking-tight tw-text-lg"></h2>
      </div>

      <p class="tw-text-center tw-my-8">
        With our broad product range we cover different equipment types and consolidation services to ensure your cargo reaches the right place, at the right time in a cost-efficient way. In order to deliver highest reliability we have planned space protection from every major container port in the world.
      </p>
    </section>

    <section>
      <div class="tw-flex tw-flex-col sm:tw-flex-row tw-justify-center tw-gap-2 tw-text-center tw-px-6">
        <div class="tw-flex tw-flex-col tw-justify-center tw-p-5 ">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="tw-fill-primary tw-h-28 tw-aspect-square">
            <title>brain</title>
            <path d="M21.33,12.91C21.42,14.46 20.71,15.95 19.44,16.86L20.21,18.35C20.44,18.8 20.47,19.33 20.27,19.8C20.08,20.27 19.69,20.64 19.21,20.8L18.42,21.05C18.25,21.11 18.06,21.14 17.88,21.14C17.37,21.14 16.89,20.91 16.56,20.5L14.44,18C13.55,17.85 12.71,17.47 12,16.9C11.5,17.05 11,17.13 10.5,17.13C9.62,17.13 8.74,16.86 8,16.34C7.47,16.5 6.93,16.57 6.38,16.56C5.59,16.57 4.81,16.41 4.08,16.11C2.65,15.47 1.7,14.07 1.65,12.5C1.57,11.78 1.69,11.05 2,10.39C1.71,9.64 1.68,8.82 1.93,8.06C2.3,7.11 3,6.32 3.87,5.82C4.45,4.13 6.08,3 7.87,3.12C9.47,1.62 11.92,1.46 13.7,2.75C14.12,2.64 14.56,2.58 15,2.58C16.36,2.55 17.65,3.15 18.5,4.22C20.54,4.75 22,6.57 22.08,8.69C22.13,9.8 21.83,10.89 21.22,11.82C21.29,12.18 21.33,12.54 21.33,12.91M16.33,11.5C16.9,11.57 17.35,12 17.35,12.57A1,1 0 0,1 16.35,13.57H15.72C15.4,14.47 14.84,15.26 14.1,15.86C14.35,15.95 14.61,16 14.87,16.07C20,16 19.4,12.87 19.4,12.82C19.34,11.39 18.14,10.27 16.71,10.33A1,1 0 0,1 15.71,9.33A1,1 0 0,1 16.71,8.33C17.94,8.36 19.12,8.82 20.04,9.63C20.09,9.34 20.12,9.04 20.12,8.74C20.06,7.5 19.5,6.42 17.25,6.21C16,3.25 12.85,4.89 12.85,5.81V5.81C12.82,6.04 13.06,6.53 13.1,6.56A1,1 0 0,1 14.1,7.56C14.1,8.11 13.65,8.56 13.1,8.56V8.56C12.57,8.54 12.07,8.34 11.67,8C11.19,8.31 10.64,8.5 10.07,8.56V8.56C9.5,8.61 9.03,8.21 9,7.66C8.92,7.1 9.33,6.61 9.88,6.56C10.04,6.54 10.82,6.42 10.82,5.79V5.79C10.82,5.13 11.07,4.5 11.5,4C10.58,3.75 9.59,4.08 8.59,5.29C6.75,5 6,5.25 5.45,7.2C4.5,7.67 4,8 3.78,9C4.86,8.78 5.97,8.87 7,9.25C7.5,9.44 7.78,10 7.59,10.54C7.4,11.06 6.82,11.32 6.3,11.13C5.57,10.81 4.75,10.79 4,11.07C3.68,11.34 3.68,11.9 3.68,12.34C3.68,13.08 4.05,13.77 4.68,14.17C5.21,14.44 5.8,14.58 6.39,14.57C6.24,14.31 6.11,14.04 6,13.76C5.81,13.22 6.1,12.63 6.64,12.44C7.18,12.25 7.77,12.54 7.96,13.08C8.36,14.22 9.38,15 10.58,15.13C11.95,15.06 13.17,14.25 13.77,13C14,11.62 15.11,11.5 16.33,11.5M18.33,18.97L17.71,17.67L17,17.83L18,19.08L18.33,18.97M13.68,10.36C13.7,9.83 13.3,9.38 12.77,9.33C12.06,9.29 11.37,9.53 10.84,10C10.27,10.58 9.97,11.38 10,12.19A1,1 0 0,0 11,13.19C11.57,13.19 12,12.74 12,12.19C12,11.92 12.07,11.65 12.23,11.43C12.35,11.33 12.5,11.28 12.66,11.28C13.21,11.31 13.68,10.9 13.68,10.36Z" />
          </svg>
          <h4 class="tw-text-3xl tw-font-bold tw-text-primary tw-text-center">Expertise</h4>
          <hr class="tw-my-4" />
          <p>We have logistics experts specializing in major industry sectors, so we can help you improve your performance and drive out costs.</p>
        </div>
        <div class="tw-flex tw-flex-col tw-justify-center tw-p-5">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="tw-fill-primary tw-h-28 tw-aspect-square">
            <title>globe-model</title>
            <path d="M17.36,2.64L15.95,4.06C17.26,5.37 18,7.14 18,9A7,7 0 0,1 11,16C9.15,16 7.37,15.26 6.06,13.95L4.64,15.36C6.08,16.8 7.97,17.71 10,17.93V20H6V22H16V20H12V17.94C16.55,17.43 20,13.58 20,9C20,6.62 19.05,4.33 17.36,2.64M11,3.5A5.5,5.5 0 0,0 5.5,9A5.5,5.5 0 0,0 11,14.5A5.5,5.5 0 0,0 16.5,9A5.5,5.5 0 0,0 11,3.5M11,5.5C12.94,5.5 14.5,7.07 14.5,9A3.5,3.5 0 0,1 11,12.5A3.5,3.5 0 0,1 7.5,9A3.5,3.5 0 0,1 11,5.5Z" />
          </svg>
          <h4 class="tw-text-3xl tw-font-bold tw-text-primary tw-text-center">Global Reach</h4>
          <hr class="tw-my-4" />
          <p>We’re on the ground in over 190 countries allowing you to export and import from more locations worldwide. Providing more ocean loops and services than anyone else.</p>
        </div>
        <div class="tw-flex tw-flex-col tw-justify-center tw-p-5">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="tw-fill-primary tw-h-28 tw-aspect-square">
            <title>truck-cargo-container</title>
            <path d="M20 8H17V4H1V17H3C3 18.66 4.34 20 6 20S9 18.66 9 17H15C15 18.66 16.34 20 18 20S21 18.66 21 17H23V12L20 8M6 18.5C5.17 18.5 4.5 17.83 4.5 17S5.17 15.5 6 15.5 7.5 16.17 7.5 17 6.83 18.5 6 18.5M15 7H13V14H11V7H9V14H7V7H5V14H3V6H15V7M18 18.5C17.17 18.5 16.5 17.83 16.5 17S17.17 15.5 18 15.5 19.5 16.17 19.5 17 18.83 18.5 18 18.5M17 12V9.5H19.5L21.46 12H17Z" />
          </svg>
          <h4 class="tw-text-3xl tw-font-bold tw-text-primary tw-text-center">Quality Control</h4>
          <hr class="tw-my-4" />
          <p>G-Express Agencys Ocean Freight shipments include a wide range of quality controlled equipment types. We strive for on time deliverability and provide end-to-end visibility.</p>
        </div>
      </div>
    </section>

    <section class="tw-py-10 tw-px-4">
      <div class="tw-flex tw-justify-center tw-flex-wrap">
        <div class="tw-p-2 tw-basis-full sm:tw-basis-1/2 md:tw-basis-1/3 lg:tw-basis-1/4">
          <div class="tw-flex tw-flex-col tw-rounded-t-lg tw-overflow-hidden tw-h-[300px]">
            <img src="/images/ocean-1.jpg" alt="">
            <h4 class="tw-text-lg tw-font-extrabold tw-mt-5 tw-mb-2">Full-Container-Load (FCL)</h4>
            <p>Ensuring reliable, safe and cost-efficient transportation door to door globally.</p>
          </div>
        </div>

        <div class="tw-p-2 tw-basis-full sm:tw-basis-1/2 md:tw-basis-1/3 lg:tw-basis-1/4">
          <div class="tw-flex tw-flex-col tw-rounded-t-lg tw-overflow-hidden tw-h-[300px]">
            <img src="/images/ocean-2.jpg" alt="">
            <h4 class="tw-text-lg tw-font-extrabold tw-mt-5 tw-mb-2">Full-Container-Load (FCL)</h4>
            <p>Ensuring reliable, safe and cost-efficient transportation door to door globally.</p>
          </div>
        </div>

        <div class="tw-p-2 tw-basis-full sm:tw-basis-1/2 md:tw-basis-1/3 lg:tw-basis-1/4">
          <div class="tw-flex tw-flex-col tw-rounded-t-lg tw-overflow-hidden tw-h-[300px]">
            <img src="/images/ocean-3.jpg" alt="">
            <h4 class="tw-text-lg tw-font-extrabold tw-mt-5 tw-mb-2">Full-Container-Load (FCL)</h4>
            <p>Ensuring reliable, safe and cost-efficient transportation door to door globally.</p>
          </div>
        </div>

        <div class="tw-p-2 tw-basis-full sm:tw-basis-1/2 md:tw-basis-1/3 lg:tw-basis-1/4">
          <div class="tw-flex tw-flex-col tw-rounded-t-lg tw-overflow-hidden tw-h-[300px]">
            <img src="/images/ocean-4.jpg" alt="">
            <h4 class="tw-text-lg tw-font-extrabold tw-mt-5 tw-mb-2">Full-Container-Load (FCL)</h4>
            <p>Ensuring reliable, safe and cost-efficient transportation door to door globally.</p>
          </div>
        </div>

        <div class="tw-p-2 tw-basis-full sm:tw-basis-1/2 md:tw-basis-1/3 lg:tw-basis-1/4">
          <div class="tw-flex tw-flex-col tw-rounded-t-lg tw-overflow-hidden tw-h-[300px]">
            <img src="/images/ocean-5.jpg" alt="">
            <h4 class="tw-text-lg tw-font-extrabold tw-mt-5 tw-mb-2">Full-Container-Load (FCL)</h4>
            <p>Ensuring reliable, safe and cost-efficient transportation door to door globally.</p>
          </div>
        </div>

        <div class="tw-p-2 tw-basis-full sm:tw-basis-1/2 md:tw-basis-1/3 lg:tw-basis-1/4">
          <div class="tw-flex tw-flex-col tw-rounded-t-lg tw-overflow-hidden tw-h-[300px]">
            <img src="/images/ocean-6.jpg" alt="">
            <h4 class="tw-text-lg tw-font-extrabold tw-mt-5 tw-mb-2">Full-Container-Load (FCL)</h4>
            <p>Ensuring reliable, safe and cost-efficient transportation door to door globally.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="tw-py-10 tw-px-4">
      <h3 class="tw-font-extrabold tw-text-3xl tw-text-center tw-mb-9">Consider the following for your shipment</h3>
      <div class="tw-flex tw-flex-col sm:tw-flex-row tw-justify-center tw-gap-8">
        <div class="tw-flex tw-flex-col tw-gap-4 tw-items-center tw-justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="tw-h-16 tw-fill-primary">
            <title>package-variant-closed-check</title>
            <path d="M12 2C11.8 2 11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L13.5 21.3C13.2 20.7 13.1 20 13 19.3V12.6L19 9.2V13C19.7 13 20.4 13.1 21 13.3V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M8.1 6.3L14 9.8L12 10.9L6 7.5L8.1 6.3M5 9.2L11 12.6V19.3L5 15.9V9.2M21.3 15.8L17.7 19.4L16.1 17.8L15 19L17.8 22L22.6 17.2L21.3 15.8Z" />
          </svg>
          <span class="tw-text-primary">Cargo Assurance</span>
        </div>
        <div class="tw-flex tw-flex-col tw-gap-4 tw-items-center tw-justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="tw-h-16 tw-fill-primary">
            <title>plane-train</title>
            <path d="M20 8H14C12.34 8 11 9.34 11 11V18C11 19.66 12.34 21 14 21L13 22V23H14L16 20.97H18L20 23H21V22L20 21C21.66 21 23 19.66 23 18V11C23 9.34 21.66 8 20 8M14 19C13.45 19 13 18.55 13 18S13.45 17 14 17 15 17.45 15 18 14.55 19 14 19M20 19C19.45 19 19 18.55 19 18S19.45 17 20 17 21 17.45 21 18 20.55 19 20 19M21 16H13V10H21V16M6.66 14.53L7 17L5.95 18.06L4.19 14.88L1 13.11L2.06 12.03L4.56 12.4L8.43 8.53L1 4.62L2.42 3.21L11.61 5.33L15.5 1.44C16.06 .855 17.06 .855 17.62 1.44C18.21 2.03 18.21 3 17.62 3.56L14.18 7H14C11.79 7 10 8.79 10 11V11.19L6.66 14.53Z" />
          </svg>
          <span class="tw-text-primary">Cargo Assurance</span>
        </div>
        <div class="tw-flex tw-flex-col tw-gap-4 tw-items-center tw-justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="tw-h-16 tw-fill-primary">
            <title>leaf-circle-outline</title>
            <path d="M8.04 16.34C9.05 13.83 10.19 10.96 14.5 10C14.5 10 9.5 10 7.88 14.63C7.88 14.63 7 13.75 7 12.75S8 9.63 10.5 9.13C11.21 9 12 8.87 12.78 8.76C14.75 8.5 16.64 8.22 17 7.5C17 7.5 15.5 16 10 16C9.82 16 9.57 15.94 9.33 15.85L8.86 17L7.91 16.67L8.04 16.34M12 4C16.41 4 20 7.59 20 12S16.41 20 12 20 4 16.41 4 12 7.59 4 12 4M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2Z" />
          </svg>
          <span class="tw-text-primary">GoGreen Solutions</span>
        </div>
      </div>
    </section>


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
    <?php require 'partials/_footer.php' ?>

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
