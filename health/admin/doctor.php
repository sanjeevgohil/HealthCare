<?php
	include("header.php");

	include("dbconfig.php");
	$q = mysqli_query($cn,"select * from doctor");
	echo "<table border=1 bordercolor='#FFFFFF' bgcolor='#C0C0C0'>"; 
	echo "<tr><td><b>Id</td><td><b>Name</td><td><b>Username</td><td><b>Password</td><td><b>Specialist</td><td><b>Qualification</td><td><b>Experince</td><td><b>Mobile Number</td><td><b>City</td><td><b>Photo</td><td><b>Delete🥛</td><td><b>Update🔃</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td>".$r[8]."</td><td><img src='../upload/".$r[9]."' width='100px' height='100px'></td><td><form method='POST' action='doctordel.php'><input type='hidden' name='id' value=".$r[0]."><input type='submit' name='delete' value='Delete 🥛'></form></td><td><form method='POST' action='doctorupd.php'><input type='hidden' name='id' value='".$r[0]."'><input type='submit' name='update' value='Update 🔃'></form></td></tr>";
	}
	echo "</table>";
	
	include("footer.php");
?>




