<?php include("header.php"); ?>

<?php
	include("dbconfig.php");
	$q = mysqli_query($cn,"select * from specialist");
	echo "<table border=2 align='center' bordercolor='#FFFFFF' bgcolor='#C0C0C0'>"; 
	echo "<tr><td><b>Popular Specialist</td></tr>";
	$count=0;
	while($r = mysqli_fetch_array($q))
	{
		if($count%5==0)
		{
			echo "<tr><td><a href='info.php?sp=$r[1]'><img src=../image/s1.jpg><br>$r[1]</a></td>";
		}
		else
		{
			echo "<td><a href='info.php?sp=$r[1]'><img src='../image/s1.jpg'><br>$r[1]</td>";
		}
		$count++;
	}
	echo "</table>";	
?>
<?php include("footer.php");?>