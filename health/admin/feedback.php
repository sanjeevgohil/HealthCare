<?php
	include("header.php");

	include("dbconfig.php");
	$q = mysqli_query($cn,"select * from feedback");
	echo "<table border=1 bordercolor='#FFFFFF' bgcolor='#C0C0C0'>"; 
	echo "<tr><td>ID</td><td>Name</td><td>Mobile</td><td>Feedback</td><td>Delete🥛</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td><form method='POST' action='feedbackdel.php'><input type='hidden' name='id' value=".$r[0]."><input type='submit' name='delete' value='Delete🥛'></form></td>";
	}
	echo "</table>";
	
	include("footer.php");
?>
