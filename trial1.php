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
$sql = "SELECT user_id, lat, lon FROM location";
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
<script type="text/javascript">
    
    var neighborhoods = <?php echo json_encode($array); ?>;
 alert(neighborhoods[1].lat);
	   alert(neighborhoods[1].lon);
</script>


</head>
<body>

<p>Creating a JavaScript Object.</p>

<p id="demo"></p>



</body>
</html>




