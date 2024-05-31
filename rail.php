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

    <!-- Main Header-->
      <?php require 'partials/_header.php'; ?>
    <!--End Main Header -->
    <!--Main Slider-->
    <section class="main-slider negative-margin">

      <div class="tp-banner-container">
        <div class="tp-banner">
          <ul>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/t1.jpg" data-saveperformance="off" data-title="Awesome Title Here">
              <img src="images/main-slider/t1.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-70" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <div class="italic-text">G-Express Agency</div>
              </div>

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="10" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <h2>Making Transportation <br> Fast And Secure.</h2>
              </div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><!-- <a href="#" class="theme-btn btn-style-one">Read more about transpo <span class="fa fa-caret-right"></span></a> --></div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="290" data-y="center" data-voffset="110" data-speed="1500" data-start="1500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="tracking.php" class="theme-btn btn-style-two">Track Shipment</a></div>


            </li>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/t2.jpg" data-saveperformance="off" data-title="Awesome Title Here">
              <img src="images/main-slider/t2.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-70" data-speed="1500" data-start="0" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <div class="italic-text">Welcome to G-Express Agency</div>
              </div>

              <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="10" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                <h2>We Value Your <br> Time And Money.</h2>
              </div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110" data-speed="1500" data-start="1000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><!-- <a href="#" class="theme-btn btn-style-one">Read more about transpo <span class="fa fa-caret-right"></span></a> --></div>

              <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="290" data-y="center" data-voffset="110" data-speed="1500" data-start="1500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="contact.php" class="theme-btn btn-style-two">Contact Us</a></div>


            </li>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/t3.jpg" data-saveperformance="off" data-title="Awesome Title Here">
              <img src="images/main-slider/t3.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

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




    <section>

      <section class="md:tw-h-[450px] tw-relative ">
        <div class="tw-h-full  tw-w-full tw-bg-gray-500 tw-overflow-hidden">
          <img src="/images/rail-1.webp" alt="" class="tw-h-full tw-w-full tw-object-center tw-object-cover">
        </div>
        <div class="md:tw-absolute tw-grid md:tw-mx-20 tw-bg-white tw-top-[30%] tw-p-7 tw-space-y-8">
          <a href="" class="tw-text-3xl tw-text-primary">
            <div>GET IN TOUCH</div>
            <div class="tw-font-bold">FOR RAIL FREIGHT INQUIRIES</div>
          </a>
          <button class="tw-bg-primary tw-text-white tw-px-4 tw-py-2 tw-rounded-sm">Between Europe - Asia</button>
        </div>
      </section>
      <section class=" tw-mx-10 tw-my-10 tw-px-5">
        <nav class="tw-text-gray-700">
          <a href="" class="hover:tw-text-primary">G-Express Agency</a>
          <svg class="tw-h-5 tw-w-5 tw-fill-gray-700 tw-inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <title>
              chevron-right</title>
            <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
          </svg>
          <a href="" class="hover:tw-text-primary">Our Division</a>
          <svg class="tw-h-5 tw-w-5  tw-inline tw-fill-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <title>
              chevron-right</title>
            <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
          </svg>
          <a href="" class="hover:tw-text-primary">G-Express Agency Global Forwarding</a>
          <svg class="tw-h-5 tw-w-5  tw-inline tw-fill-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <title>
              chevron-right</title>
            <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
          </svg>
          <span class="tw-text-black">Rail Freight</span>
        </nav>
      </section>
      <section class="tw-my-10">
        <div class="tw-max-w-[768px] tw-text-center tw-mx-auto tw-space-y-8">
          <div class="tw-text-xl md:tw-text-4xl">
            <h2 class=" tw-font-bold tw-text-primary">RAIL FREIGHT</h2>
            <h3>On Track with the New Silk Road</h3>
          </div>
          <p>Our Rail Freight products offer secure, reliable and environmentally friendly freight transportation via
            rail, either throughout Europe or connecting Europe and Asia, West- and Eastbound, LCL
            (Less-than-Container-Load) or FCL (Full-Container-Load).</p>
        </div>
      </section>
      <section class="tw-my-10 tw-px-5">
        <div class="tw-text-center tw-mx-auto tw-max-w-[768px]">
          <h2 class=" tw-font-bold tw-text-3xl tw-mb-8">G-Express Agency RailLine - Full-Container-Load (FCL)</h2>
          <div class="">
            <img src="/images/rail-2.jpg" alt="not found" class="md:tw-float-right tw-h-48 tw-w-96">
            <ul class="tw-list-[square] tw-text-left tw-space-y-4 tw-py-5">
              <li>Regular departures from major business centres across Europe and Asia</li>
              <li>An environmentally friendly alternative for your FCL cargo transportation</li>
              <li>Services available for containers, trailers, wagon groups and block train movements</li>
            </ul>
          </div>
          <div class="tw-text-left tw-border-t-[2px] tw-border-b-[2px] tw-my-10">
            <div id="readmore" class="tw-py-4 tw-flex tw-items-center tw-justify-between hover:tw-text-primary">
              <h3 class="">Read More</h3>
              <svg class="tw-h-6 tw-w-6 tw-fill-primary tw-transform tw-rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <title>
                  chevron-down</title>
                <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
              </svg>
            </div>
            <div class="tw-space-y-6 tw-pb-5 tw-hidden">
              <h4>Full-Container-Load (FCL) rail multi-modal service available with single containers, trailers,
                wagon groups and block train movements.</h4>
              <h4>Environmentally friendly, cost efficient & providing reliable and prompt connections within
                Europe, and connecting Asia Pacific and Europe – both west and eastbound.</h4>
              <ul class="tw-list-[square] tw-text-left tw-space-y-4">
                <li>Standard loading unit: containers, trailers, wagon groups and block trains</li>
                <li>Pre and on-carriage, either by chassis truck or trailer (tilt or box)</li>
                <li>Service covering Asian origins/destinations in China, Taiwan, Japan, Korea, Vietnam, to and
                  from Europe
                </li>
                <li>Highly reliable connections between G-EA’s regional networks in Europe and Asia</li>
                <li>Dedicated rail hubs in Europe and China</li>
                <li>Standardised operation from pick-up to delivery</li>
                <li>Secure and monitored loading and handling</li>
                <li>State-of-the-art Track and Trace</li>
                <li>Efficient handling of transit formalities</li>
                <li>Regular departures between major business centres</li>
                <li>Defined and highly reliable door-to-door lead times</li>
                <li>Excludes dangerous goods</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tw-text-center tw-mx-auto tw-max-w-[768px]">
          <h2 class=" tw-font-bold tw-text-3xl tw-mb-8">G-Express Agency RailConnect - Less-than-Container-Load (LCL)</h2>
          <div class="">
            <img src="/images/rail-2.jpg" alt="not found" class="md:tw-float-right tw-h-48 tw-w-96">
            <ul class="tw-list-[square] tw-text-left tw-space-y-4 tw-py-5">
              <li>Fast & secure transportation of your Less-than-Container-Load (LCL) cargo</li>
              <li>Regular departures from major business centres across Europe and China</li>
              <li>Defined & reliable transit times</li>
            </ul>
          </div>
          <div class="tw-text-left tw-border-t-[2px] tw-border-b-[2px] tw-my-10">
            <div id="readmore" class="tw-py-4 tw-flex tw-items-center tw-justify-between hover:tw-text-primary">
              <h3 class="">Read More</h3>
              <svg class="tw-h-6 tw-w-6 tw-fill-primary tw-transform tw-rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <title>
                  chevron-down</title>
                <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
              </svg>
            </div>
            <div class="tw-space-y-6 tw-pb-5 tw-hidden">
              <h4>Flexible, environmentally friendly Less-than-Container-Load (LCL) rail multi-modal services that
                provides/offers reliable and pre-defined scheduled departures. </h4>
              <h4>Fast, secure & cost efficient transportation, connecting Asia Pacific and Europe – both west and
                eastbound.</h4>
              <ul class="tw-list-[square] tw-text-left tw-space-y-4">
                <li>Standard loading unit: pallets, cartons or boxes</li>
                <li>Service covering origins/destinations in China and Europe</li>
                <li>Regular departures between major business centres, with connections between G-EA’s regional
                  networks, via dedicated rail hubs in Europe and China
                </li>
                <li>Standardised operation from pick-up to delivery, with defined and highly reliable
                  door-to-door lead times
                </li>
                <li>Secure and monitored loading and handling</li>
                <li>State-of-the-art Track and Trace</li>
                <li>Efficient handling of transit formalities</li>
                <li>Pick-up and delivery via G-EA road networks</li>
                <li>Maximum dimensions per item: 240cm (L) x 220cm (W) x 220cm (H)</li>
                <li>Excludes dangerous goods</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="tw-container tw-mx-auto tw-py-10 tw-px-5">
        <h2 class=" tw-font-bold tw-text-3xl tw-mb-8 tw-text-center">Why Choose Us?</h2>
        <div class="tw-flex tw-flex-wrap md:tw-flex-nowrap tw-items-center tw-gap-5 tw-items-stretch">
          <div class="tw-rounded-sm tw-overflow-hidden tw-w-full tw-shadow-md">
            <div class="tw-h-[200px] tw-bg-gray-400">
              <img src="/images/rail-4.jpg" class="tw-w-full tw-h-full tw-object-center tw-object-cover" />
            </div>
            <div class="tw-h-2/4 tw-py-10 tw-px-5">
              <h3 class="tw-text-gray-700 tw-text-sm">Pre-defined schedule and capacity providing fast and secure connection between Asia and
                Europe and/or Europe to Asia</h3>

            </div>
          </div>
          <div class="tw-rounded-sm tw-overflow-hidden tw-w-full tw-shadow-md">
            <div class="tw-h-[200px] tw-bg-gray-400">
              <img src="/images/rail-5.jpeg" class="tw-w-full tw-h-full tw-object-center tw-object-cover" />
            </div>
            <div class="tw-h-2/4 tw-py-10 tw-px-5">
              <h3 class="tw-text-gray-700 tw-text-sm">A range of flexible Rail and Multimodal transport solutions at a cost efficient rate
                including a suite of value added services ensure that you receive the quality service you expect
                from G-EA</h3>

            </div>
          </div>
          <div class="tw-rounded-sm tw-overflow-hidden tw-w-full tw-shadow-md">
            <div class="tw-h-[200px] tw-bg-gray-400">
              <img src="/images/rail-3.jpeg" class="tw-w-full tw-h-full tw-object-center tw-object-cover" />
            </div>
            <div class="tw-h-2/4 tw-py-10 tw-px-5 ">
              <h3 class="tw-text-gray-700 tw-text-sm">Environment-friendly; helping you to meet your environmental responsibility
                commitments</h3>

            </div>
          </div>
        </div>
      </section>
      <section class="tw-container tw-mx-auto tw-py-10 tw-px-5">
        <div class="tw-h-[360px] tw-w-full tw-relative">
          <div class="tw-bg-gray-500 tw-h-full tw-w-full">
            <img src="/images/rail-contact.jpg" alt="" class="tw-h-full tw-w-full tw-object-center tw-object-cover">
          </div>
          <div class="md:tw-absolute tw-inset-0 tw-grid md:tw-place-items-center tw-py-5">
            <div class="md:tw-text-center tw-space-y-5 md:tw-text-white">
              <h2 class="tw-font-bold tw-text-3xl">GET IN TOUCH </h2>
              <h3 class="tw-text-2xl">FOR RAIL FREIGHT INQUIRIES</h3>
              <button class="tw-bg-primary tw-text-white tw-px-4 tw-py-2 tw-rounded-sm tw-w-full">Between Europe - Asia
              </button>
            </div>
          </div>
        </div>
      </section>
    </section>
    <script>
      const readmore = document.querySelectorAll('#readmore')
      readmore.forEach(read => {
        read.addEventListener('click', () => {
          read.nextElementSibling.classList.toggle('tw-hidden')
          read.children[1].classList.toggle('tw-rotate-180')
        })
      })
    </script>

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
