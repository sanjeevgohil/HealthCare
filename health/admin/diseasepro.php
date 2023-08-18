<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$nm = $_POST['nm'];
		$sign = $_POST['sign'];

		$q=mysqli_query($cn,"select * from disease where name='$nm'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{
				$q=mysqli_query($cn,"INSERT INTO `disease` (`id`, `name`, `sign`) VALUES (NULL, '$nm', '$sign');");
		}	
		else
		{
			
			echo"<script>alert('User Already Registered')</script>";
			echo"<script>window.location='disease.php'</script>";
		}
	}
	echo"<script>window.location='disease.php'</script>";
?>

