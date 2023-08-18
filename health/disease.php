<?php
	include("header.php");

	include("dbconfig.php");

	$q = mysqli_query($cn,"select * from disease");
	echo "<table border=1 align='center' bordercolor='#FFFFFF' bgcolor='#C0C0C0' align:'center'>";
	echo "<tr><b><td>Id</td><td><b>Disease Name</td><td><b>Disease Sign</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td></tr>";
	}
	echo "</table>";
	
	include("footer.php");
?>
