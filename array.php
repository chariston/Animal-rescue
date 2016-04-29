<html>
<head>
<script>
var array1 = [
       {lat: "15.2832187", lng: "73.98619099999999"},
      {lat: "52.549", lng: "13.422"},
      {lat: "52.497", lng: "13.396"},
      {lat: "52.517", lng: "13.394"}
   ];
//var array1="1 2 3 4 5"
//var intArray = array1.split(" ").map(Number).filter(Boolean); // [5, 6, 7, 69]
array1[0].lat = parseFloat(array1[0].lat);
alert(array1[0].lat);
</script>


</head>



<body>



</body>


</html>