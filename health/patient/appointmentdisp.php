<?php
	include("header.php");

	include("dbconfig.php");
	$unm=$_SESSION['username'];
	$q1 = mysqli_query($cn,"SELECT * FROM patient where username='$unm'");
	$r1 = mysqli_fetch_array($q1);
	$r1[4];
	$q = mysqli_query($cn,"select * from bookapp where mobile = '$r1[4]'"); 
	echo "<table border=1 bordercolor='#FFFFFF' bgcolor='#C0C0C0'align='center'>"; 
	echo "<tr><td><b>Doctor Name</td><td><b>Patient Name</td><td><b>Date</td><td><b>Time</td><td><b>Mobile</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td></tr>";
	}
	echo "</table>";
	
	include("footer.php");
?>




