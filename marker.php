
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "software_eng";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$array = array();
$sql = "SELECT  lat, lng FROM location";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) 
	{
   $array[] = $row;
	}
} else {
    echo "0 results";
}
mysqli_close($conn);
?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Marker animations with <code>setTimeout()</code></title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        margin-left: -52px;
      }
    </style>
  </head>
  <body>
    <div id="floating-panel">
      <button id="drop" onclick="drop()">Drop Markers</button>
    </div>
    <div id="map"></div>
    <script>

      // If you're adding a number of markers, you may want to drop them on the map
      // consecutively rather than all at once. This example shows how to use
      // window.setTimeout() to space your markers' animation.

    // var neighborhoods = [
      //  {lat: 15.2832187, lng: 73.98619099999999},
      //  {lat: 52.549, lng: 13.422},
      //  {lat: 52.497, lng: 13.396},
      //  {lat: 52.517, lng: 13.394}
   // ];
 
    var neighborhoods = <?php echo json_encode($array); ?>;
	alert(neighborhoods.length);
	for (var i=0;i<neighborhoods.length;i++)
	{
		//array1[0].lat = parseFloat(array1[0].lat);
		neighborhoods[i].lat=parseFloat(neighborhoods[i].lat);
				neighborhoods[i].lng=parseFloat(neighborhoods[i].lng);
	}

      var markers = [];
      var map;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 15.2832187, lng: 73.98619099999999}
        });
      }

      function drop() {
        clearMarkers();
        for (var i = 0; i < neighborhoods.length; i++) {
          addMarkerWithTimeout(neighborhoods[i], i * 200);
        }
      }

      function addMarkerWithTimeout(position, timeout) {
        window.setTimeout(function() {
          markers.push(new google.maps.Marker({
			
            position: position,
            map: map,
            animation: google.maps.Animation.DROP
			
          }));
        }, timeout);
      }

      function clearMarkers() {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(null);
        }
        markers = [];
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?callback=initMap">
    </script>
  </body>
</html>