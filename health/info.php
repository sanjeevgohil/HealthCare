<?php include("header.php"); ?>

<?php
	echo "<div align=center><tr align=right><form action='searchpro.php' method='POST'><input type='text' name='search' placeholder='Search Hear''><input type='submit' name='submit' value='submit'></form></tr></div>";
	
	$cn = mysqli_connect("localhost","root","","health");
	$sp=$_GET['sp'];
	$q = mysqli_query($cn,"select * from doctor where specialist = '".$_GET['sp']."'");
	$count=0;	
	
	echo "<table border=1 align='center' bordercolor='#FFFFFF' bgcolor='#C0C0C0'>"; 
	

	
	echo "<tr><td><b>Book Appoiment</td><td><b>Name</td><td><b>Specialist</td><td><b>Qualification</td><td><b>Experince</td><td><b>Mobile Number</td><td><b>City</td><td><b>Photo</td></tr>";			
	
	while($r = mysqli_fetch_array($q))
	{
		if($count%4 ==0)
		{	 
			echo "<tr><td><a href='info.php?sp=$r[1]'><a href = 'plogin.php'><input type='submit' name='submit' value='Book Appointment'></a></td><td>$r[1]</td><td>$r[4]</td><td>$r[5]</td><td>$r[6]</td><td>$r[7]</td><td>$r[8]</td><td><img src='./upload/".$r[9]."' width='100px' height='100px'></td>";
		}
		else
		{
			echo "<tr><td><a href='info.php?sp=$r[1]'><input type='submit' name='submit' value='Book Appointment'></a></td><td>$r[1]</td><td>$r[4]</td><td>$r[5]</td><td>$r[6]</td><td>$r[7]</td><td>$r[8]</td><td><img src='./upload/".$r[9]."' width='100px' height='100px'></td>";
		}
		$count++;
	}
	echo "</table>";	
?>
<?php include("footer.php");?>