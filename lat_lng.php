<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "software_eng";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT user_id, lat, lon FROM location";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
	{
  //echo "id: " . $row["user_id"]. " - Name: " . $row["lat"]. " " . $row["lon"]. "<br>";
   
   
   echo   $row["user_id"];
   // echo "$row["user_id"]";
   

	
	
	}
} else {
    echo "0 results";
}

mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
<body>

<p>Creating a JavaScript Object.</p>

<p id="demo"></p>

<script>


//need to populate this from database
var neighborhoods = []; 
//neighborhoods.push({lat:100,lng:32});
//neighborhoods.push({lat:120,lng:63});



 // neighborhoods.push({lat:<?php echo   $row["lat"];?>,lng:<?php echo   $row["lon"];?>});
   document.getElementById("demo").innerHTML = neighborhoods[0].lat;
document.getElementById("demo").innerHTML = neighborhoods[1].lat;
document.getElementById("demo").innerHTML = neighborhoods[2].lat;
document.getElementById("demo").innerHTML = neighborhoods[3].lat;
</script>

</body>
</html>




