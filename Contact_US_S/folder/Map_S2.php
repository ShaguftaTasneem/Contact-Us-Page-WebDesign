<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

       function initMap() {
  var london = {lat: 51.5072, lng: -0.1275};
  var birmingham = {lat: 52.4831, lng: -1.8936};

  var map = new google.maps.Map(document.getElementById('map'), {
    center: london,
    scrollwheel: false,
    zoom: 7
  });

  var directionsDisplay = new google.maps.DirectionsRenderer({
    map: map
  });

  // Set destination, origin and travel mode.
  var request = {
    destination: birmingham,
    origin: london,
    travelMode: google.maps.TravelMode.DRIVING
  };

  // Pass the directions request to the directions service.
  var directionsService = new google.maps.DirectionsService();
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      // Display the route on the map.
      directionsDisplay.setDirections(response);
    }
  });
}
        
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQZGT-baEu6-dECEGMez4siW-iNYOVCM4&callback=initMap"
    async defer></script>
  </body>
</html>


<!--
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--> 
<!--
<html>
    <head>
        <title> Geocoding An Address </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
            
    </head>
    <body>
    
         <div>
            <p> Map with the address </p>
</div>
        
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script type="text/javascript">
    
    $.ajax({
        url : "https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyAgTh9VUNLMrNef0PySILvqQTKK0Z__gKg",
        type: "GET",
        success: function (data) {
        
            $.each(data["results"][0]["address_components"], function(key, value) {
              
                if (value["types"][0] == "country") {
                    
                    alert(value["short_name"]);
                    
                }
                
            })
        }
    })
 
    </script>
    

    </body>
</html>

-->