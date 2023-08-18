<?php
	include("header.php");

	include("dbconfig.php");
	$q = mysqli_query($cn,"select * from faq");
	echo "<table border=1 bordercolor='#FFFFFF' bgcolor='#C0C0C0'>"; 
	echo "<tr><td>ID</td><td>Name</td><td>Question</td><td>Delete🥛</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td><form method='POST' action='faqdel.php'><input type='hidden' name='id' value=".$r[0]."><input type='submit' name='delete' value='Delete🥛'></form></td>";
	}
	echo "</table>";
	
	include("footer.php");
?>





