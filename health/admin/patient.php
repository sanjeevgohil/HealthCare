<?php
	include("header.php");

	include("dbconfig.php");
	$q = mysqli_query($cn,"select * from patient");
	echo "<table border=1 bordercolor='#FFFFFF' bgcolor='#C0C0C0'>";  
	echo "<tr><td>Id</td><td>Name</td><td>Username</td><td>Password</td><td>Contact Number</td><td>Email</td><td>City</td><td>Photo</td><td>Delete🥛</td><td>Update🔃</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td><img src='../upload/".$r[7]."' width='100px' height='100px'></td><td><form method='POST' action='patientdel.php'><input type='hidden' name='id' value=".$r[0]."><input type='submit' name='delete' value='Delete🥛'></form></td><td><form method='POST' action='patientupd.php'><input type='hidden' name='id' value=".$r[0]."><input type='submit' name='update' value='Update🔃'></form></td></tr>";
	}
	echo "</table>";
	
	include("footer.php");
?>



