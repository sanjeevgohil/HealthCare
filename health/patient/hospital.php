<?php
	include("header.php");

	include("dbconfig.php");
	$q = mysqli_query($cn,"select * from hospital");
	echo "<table border=1 align='center' bordercolor='#FFFFFF' bgcolor='#C0C0C0'>";
	echo "<tr><td><b>Id</td><td><b>Hospital Name</td><td><b>Contact</td><td><b>Address</td><td><b>City</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td>";
	}
	echo "</table>";	

	include("footer.php");
?>
