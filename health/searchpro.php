<?php include("header.php"); 
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		$search = $_POST['search'];
		
		$q = mysqli_query($cn,"select * from doctor where city = '".$search."'");
		
		echo "<table border=1 align='center' bordercolor='#FFFFFF' bgcolor='#C0C0C0'>"; 
		
		echo "<tr><td><b>Book Appoiment</td><td><b>Name</td><td><b>Specialist</td><td><b>Qualification</td><td><b>Experince</td><td><b>Mobile Number</td><td><b>City</td><td><b>Photo</td></tr>";			
		
		$count = 0;
		while($r = mysqli_fetch_array($q))
		{
			if($count%4 ==0)
			{	 
				echo "<tr><td><a href='info.php?sp=$r[1]'><a href = 'plogin.php'>Book Appointment</a></a></td><td>'".$r[1]."'</td><td>'".$r[4]."'</td><td>'".$r[5]."'</td><td>'".$r[6]."'</td><td>'".$r[7]."'</td><td>'".$r[8]."'</td><td><img src='./upload/".$r[9]."' width='100px' height='100px'></td>";
			}
			else
			{
				echo "<tr><td><a href='info.php?sp=$r[1]'>Book Appointment</a></td><td>'".$r[1]."'</td><td>'".$r[4]."'</td><td>'".$r[5]."'</td><td>'".$r[6]."'</td><td>'".$r[7]."'</td><td>'".$r[8]."'</td><td><img src='./upload/".$r[9]."' width='100px' height='100px'></td>";
			}
			$count++;
		}
		echo "</table>";	
	}
	
	include("footer.php");
?>
