<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		$dnm = $_POST['dnm'];
		$pnm = $_POST['pnm'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$mno = $_POST['mno'];

		$q=mysqli_query($cn,"select * from bookapp where id='$pnm'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{	
			$q=mysqli_query($cn,"INSERT INTO `bookapp` (`id`, `doctorname`, `patientnm`, `date`, `time`, `mobile`) VALUES (NULL, '$dnm', '$pnm', '$date', '$time', '$mno');");

		}	
		else
		{
			
			echo"<script>alert('User Already Registered')</script>";
			echo"<script>window.location='appointment.php'</script>";
		}
	}
	echo"<script>window.location='index.php'</script>";
?>