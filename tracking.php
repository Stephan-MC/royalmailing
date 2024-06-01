<!-- include database connection -->
<?php

include 'admin/pages/config.php';
include 'barcode128.php';

global $mysqli;

$shipment = null;
$error = null;

if (isset($_POST['track'])) {
    extract($_POST);

    if ($result = mysqli_query($mysqli, "SELECT * FROM shipment WHERE trackin_number = $tracking")) {
        $shipment = mysqli_fetch_assoc($result);
        $bar = bar128($tracking);
    } else {
        $error = "Invalid tracking code";
    }
} 
else if (isset($_GET['tracking_code'])) {
    $tracking = $_GET['tracking_code'];

    if ($result = mysqli_query($mysqli, "SELECT * FROM shipment WHERE trackin_number = $tracking")) {
        $shipment = mysqli_fetch_assoc($result);
        $bar = bar128($tracking);
    } else {
        $error = "Invalid tracking code";
    }
  
}


$trackings = [
    'AIR' => 'flying',
    'WATER' => 'flying',
    'LAND' => 'driving',
    'TRANSIT' => 'transit',
]



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>G-Express Agency| Track & Trace Shipment</title>
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

    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css" />
  
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <style>
        body {
            margin: 0;
        }

        #map {
            height: 100vh;
            width: 100vw;
        }
    </style>


    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2NEwmw2h1BeZ-1hBwYfp-2S6-Y-wpdwM"></script> -->
    <!-- <script>
        function geocodeAddress(address, callback) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                address: address
            }, function(results, status) {
                if (status === 'OK' && results.length > 0) {
                    var location = results[0].geometry.location;
                    callback(location);
                } else {
                    console.error('Geocode was not successful for the following reason: ' + status);
                }
            });
        }

        function initMap() {

            var infowindow = new google.maps.InfoWindow();

            // var startingAddress = '123 Main St, City A';
            var startingAddress = "<?= $shipment['departure_location'] ?>";
            // var currentAddress = '456 Park Ave, City B';
            var currentAddress = "<?= $shipment['current_location'] ?>";
            // var destinationAddress = '789 Elm St, City C';
            var destinationAddress = "<?= $shipment['pickup_location'] ?>";

            geocodeAddress(startingAddress, function(startingLocation) {
                var startingMarker = new google.maps.Marker({
                    position: startingLocation,
                    map: map,
                    title: 'Starting Address'
                });

                geocodeAddress(currentAddress, function(currentLocation) {
                    var currentMarker = new google.maps.Marker({
                        position: currentLocation,
                        map: map,
                        title: 'Current Address'
                    });


                    geocodeAddress(destinationAddress, function(destinationLocation) {
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: currentMarker.getPosition().lat(),
                                lng: currentMarker.getPosition().lng()
                            },
                            zoom: 12
                        });

                        console.log(startingLocation)


                        map.setCenter(currentMarker.getPosition())

                        var destinationMarker = new google.maps.Marker({
                            position: destinationLocation,
                            map: map,
                            title: 'Destination Address'
                        });



                        // map.controls[google.maps.ControlPosition.TOP].push(document.getElementById('mapCaption'));

                        var directionsService = new google.maps.DirectionsService();
                        var directionsRenderer = new google.maps.DirectionsRenderer();
                        directionsRenderer.setMap(map);

                        var request = {
                            origin: startingLocation,
                            destination: destinationLocation,
                            travelMode: "<?= $shipment['method'] ?>",
                        };

                        directionsService.route(request, function(result, status) {
                            if (status === 'OK') {
                                directionsRenderer.setDirections(result);
                                var duration = results.routes[0].legs[0].duration.value
                                var currentTime = new Date().getTime()
                                var arrivalTime = currentTime + (duration * 1000) // Arrival time in milliseconds

                                // Calculate remaining time
                                var remainingTime = arrivalTime - currentTime;
                                var remainingMinutes = Math.floor(remainingTime / 60000); // Remaining time in minutes

                                // Display remaining time on the current marker
                                currentMarker.setLabel({
                                    text: remainingMinutes + ' min',
                                    color: 'black'
                                });

                                // Create an event listener for the marker click event
                                currentMarker.addListener('click', function() {
                                    // Set info window content to remaining time
                                    infowindow.setContent('Time Left: ' + remainingMinutes + ' minutes');

                                    // Open info window on the current marker
                                    infowindow.open(map, currentMarker);
                                });

                            } else {
                                console.error('Directions request failed due to ' + status);
                                document.getElementById('mapCaption').classList.add("bg-danger")
                                document.querySelector('#mapCaption > h3').innerHTML = "Distance too long for google map to display proper transit directions"

                                let coordinates = [startingLocation, currentLocation, destinationLocation]
                                    var route = new google.maps.Polyline({
                                        path: coordinates,
                                        geodesic: false,
                                        strokeColor: '#FF0000',
                                        strokeOpacity: 1.0,
                                        strokeWeight: 2,
                                        map
                                    });

                                // route.setMap(map);
                            }
                        });
                    });
                });
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2NEwmw2h1BeZ-1hBwYfp-2S6-Y-wpdwM&callback=initMap"></script> -->
    </script>

