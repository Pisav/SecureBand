<?php
include "dbVars.php"; //Inloggegevens
$resultArray = array(); //Array voor de query output
$search = $_GET['q']; // Letop niet beschermd tegen SQL injectie!!!
$type = $_GET['type']; // Letop niet bescherm tegen SQL injectie!!!
$con = mysqli_connect($servername,$uid,$pwd,$database); // Bereid connectie voor
if (!$con){die('Could not connect:' . mysqli_error($con));}
mysqli_select_db($con,"c3660bap_mvc");// Selecteer database
$sql = "SELECT * FROM article WHERE keywords LIKE '%$search%' ";//Query voorbereiden
if ($type == "list"){
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)){
		$resultArray[]=[$row['id'],$row['titel']];
	}
	echo json_encode($resultArray, JSON_UNESCAPED_UNICODE);
}
if ($type == "answer"){
$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)){
			// echo "<table>";
			//
			//
			// echo "<td>Code</td>";
			// echo "<td>titel</td>";
			// echo "<td>Continent</td>";
			// echo "<td>Region</td>";
			// echo "<td>Surface Area</td>";
			// echo "<td>Indep Year</td>";
			// echo "<td>Population</td>";
			// echo "<td>Life Expectancy</td>";
			// echo "<td>GNP</td>";
			// echo "<td>GNP Old</td>";
			// echo "<td>Local Name</td>";
			// echo "<td>Government Form</td>";
			// echo "<td>Head Of State</td>";
			// echo "<td>Capital</td>";



			echo "<tr>";
	echo "<td>" . $row['Code'] . "</td>";
	echo "<td>". $row['Name'] . "</td>";
	echo "<td>". $row['Continent'] . "</td>";
	echo "<td>". $row['Region'] . "</td>";
	echo "<td>". $row['SurfaceArea'] . "</td>";
	echo "<td>". $row['IndepYear'] . "</td>";
	echo "<td>". $row['Population'] . "</td>";
	echo "<td>". $row['LifeExpectancy'] . "</td>";
	echo "<td>". $row['GNP'] . "</td>";
	echo "<td>". $row['GNPOld'] . "</td>";
	echo "<td>". $row['LocalName'] . "</td>";
	echo "<td>". $row['GovernmentForm'] . "</td>";
	echo "<td>". $row['HeadOfState'] . "</td>";
	echo "<td>". $row['Capital'] . "</td>";


	echo "</tr> </table>";
	}

	}
mysqli_close($con);
?>
