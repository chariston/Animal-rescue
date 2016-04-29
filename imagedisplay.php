<html>
<head>
<style>

#wrapper { width: 600px; margin: 0 auto }
#map_canvas { height: 500px; width: 600px }


</style>
<script>

function initialize() {
    var stylez = [
      {
        featureType: "all",
        stylers: [
          { hue: "#0000ff" },
          { saturation: -75 }
        ]
      },
      {
        featureType: "poi",
        elementType: "label",
        stylers: [
          { visibility: "off" }
        ]
      }
    ];

    var latlng = new google.maps.LatLng(59.32522, 18.07002), // Stockholm
    
        mapOptions = {
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, "Edited"] 
            },
            zoom: 14,
            center: latlng
        },
        
        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions),
        
        styledMapType = new google.maps.StyledMapType(stylez, {name: "Edited"}),
        
        marker = new google.maps.Marker({
            position: latlng, 
            map: map, 
            animation: google.maps.Animation.DROP,
            title:"Hello World!"
        }),
        
        infowindow = new google.maps.InfoWindow({
            content: "<div><img width='254' height='355' src='uploads/1.png'</div>"
        });
        
        map.mapTypes.set("Edited", styledMapType);
        map.setMapTypeId('Edited');
    
    function toggleBounce () {
        if (marker.getAnimation() != null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
    
    // Add click listener to toggle bounce
    google.maps.event.addListener(marker, 'click', function () {
        toggleBounce();
        infowindow.open(map, marker);
        setTimeout(toggleBounce, 1500);
    });
}

// Call initialize -- in prod, add this to window.onload or some other DOM ready alternative
initialize();


</script>

</head>

<body onload="initialize()">

<div id="wrapper">
    <div id="map_canvas"></div>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

</body>





</html>