</head>

<!-- include header -->

<body onload="">
    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->

        <!-- Main Header-->
      <?php require 'partials/_header.php'; ?>
        <!--End Main Header -->


        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
            <div class="auto-container">
                <h1>Track & Trace Shipment</h1>
            </div>
        </section>

        <!--Breadcrumb-->
        <div class="breadcrumb-outer">
            <div class="auto-container">
                <div class="bread-crumb text-center"><a href="index.php">Home</a> <span class="fa fa-angle-right"></span> <a href="#" class="current">Track & Trace Shipment</a></div>
            </div>
        </div>

        <!-- Single-Service-Start -->
        <section class="service-page-contents section-padding">
            <div class="container">
                <?php if (!isset($shipment)) : ?>
                    <div class="row pb-4" style="text-align: center;">
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-md-6 col-sm-6 d-flex justify-centent-center align-items-center">
                                <h5 class="h6 d-flex justify-content-center align-items-center w-100">&nbsp; Please, Enter a Valid Consignment CODE/NUMBER. </h5>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <form role="form" action='' method="POST">
                                    <div class="input-group">
                                        <input type="text" class="form-control <?= $error ? 'border-danger' : '' ?>" autocomplete="on" name="tracking" placeholder="Track your shipment now" style="height:50px;">
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning tw-bg-primary tw-border-primary text-white" type="submit" name="track" type="submit" style="height:50px; font-size: 15px;">TRACK</button>
                                        </span>
                                    </div>
                                </form>
                            </div><!--/.search--> <br />



                        </div>

                    </div>

                <?php else : ?>

                    <div class="mx-auto">
                        <div class="text-center mx-auto my-4">
                            THE INFORMATIONS BELOW REPRESENTS THE SHIPMENT DETAILS FOR YOUR TRACKING NUMBER
                        </div>

                        <div class="centered display-6 bold-font my-4 mx-auto" style="margin-top: 50px;margin-bottom: 50px;border: 1px solid #0c63a6;color:#0c63a6;">
                            <?= $shipment['status'] ?>
                        </div>

                        <div class="row centered my-4 mx-auto" style="margin-top: 50px;margin-bottom: 50px;border: 1px solid #0c63a6;color:#0c63a6;">
                            <span class="col-12 display-5"><?= $bar ?></span>
                            <!--<span class="col-12 h4 bold-font text-black-50"><?= $shipment['trackin_number'] ?></span>-->
                            <div class="barcode"></div>
                        </div>

                        <div class="row centered my-4 mx-auto" style="margin-top: 50px;margin-bottom: 50px;border: 1px solid #0c63a6;color:#0c63a6;">
                            <span class="col-12 h5 text-black-50 bold-font">Reason For Status</span>
                            <span class="col-12 text-black-50"><?= $shipment['reason_status'] ?></span>
                        </div>

                        <div class="row px-3 px-lg-0">
                            <div class="col-12 col-lg-4 centered my-4 mx-auto" style="margin-top: 50px;margin-bottom: 50px;border: 1px solid #0c63a6;color:#0c63a6;">
                                <span class="col-12 text-start h5 text-black-50 bold-font">SHIPMENT INFORMATION</span>
                                <div class="text-start text-muted">
                                    <div class="d-flex gap-2">
                                        <span class="bold-font intialism">Title: </span>
                                        <span><?= $shipment['title'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">METHOD OF SHIPMENT: </span>
                                        <span class="text-truncate"><?= $shipment['method'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">status: </span>
                                        <span class="text-truncate"><?= $shipment['status'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">category: </span>
                                        <span class="text-truncate"><?= $shipment['category'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">product name: </span>
                                        <span class="text-truncate"><?= $shipment['product_name'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">weight: </span>
                                        <span class="text-truncate"><?= $shipment['product_weight'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">total shipment: </span>
                                        <span class="text-truncate"><?= $shipment['total_shipment'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">description: </span>
                                        <span class="text-truncate"><?= $shipment['description'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">departure location: </span>
                                        <span class="text-truncate"><?= $shipment['departure_location'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">departure date: </span>
                                        <span class="text-truncate"><?= $shipment['departure_date'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">departure time: </span>
                                        <span class="text-truncate"><?= $shipment['departure_time'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">pick up/delivery location: </span>
                                        <span class="text-truncate"><?= $shipment['pickup_location'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">pick up/delivery date: </span>
                                        <span class="text-truncate"><?= $shipment['pickup_date'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">pick up/delivery time </span>
                                        <span class="text-truncate"><?= $shipment['pickup_time'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">current location: </span>
                                        <span class="text-truncate"><?= $shipment['current_location'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">current date: </span>
                                        <span class="text-truncate"><?= $shipment['currentt_date'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">current time: </span>
                                        <span class="text-truncate"><?= $shipment['currentt_time'] ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 centered my-4 mx-auto" style="margin-top: 50px;margin-bottom: 50px;border: 1px solid #0c63a6;color:#0c63a6;">
                                <span class="col-12 text-start h5 text-black-50 bold-font">RECEIVER INFORMATION</span>
                                <div class="text-start text-muted">
                                    <div class="d-flex gap-2">
                                        <span class="bold-font intialism text-truncate">Name: </span>
                                        <span class="text-truncate"><?= $shipment['receiver_name'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">Email: </span>
                                        <span class="text-truncate"><?= $shipment['receiver_email'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">Phone number: </span>
                                        <span class="text-truncate"><?= $shipment['receiver_contact'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">house number: </span>
                                        <span class="text-truncate"><?= $shipment['receiver_hphone'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">street address: </span>
                                        <span class="text-truncate"><?= $shipment['sender_street'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">city/state: </span>
                                        <span class="text-truncate"><?= $shipment['receiver_city'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">county: </span>
                                        <span class="text-truncate"><?= $shipment['receiver_country'] ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 centered my-4 mx-auto" style="margin-top: 50px;margin-bottom: 50px;border: 1px solid #0c63a6;color:#0c63a6;">
                                <span class="col-12 text-start h5 text-black-50 bold-font">SENDER INFORMATION</span>
                                <div class="text-start text-muted">
                                    <div class="d-flex gap-2">
                                        <span class="bold-font intialism text-truncate">Name: </span>
                                        <span class="text-truncate"><?= $shipment['sender_name'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">Email: </span>
                                        <span class="text-truncate"><?= $shipment['sender_email'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">Phone number: </span>
                                        <span class="text-truncate"><?= $shipment['sender_contact'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">city/state: </span>
                                        <span class="text-truncate"><?= $shipment['sender_city'] ?></span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <span class="bold-font initialism text-truncate">county: </span>
                                        <span class="text-truncate"><?= $shipment['sender_country'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row centered my-4 mx-auto" style="margin-top: 50px;margin-bottom: 50px;border: 1px solid #0c63a6;color:#0c63a6;">
                        <span class="col-12 h5 text-black-50 bold-font">SHIPMENT HISTORY</span>
                        <div class="table-responsive overflow-auto">

                            <?php

                            // Check connection
                            if (!$mysqli) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            // Execute a query to retrieve shipment data
                            $sql = "SELECT * FROM shipment_process WHERE trakin_number = $tracking";
                            $result = mysqli_query($mysqli, $sql);

                            // Loop through the results and output table rows
                            if (mysqli_num_rows($result) > 0) {

                                echo '   <table class="table table-bordered table-hover table-striped style="text-align: center;"">';
                                echo '   <thead>';
                                echo '     <tr>';
                                echo '         <th class="text-nowrap " style="text-align: center;">Tracking number</th>';
                                echo '            <th class="text-nowrap" style="text-align: center;">current location</th>';
                                echo '             <th class="text-nowrap" style="text-align: center;">status</th>';
                                echo '              <th class="text-nowrap" style="text-align: center;">Reason for status</th>';
                                echo '               <th class="text-nowrap" style="text-align: center;">Date</th>';
                                echo '            <th class="text-nowrap" style="text-align: center;">Time</th>';
                                echo '         </tr>';
                                echo '     </thead><tbody style="text-align: center;">';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td >" . $row["trakin_number"] . "</td>";
                                    echo "<td>" . $row["current_location"] . "</td>";
                                    echo "<td style='background-color: lightblue ;border-radius: 35px;'>" . $row["status"] . "</td>";
                                    echo "<td>" . $row["reason"] . "</td>";
                                    echo "<td>" . $row["date"] . "</td>";
                                    echo "<td>" . $row["time"] . "</td>";
                                }


                                echo "</tbody>";
                                echo ' </table>';
                            } else {
                                echo "0 results" . mysqli_error($mysqli);
                            }
                            mysqli_close($mysqli);
                            ?>
                        </div>

                    </div>

                    <div class="row centered my-4 mx-auto" style="margin-top: 50px;margin-bottom: 50px;border: 1px solid #0c63a6;color:#0c63a6;">
                        <!-- <div id='map' style="height: 30rem"></div> -->
                        <div id="mapCaption" class="bg-primary text-white">
                            <h3>Package location and track preview</h3>
                        </div>
                        <iframe width="100%" height="480" src="https://www.google.com/maps/embed/v1/directions?zoom=6&key=AIzaSyDqW_doPF5GTHuydgaVBfTfJOVtFAH98gM&origin=<?= $shipment['departure_location'] ?>&destination=<?= $shipment['pickup_location'] ?>&mode=<?= $trackings[$shipment['method']] ?>" frameborder="0"></iframe>
                        <!-- <div id='map' style="height: 30rem"></div> -->
                    </div>
                    <!-- /.row -->
                    <!-- end map row -->
                <?php endif; ?>
            </div><!-- /.container -->

        </section>
        <!-- Single-Service-End-->

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
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/revolution.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/owl.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/script.js"></script>
</body>



</html>
