<?php
	include("header.php");

	include("dbconfig.php");
	$q = mysqli_query($cn,"select * from blog");
	echo "<table border=1 bordercolor='#FFFFFF' bgcolor='#C0C0C0'>"; 
	echo "<tr><td><b>Id</td><td><b>Doctor Name</td><td><b>Information</td><td><b>Photo</td><td><b>Delete🥛</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td><img src='../upload/".$r[3]."' width='100px' height='100px'></td><td><form method='POST' action='blogdel.php'><input type='hidden' name='id' value=".$r[0]."><input type='submit' name='delete' value='Delete 🥛'></form></td></tr>";
	}
	echo "</table>";
	
	include("footer.php");
?>




