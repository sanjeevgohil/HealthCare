<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$spe = $_POST['spe'];
		
		$q=mysqli_query($cn,"SELECT * FROM `specialist` where name ='$spe'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{
			$q=mysqli_query($cn,"INSERT INTO `specialist` (`id`, `name`) VALUES (NULL, '$spe');");
		}	
		else
		{
			echo"<script>alert('Specialist Already Registered')</script>";
			echo"<script>window.location='specialist.php'</script>";
		}
	}
	echo"<script>window.location='specialist.php'</script>";
?>



