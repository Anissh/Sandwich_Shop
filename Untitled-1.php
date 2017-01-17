<title>MySql -  getting data</title>
<?php
$username=array();
echo "ya boi                                                                   ";
$user='root';
$pass='';
$db='acvidb';

$conn = mysqli_connect("localhost",$user,$pass,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



$sql="SELECT * from pettable";
$result = $conn->query($sql);
echo "<table border = 5>";
echo "<tr>";
echo "<td style='font-weight:bold'> Name </td>";
echo "<td style='font-weight:bold'> Breed </td>";
echo "<td style='font-weight:bold'> Gender </td>";
echo "<td style='font-weight:bold'> Color </td>";
echo "<td style='font-weight:bold'> Age </td>";
echo "</tr>";

while($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>" .$row["Name"];
	echo "<td>" .$row["Breed"];
	echo "<td>" .$row["Gender"];
	echo "<td>" .$row["Color"];
	echo "<td>" .$row["Age"];
	echo "</tr>";	
    }
	


mysqli_close($conn);  

?>