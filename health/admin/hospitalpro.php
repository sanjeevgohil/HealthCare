<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$nm = $_POST['nm'];
		$mno = $_POST['mno'];
		$addr = $_POST['addr'];
		$city = $_POST['city'];

		$q=mysqli_query($cn,"select * from hospital where name='$nm'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{
			
			$q=mysqli_query($cn,"INSERT INTO `hospital` (`id`, `name`, `contact`, `address`, `city`) VALUES (NULL, '$nm', '$mno', '$addr', '$city');");
			
		}	
		else
		{
			echo"<script>alert('Hospital Already Registered')</script>";
			echo"<script>window.location='hospital.php'</script>";
		}
	}
	echo"<script>window.location='hospital.php'</script>";
?>

