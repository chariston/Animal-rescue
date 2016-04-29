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
$sql = "SELECT  * FROM location";
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



<html>
    <head>

<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0; padding: 0 }
  #map_canvas { height: 100% }
</style>
<script type="text/javascript"
  src=
"http://maps.googleapis.com/maps/api/js?key=AIzaSyB1tbIAqN0XqcgTR1-          FxYoVTVq6Is6lD98&sensor=false">
</script>
<script type="text/javascript">
var locations = <?php echo json_encode($array); ?>;

for (var i=0;i<locations.length;i++)
	{
	
		locations[i].lat=parseFloat(locations[i].lat);				//NEED TO TAKE CARE OF OVERLAPPING ISSUE, IF THE LATS AND CORDS ARE SAME, THAN CHANGE THEM MY 0.0000004
				locations[i].lng=parseFloat(locations[i].lng);
				
	}
	
for (var i=0;i<locations.length;i++)
{
	
	for(var j=1;j<locations.length;j++)
	{
		if(locations[i].lat==locations[j].lat && locations[i].lng==locations[j].lng)
				{
					locations[i].lat=locations[i].lat+0.00003;
					locations[i].lng=locations[i].lng+0.00003;
					locations[j].lat=locations[j].lat-0.00003;
					locations[j].lng=locations[j].lng-0.00003;
					break;
				}
		
	}
	
}

 var marker, i;
	function initialize() {
    var myOptions = {
      center: new google.maps.LatLng(33.890542, 151.274856),
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("default"),
        myOptions);
    setMarkers(map,locations)
  }


  function setMarkers(map,locations){

    for (i = 0; i < locations.length; i++)
 {  

 var loan =  locations[i]["description"]
 var lat  =  locations[i]["lat"]
 var long =  locations[i]["lng"]
 var add  =  locations[i]["Animal"]
 var img  =  locations[i]["image"]
 
 latlngset = new google.maps.LatLng(lat, long);

  var marker = new google.maps.Marker({  
          map: map, title: add , position: latlngset 
		  
        });
        map.setCenter(marker.getPosition())


     //   var content = "Desc: " + loan +  '</h3>' + " Animal: " + add     
	 
	// var content= "<div><img width='254' height='355' src='uploads/"+img+".png'</div>" +add
	 var content= "<div><img width='254' height='355' src='uploads/"+img+".png'</div><br/>Description: " + loan +  '</h3><br/>' + " Animal:" +add

 var infowindow = new google.maps.InfoWindow()
 var infowindow1 = new google.maps.InfoWindow()
 

 
 
google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
        return function() {
           infowindow.setContent(content);
           infowindow.open(map,marker);
		 //infowindow1.open(map, marker);
        };
		
    })(marker,content,infowindow)); 
	
	
	
	//google.maps.event.addListener(marker,'click', (function(marker,content1,infowindow1){ 
    //    return function() {
			
    //       infowindow1.setContent(content1);
    //       infowindow1.open(map,marker);
	//	      infowindow1.open(map, marker);
    //    };
		
  //  })(marker,content,infowindow1)); 
//	   infowindow1 = new google.maps.InfoWindow({
          //content: "<div><img width='254' height='355' src='uploads/"+img+".png'</div>"
		
   //   });

		  
  }
  }
  </script>
 </head>
 <body onload="initialize()">
  <div id="default" style="width:100%; height:100%"></div>
 </body>
  </html>

  }
  }



  </script>
 </head>
 <body onload="initialize()">
  <div id="default" style="width:100%; height:100%"></div>
 </body>
  </html>