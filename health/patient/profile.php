<?php
	include("header.php");

	include("dbconfig.php");
	$unm=$_SESSION['username'];
	$q=mysqli_query($cn,"SELECT * FROM patient where username='$unm'");
	$r=mysqli_fetch_array($q);

	echo "<table align= 'center' border=1 bordercolor='#FFFFFF' bgcolor='#C0C0C0' >"; 

	echo"<font align='center' color = '#C0C0C0'><h1>Your Profile</h1></font>";
 
	echo "<tr><td>Photo</td><td><img src='../upload/".$r[7]."' width='100px' height='100px'></td></tr><tr></tr><tr></tr><tr><td><b>Name</td><td>".$r[1]."</td></tr><tr></tr><tr></tr> <tr><td><b>Username</td><td>".$r[2]."</td></tr><tr></tr><tr></tr> <tr><td><b>Password</td><td>".$r[3]."</td></tr><tr></tr><tr></tr><tr><td><b>Specialist</td><td>".$r[4]."</td></tr><tr></tr><tr></tr><tr><td><b>Qualification</td><td>".$r[5]."</td></tr><tr></tr><tr></tr><tr><td><b>Experince</td><td>".$r[6]."</td></tr><tr></tr><tr></tr><tr><td><b>Edit Profile🔃</td><td><form method='POST' action='pupdate1.php'><input type='hidden' name='id' value='".$r[0]."'><input type='submit' name='update' value='Edit Profile'></form></td></tr><tr><td><b>Your Appointment📔</td><td><form method='POST' action='appointmentdisp.php'><input type='submit' name='submit' value='Show'></form></td></tr>";
 
	include("footer.php");
?>

