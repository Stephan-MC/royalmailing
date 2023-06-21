<!DOCTYPE html>
<html>
  <head>
    <title>Google Maps Example</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2NEwmw2h1BeZ-1hBwYfp-2S6-Y-wpdwM"></script>
  </head>
  <body>
    <div id="map" style="height: 400px; width: 100%;"></div>
    <script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 0, lng: 0},
          zoom: 8
        });

        // Get the current location from PHP.
        var currentLocation = {lat: <?php echo $current_location['lat']; ?>, lng: <?php echo $current_location['lng']; ?>};

        // Create a marker for the current location.
        var currentMarker = new google.maps.Marker({
          position: currentLocation,
          map: map,
          title: "Current location"
        });

        // Get the departure location from PHP.
        var departureLocation = {lat: <?php echo $departure_location['lat']; ?>, lng: <?php echo $departure_location['lng']; ?>};

        // Create a marker for the departure location.
        var departureMarker = new google.maps.Marker({
          position: departureLocation,
          map: map,
          title: "Departure location"
        });

        // Get the destination location from PHP.
        var destinationLocation = {lat: <?php echo $destination_location['lat']; ?>, lng: <?php echo $destination_location['lng']; ?>};

        // Create a marker for the destination location.
        var destinationMarker = new google.maps.Marker({
          position: destinationLocation,
          map: map,
          title: "Destination location"
        });

        // Create a directions service object to use the Directions API.
        var directionsService = new google.maps.DirectionsService();

        // Create a renderer for directions to display on the map.
        var directionsRenderer = new google.maps.DirectionsRenderer({
          map: map
        });

        // Define the request for directions.
        var request = {
          origin: currentLocation,
          destination: destinationLocation,
          waypoints: [{location: departureLocation}],
          travelMode: '<?php echo $mode_trans; ?>' // use the $mode_trans variable from PHP
        };

        // Send the request to the Directions API.
        directionsService.route(request, function(result, status) {
          if (status == 'OK') {
            // Display the directions on the map.
            directionsRenderer.setDirections(result);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2NEwmw2h1BeZ-1hBwYfp-2S6-Y-wpdwM&callback=initMap">
    </script>
  </body>
</html>
