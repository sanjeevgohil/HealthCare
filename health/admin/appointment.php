<?php
	include("header.php");

	include("dbconfig.php");
	$q = mysqli_query($cn,"select * from bookapp");
	echo "<table border=1 bordercolor='#FFFFFF' bgcolor='#C0C0C0' align='center'>"; 
	echo "<tr><td><b>Id</td><td><b>Patient Name</td><td><b>Date</td><td><b>Time</td><td><b>Mobile</td><td><b>Delete🥛</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td><form method='POST' action='appointmentdel.php'><input type='hidden' name='id' value=".$r[0]."><input type='submit' name='delete' value='Delete 🥛'></form></td></tr>";
	}
	echo "</table>";
	
	include("footer.php");
?>




